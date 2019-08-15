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
 * Class course
 *
 * Sonis API Framework
 *
 * Component: crs_sec_list.cfc
 *
 * @file course.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class course {

    /**
     * @param $crs_id
     * @return array
     */
    public static function getcoreq($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * @param $crs_id
     * @return array
     */
    public static function getcreqs($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * @param $crs_id
     * @return array
     */
    public static function getprereq($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * @param $schyear
     * @param $semlist
     * @param string $camp_cod
     * @return array
     */
    public static function getprereqco($schyear, $semlist, $camp_cod = '') {
        $params = [
            ['schyear', $schyear],
            ['semlist', $semlist],
            ['camp_cod', $camp_cod]
        ];
        return $params;
    }

    /**
     * @param $schyear
     * @param $semlist
     * @param $curpage
     * @param $camp_cod
     * @param $search
     * @return array
     */
    public static function getresults($schyear, $semlist, $curpage, $camp_cod, $search) {
        $params = [
            ['schyear', $schyear],
            ['semlist', $semlist],
            ['curpage', $curpage],
            ['camp_cod', $camp_cod],
            ['search', $search],
        ];
        return $params;
    }

}
