<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2016 Jason A. Everling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

/**
 * Class utils
 *
 * Utilities
 *
 * Various php utilities
 *
 * @file utils.php
 * @package Utilities
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class utils {

    /**
     * Format date/time to yyyy-mm-dd
     *
     * @param string $date
     * @return false|string
     * http://docs.php.net/manual/en/function.date.php
     */
    public function utils_dt($date) {
        return date("Y-m-d", strtotime($date));
    }

    /**
     * Returns a dynamic message with
     * trigger_error and/or can fail.
     *
     * @param string $msg
     * @param bool $fail Is it fatal?
     * @return mixed
     * @link http://docs.php.net/manual/en/function.trigger-error.php
     */
    public function utils_event_error($msg, $fail) {
        if (!$fail) {
            return trigger_error($msg);
        }
        trigger_error($msg);
        die();
    }

    /**
     * Convert given string $data to lowercase,
     * using strtolower
     *
     * @param string $data
     * @return false|string
     * http://docs.php.net/manual/en/function.strtolower.php
     */
    public function utils_lc($data) {
        return strtolower($data);
    }

    /**
     * Convert given string $data to uppercase,
     * using strtoupper
     *
     * @param string $data
     * @return false|string
     * @link http://docs.php.net/manual/en/function.strtoupper.php
     */
    public function utils_uc($data) {
        return strtoupper($data);
    }

    /**
     * Process an array.
     *
     * Sonis returns two arrays (keys, values),
     * cleanup, remove duplicates, combine keys to
     * values into a single array.
     *
     * Ensure returned data is an array, if sql data
     * called ensure a result is returned. If data is
     * not an array, send to error log.
     *
     * @param $array
     * @return array|string
     * @link http://docs.php.net/manual/en/function.array-reduce.php
     * @link http://docs.php.net/manual/en/function.array-map.php
     */
    public function utils_array_process($array) {
        global $wsdl;
        if (is_object($array)) {
            $obj = $this->utils_array_trim($this->utils_array_merge($array));
            if (count($array->columnList) == count($obj)) {
                $result = $this->utils_array_combine($array->columnList, $obj);
            } else {
                if (count($array->data) > 0) {
                    foreach($array->data AS $column => $data) {
                        $result[] = $this->utils_array_combine($array->columnList, $data);
                    }
                } else {
                    /**
                     * Only for soapsql.cfc,
                     * but soapapi.cfc can have empty results
                     */
                    if (!strpos($wsdl, 'soapsql')) {
                        $result = '0';
                    } else {
                        $result = $array;
                    }
                }
            }
        } else {
            /**
             * if it is not an array than we got an error
             * more than likely, but Sonis does not return
             * an error code, rather a whole lot of messy
             * html strings. Search for exception/error if not
             * return the string.
             *
             * @todo Figure out a way to handle these errors better
             */
            if(is_string($array)) {
                if (strpos($array, 'Error')) {
                    $this->utils_array_exception($array);
                    $this->utils_event_error(messages::msg_array_error(), true);
                } else {
                    $result = $array;
                }
            } else {
                $result = $array;
            }
        }
        return $result;
    }

    /**
     * Combine an array using array_walk
     * Sonis can return duplicate keys/values
     *
     * @param $keys
     * @param $values
     * @return array
     * @link http://docs.php.net/manual/en/function.array-combine.php#118397
     * @author welcome@el-mustafa.com
     */
    public function utils_array_combine($keys, $values) {
        $result = [];
        foreach ($keys as $i => $k) {
            $result[$k][] = $values[$i];
        }
        array_walk($result, function(&$v){
            $v = (count($v) == 1) ? array_pop($v): $v;
            }
        );
        return $result;
    }

    /**
     * Send Coldfusion exception to system defined errorlog
     *
     * @param string $array
     * @return bool
     * @link http://docs.php.net/manual/en/function.error-log.php
     */
    public function utils_array_exception($array) {
        return error_log($array);
    }

    /**
     * Creates an associative array from the
     * given array($array).
     *
     * API results are in the form of
     * array 0 = columns/keys, array 1 = data/values,
     * this will create an associative array instead,
     * [column/key] => value
     *
     * @param $array
     * @return array
     * @link http://docs.php.net/manual/en/function.is-array.php
     */
    public function utils_array_create_assoc($array) {
        $result = [];
        $convert = ((isset($array['data'])) && (is_array($array['data'])) && ($array['data'] != []));
        if ($convert) {
            foreach ($array['data'] as $row) {
                $assoc = [];
                $i = 0;
                foreach ($array['columnList'] as $column) {
                    $assoc[$column] = $row[$i++];
                }
                $result[] = $assoc;
            }
        }
        if ($result == []) {
            return ($array);
        }
        else {
            return ($result);
        }
    }

    /**
     * Change all keys in an array to lowercase
     *
     * @param array $array
     * @return array|bool
     * @link http://docs.php.net/manual/en/function.array-change-key-case.php
     */
    public function utils_array_lc($array) {
        $result = array_change_key_case($array, CASE_LOWER);
        return $result;
    }

    /**
     * Reduce/Deduplicate an array using array_merge
     *
     * @param array $array
     * @return array|bool
     * @link http://docs.php.net/manual/en/function.array-reduce.php
     */
    public function utils_array_merge($array) {
        $result = array_reduce($array->data, 'array_merge', []);
        return $result;
    }

    /**
     * Trim an array using array_map
     *
     * @param array $array
     * @return array|bool
     * @link http://docs.php.net/manual/en/function.array-map.php
     */
    public function utils_array_trim($array) {
        $result = array_map('trim', $array);
        return $result;
    }


    /**
     * Convert a given object($obj) to an array($result)
     *
     * Will take a given object($obj) and convert
     * it to an array($result). If it already exists, it will
     * just return the given object($obj).
     *
     * @param object $obj The object to create an array from
     * @return array|object The converted object as an array
     * @link http://docs.php.net/manual/en/function.is-array.php
     * @link http://docs.php.net/manual/en/function.is-object.php
     * @link http://docs.php.net/manual/en/function.array-keys.php
     * @link http://docs.php.net/manual/en/function.get-object-vars.php
     */
    public function utils_obj_to_array($obj) {
        $result = [];
        if (!is_array($obj)) {
            if (is_object($obj)) {
                $keys = array_keys(get_object_vars($obj));
            } else {
                return $obj;
            }
        } else {
            $keys = array_keys($obj);
        }
        foreach ($keys as $key) {
            if (!is_array($obj)) {
                $result[$key] = $this->utils_obj_to_array($obj->$key);
            } else {
                $result[$key] = $this->utils_obj_to_array($obj[$key]);
            }
        }
        return $result;
    }
}
