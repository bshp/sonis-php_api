<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2016-2019 Jason A. Everling
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

namespace Jenzabar\Sonis\Api;

use Exception;
use SoapClient;

/**
 * Class utils
 *
 * Utilities
 *
 * Various php utilities
 *
 * @property string user api username
 * @property string pass api users password
 * @property string host api host
 * @property boolean proxy_net if a proxy is required, true or false
 * @property boolean proxy_auth if proxy authentication is required, true or false
 * @property string proxy_host proxy host, example.proxy.com or 1.1.1.1
 * @property integer proxy_port proxy port to use
 * @property string proxy_user proxy user
 * @property string proxy_pass proxy users password
 * @property array opts additional config options
 * @property string release the release version
 *
 * @file Utils.php
 * @package Utilities
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class Utils
{

    /**
     * Decepticon Constructor
     */
    public function __construct()
    {
        global $cfg;
        $this->user = $cfg->user;
        $this->pass = $cfg->pass;
        $this->host = rtrim($cfg->host, '/');
        $this->proxy_net = $cfg->proxy_net;
        $this->proxy_auth = $cfg->proxy_auth;
        $this->proxy_host = $cfg->proxy_host;
        $this->proxy_port = $cfg->proxy_port;
        $this->proxy_user = $cfg->proxy_user;
        $this->proxy_pass = $cfg->proxy_pass;
        $this->opts = $cfg->opts;
        $this->release = $cfg->release;
    }

    /**
     * Store api config variables
     *
     * @return array
     */
    public function apiCfg()
    {
        return [
            'user' => $this->user,
            'pass' => $this->pass,
            'host' => $this->host,
            'opts' => $this->opts,
            'release' => $this->release,
        ];
    }

    /**
     * Simple check for the api endpoint
     *
     * @return boolean Returns true or false if endpoint is up
     */
    public function apiUp()
    {
        $ch = curl_init($this->host . '/cfc/SoapApi.cfc?wsdl');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        if ($this->proxy_net) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy_host);
            curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxy_port);
        }
        if ($this->proxy_auth) {
            curl_setopt($ch, CURLOPT_USERPWD, "$this->proxy_user:$this->proxy_pass");
        }
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        //don't really need detailed error codes
        switch ($httpcode) {
            case 200:
                return true;
        }
        return false;
    }

    /**
     * Generates a new Sonis ID
     *
     * @param string $lastname string the persons last name
     * @return string the generated id
     */
    public function createID($lastname)
    {
        $ln = $this->uc(substr($lastname, 0, 2));
        do {
            $sonisid = $ln . rand(1000000, 9999000);
            $stmt = "SELECT soc_sec FROM name WHERE soc_sec = '$sonisid'";
            $matcher = SoapSql::run($stmt);
        } while ($matcher != 0);
        $result = $sonisid;
        return $result;
    }

    /**
     * Generate an RID for Sonis
     *
     * Some tables require a random (*_rid field),
     * this will create a compatible integer for use.
     *
     * @param string $suffix Either a 0 or 1 suffixed to match Sonis rid's
     * @example 201909282842393810
     * @author Jason A. Everling
     * @return string the generated number
     */
    public function createRID($suffix = '')
    {
        $result = '';
        $now = date("Ymd");
        $rnd = rand(100000000, 999999999);
        $valid = ['0', '1'];
        if ($suffix != '') {
            if (in_array($suffix, $valid)) {
                $result = $now . $rnd . $suffix;
            } else {
                $result = lang::get('invalid_rid');
            }
        } else {
            $result = $now . $rnd . '0';
        }
        return $result;
    }
    
    /**
     * Generate a UUID, either in coldfusion (cf) format or standard
     *
     * @param string $format Either 'cf' or 'rfc'
     * @param string $case Return as uppercase or lowercase, either of 'lc' or 'uc'
     * @return string $uuid The generated UUID
     */
    public function createUUID($format = '', $case = '')
    {
        if ($format == 'cf') {
            $uuid = sprintf(
                '%04x%04x-%04x-%04x-%04x%04x%04x%04x',
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0C2f) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0x2Aff),
                mt_rand(0, 0xffD3),
                mt_rand(0, 0xff4B)
            );
        } else {
            $uuid = sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0C2f) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0x2Aff),
                mt_rand(0, 0xffD3),
                mt_rand(0, 0xff4B)
            );
        }
        if ($case == 'uc') {
            return $this->uc($uuid);
        }
        return $this->lc($uuid);
    }

    /**
     * Debugging a SOAP call, handle routing
     *
     * @param mixed $call The SOAP call that is executed
     * @return bool|mixed
     */
    public function debugSoap($call)
    {
        $message = $call->__getLastRequest();
        if ($this->opts['debug_display']) {
            return print_r($message);
        }
        return error_log($message, 0);
    }

    /**
     * Format date/time to yyyy-mm-dd
     *
     * @param string $date
     * @return false|string
     * http://docs.php.net/manual/en/function.date.php
     */
    public function dt($date)
    {
        return date("Y-m-d", strtotime($date));
    }

    /**
     * Returns a dynamic message with
     * trigger_error and/or can fail.
     *
     * @param string $msg
     * @param boolean $fail Is it fatal?
     * @return mixed
     * @link http://docs.php.net/manual/en/function.trigger-error.php
     */
    public function eventError($msg, $fail)
    {
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
    public function lc($data)
    {
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
    public function uc($data)
    {
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
    public function arrayProcess($array)
    {
        global $wsdl;
        if (is_object($array)) {
            $obj = $this->arrayTrim($this->arrayMerge($array));
            if (count($array->columnList) == count($obj)) {
                $result = $this->arrayCombine($array->columnList, $obj);
            } else {
                if (count($array->data) > 0) {
                    foreach ($array->data as $column => $data) {
                        $result[] = $this->arrayCombine($array->columnList, $data);
                    }
                } else {
                    /**
                     * Only for SoapSql.cfc,
                     * but SoapApi.cfc can have empty results
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
            if (is_string($array)) {
                if (strpos($array, 'Error')) {
                    $this->arrayException($array);
                    $this->eventError(lang::get('array_error'), true);
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
    public function arrayCombine($keys, $values)
    {
        $result = [];
        foreach ($keys as $i => $k) {
            $result[$k][] = $values[$i];
        }
        array_walk($result, function (&$v) {
            $v = (count($v) == 1) ? array_pop($v) : $v;
        });
        return $result;
    }

    /**
     * Send Coldfusion exception to system defined errorlog
     *
     * @param string $array
     * @return boolean
     * @link http://docs.php.net/manual/en/function.error-log.php
     */
    public function arrayException($array)
    {
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
    public function arrayCreateAssoc($array)
    {
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
        } else {
            return ($result);
        }
    }

    /**
     * Change all keys in an array to lowercase,
     * works on multi-dimensional arrays as well.
     *
     * @param array $array
     * @return array|boolean
     * @link http://docs.php.net/manual/en/function.array-change-key-case.php
     */
    public function arrayLC($array)
    {
        $multi_array = false;
        if (is_array($array) && isset($array[0])) {
            $multi_array = true;
        }
        if ($multi_array) {
            $result = $this->arrayOfArraysLC($array);
        } else {
            $result = array_change_key_case($array, CASE_LOWER);
        }
        return $result;
    }

    /**
     * Change key case to lower for multi-dimensional arrays
     *
     * @param array $array
     * @return array
     */
    private function arrayOfArraysLC($array)
    {
        return array_map(function ($item) {
            if (is_array($item)) {
                $item = $this->arrayOfArraysLC($item);
            }
            return $item;
        }, array_change_key_case($array, CASE_LOWER));
    }

    /**
     * Reduce/Deduplicate an array using arrayMerge
     *
     * @param array $array
     * @return array|boolean
     * @link http://docs.php.net/manual/en/function.array-reduce.php
     */
    public function arrayMerge($array)
    {
        $result = array_reduce($array->data, 'array_merge', []);
        return $result;
    }

    /**
     * Trim an array using array_map
     *
     * @param array $array
     * @return array|boolean
     * @link http://docs.php.net/manual/en/function.array-map.php
     */
    public function arrayTrim($array)
    {
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
    public function objToArray($obj)
    {
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
                $result[$key] = $this->objToArray($obj->$key);
            } else {
                $result[$key] = $this->objToArray($obj[$key]);
            }
        }
        return $result;
    }

    /**
     * Set SOAP client config
     *
     * Configurations can be set within sonis.php
     * $cfg->opts section.
     *
     * @param string $wsdl the wsdl location
     * @param array $opts SOAP options
     * @return array|SoapClient
     */
    public function soapClient($wsdl, $opts)
    {
        try {
            $result = new SoapClient($wsdl, $opts);
        } catch (Exception $exception) {
            return ['error' => lang::get('soap_client_error') . $exception];
        }
        return $result;
    }

    /**
     * Check if string begins with
     *
     * Returns true or false if a given $start_string is
     * found in the given $string
     *
     * @param string $string The string to search in
     * @param string $start_string The value to search for
     * @return bool True or False if found
     */
    public function startsWith($string, $start_string)
    {
        $len = strlen($start_string);
        return (substr($string, 0, $len) === $start_string);
    }

    /**
     * Returns the Sonis PHP API version information
     *
     * @param string $key The display type to get, major, patch or pretty
     * @return string $result API version for Sonis
     */
    public function getVersion($key)
    {
        $result = '';
        $maj = $this->apiCfg()['release']['version'];
        $patch = $this->apiCfg()['release']['patch'];
        $full = 'v' . $maj . '.' . $patch;
        if ($key == 'major') {
            $result = $maj;
        }
        if ($key == 'patch') {
            $result = $patch;
        }
        if ($key == 'pretty') {
            $result = $full;
        }
        return $result;
    }
}
