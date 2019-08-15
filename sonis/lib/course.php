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
     * Get course core requisites
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getcoreq($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * Get course requisites
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getcreqs($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * Get course pre-reqs
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getprereq($crs_id) {
        $params = [
            ['crs_id', $crs_id],
        ];
        return $params;
    }

    /**
     * Get course core pre-reqs
     *
     * @param integer $schyear The school year in yyyyyy format, 201718
     * @param integer $semlist The semester, i.e 1,2,3,4..
     * @param string $camp_cod The campus code
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
}
