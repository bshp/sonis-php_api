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

/**
 * Class course
 *
 * Sonis API Framework
 *
 * Component: crs_sec_list.cfc
 *
 * @file Course.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class Course
{

    /**
     * The Sonis component to call
     *
     * @var string $comp
     */
    public static $comp = 'crs_sec_list';

    /**
     * Get course core requisites
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getCoreReq($crs_id)
    {
        $comp = self::$comp;
        $method = 'getcoreq';
        $returns = 'yes';
        $params = [
            ['crs_id', $crs_id],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Get course requisites
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getCourseReqs($crs_id)
    {
        $comp = self::$comp;
        $method = 'getcreqs';
        $returns = 'yes';
        $params = [
            ['crs_id', $crs_id],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Get course pre-reqs
     *
     * @param integer $crs_id The course id
     * @return array
     */
    public static function getPreReqs($crs_id)
    {
        $comp = self::$comp;
        $method = 'getprereq';
        $returns = 'yes';
        $params = [
            ['crs_id', $crs_id],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Get course core pre-reqs
     *
     * @param integer $schyear The school year in yyyyyy format, 201718
     * @param integer $semlist The semester, i.e 1,2,3,4..
     * @param string $camp_cod The campus code
     * @return array
     */
    public static function getCoursePreReqs($schyear, $semlist, $camp_cod = '')
    {
        $comp = self::$comp;
        $method = 'getprereqco';
        $returns = 'yes';
        $params = [
            ['schyear', $schyear],
            ['semlist', $semlist],
            ['camp_cod', $camp_cod]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }
}
