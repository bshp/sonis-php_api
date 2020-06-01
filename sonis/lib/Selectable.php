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
 *
 *    For Sonis Coldfusion Web Services
 *
 *    By: Jason A. Everling
 *    Email: jeverling@bshp.edu
 *
 */

namespace Jenzabar\Sonis\Api;

/**
 * Class selectable
 *
 * Sonis API Framework
 *
 * Select fields with the user selected value
 *
 * @file Selectable.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class Selectable
{

    /**
     * Get the users selected option and/or return the select list
     *
     * @param string $options The dropdown to be returned
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $result The select list
     */
    private static function optionsList($options, $allow_blank = '')
    {
        global $utils;
        $stmt = '';
        $result = '';
        $key = '';
        $value = '';
        if ($options == 'cell_provider') {
            $stmt = "SELECT rtrim(c.cell_provider) as cell_provider
                     FROM cell_provider AS c 
                     ORDER BY c.cell_provider ASC";
            $key = 'cell_provider';
            $value = 'cell_provider';
        }
        if ($options == 'country') {
            $stmt = "SELECT rtrim(c.country) as country, rtrim(c.country_txt) as country_txt
                     FROM country AS c
                     ORDER BY c.country_txt ASC";
            $key = 'country';
            $value = 'country_txt';
        }
        if ($options == 'department') {
            $stmt = "SELECT RTRIM(dept_cod) AS dept_cod, RTRIM(dept_txt) AS dept_txt
                     FROM dept
                     WHERE disabled = '0'
                     ORDER BY dept_cod ASC";
            $key = 'dept_cod';
            $value = 'dept_txt';
        }
        if ($options == 'ethnicity') {
            $stmt = "SELECT rtrim(e.ethnic_cod) as ethnic_cod, rtrim(e.ethnic_txt) as ethnic_txt
                     FROM ethnic AS e
                     ORDER BY e.ethnic_txt ASC";
            $key = 'ethnic_cod';
            $value = 'ethnic_txt';
        }
        if ($options == 'gender') {
            $stmt = "SELECT rtrim(g.gender_cod) as gender_cod, rtrim(g.gender_txt) as gender_txt
                     FROM gender AS g
                     ORDER BY g.gender_txt ASC";
            $key = 'gender_cod';
            $value = 'gender_txt';
        }
        if ($options == 'institution') {
            $stmt = "SELECT rtrim(i.inst_txt) as inst_txt, rtrim(i.insttypcod) as insttypcod,
                            rtrim(i.inst_cod) as inst_cod
                     FROM institut AS i
                     ORDER BY i.inst_txt ASC";
            $key = 'inst_cod';
            $value = 'inst_txt';
        }
        if ($options == 'marital') {
            $stmt = "SELECT rtrim(m.mar_cod) as mar_cod, rtrim(m.mar_txt) as mar_txt
                     FROM marital AS m
                     ORDER BY m.mar_txt ASC";
            $key = 'mar_cod';
            $value = 'mar_txt';
        }
        if ($options == 'state') {
            $stmt = "SELECT rtrim(s.state_name) as state_name, rtrim(s.state_abbr) as state_abbr
                     FROM state AS s
                     ORDER BY s.state_name ASC";
            $key = 'state_abbr';
            $value = 'state_name';
        }
        if ($stmt == '') {
            return false;
        }
        $items = $utils->arrayLower(SoapSql::run($stmt));

        if ($allow_blank) {
            foreach ($items as $item) {
                $result .= '<option value="' . $item[$key] . '">' . $item[$value] . '</option>';
            }
            $result = '<option value=""></option>' . $result;
        } else {
            foreach ($items as $item) {
                $result .= '<option value="' . $item[$key] . '">' . $item[$value] . '</option>';
            }
        }
        return $result;
    }

    /**
     * Returns a dropbox for cell providers, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function cellProvider($user, $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('cell_provider', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT a.soc_sec, rtrim(c.cell_provider) as cell_provider,
                            rtrim(c.cell_provider_url) as cell_provider_url
                     FROM address AS a 
                        INNER JOIN cell_provider AS c ON a.cell_provider = c.cell_provider 
                            AND a.preferred = '1'
                    WHERE a.soc_sec = '$user'
                    ORDER BY c.cell_provider ASC";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['cell_provider'] . '" selected>' . $selected['cell_provider'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for countries, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function country($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('country', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT a.soc_sec, rtrim(c.country) as country, rtrim(c.country_txt) as country_txt
                     FROM address AS a
                        INNER JOIN country AS c ON a.country = c.country 
                            AND a.preferred = '1' 
                    WHERE a.soc_sec = '$user'
                    ORDER BY c.country_txt ASC";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['country'] . '" selected>' . $selected['country_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for departments, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function department($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('department', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT n.soc_sec, n.dept_cod, rtrim(d.dept_cod) AS dept_cod, rtrim(d.dept_txt) AS dept_txt
                     FROM name n
                        INNER JOIN dept d on n.dept_cod = d.dept_cod
                     WHERE n.soc_sec = '$user'";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['dept_cod'] . '" selected>' . $selected['dept_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for ethnicity, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function ethnicity($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('ethnicity', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT n.soc_sec, rtrim(e.ethnic_cod) as ethnic_cod, rtrim(e.ethnic_txt) as ethnic_txt
                     FROM name AS n
                        INNER JOIN ethnic AS e ON n.ethnic_cod = e.ethnic_cod 
                    WHERE n.soc_sec = '$user'";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['ethnic_cod'] . '" selected>' . $selected['ethnic_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for gender's, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function gender($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('gender', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT n.soc_sec, rtrim(g.gender_cod) as gender_cod, rtrim(g.gender_txt) as gender_txt
                     FROM name AS n
                        INNER JOIN gender AS g ON n.gender = g.gender_cod
                    WHERE n.soc_sec = '$user'
                    ORDER BY g.gender_txt ASC";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['gender_cod'] . '" selected>' . $selected['gender_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for institutions, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function institution($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('institution', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT n.soc_sec, rtrim(i.inst_txt) as inst_txt,
                            rtrim(i.insttypcod) as insttypcod, rtrim(i.inst_cod) as inst_cod
                     FROM name AS n
                        INNER JOIN nmedu AS e ON n.soc_sec = e.soc_sec
                        INNER JOIN institut AS i ON e.inst_cod = i.inst_cod 
                    WHERE n.soc_sec = '$user'
                    ORDER BY i.inst_txt ASC";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['inst_cod'] . '" selected>' . $selected['inst_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for marital status, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function marital($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('marital', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT n.soc_sec, rtrim(m.mar_cod) as mar_cod, rtrim(m.mar_txt) as mar_txt
                     FROM name AS n
                        INNER JOIN marital AS m ON n.mar_cod = m.mar_cod 
                    WHERE n.soc_sec = '$user'";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['mar_cod'] . '" selected>' . $selected['mar_txt'] . '</option>' . $list;
        }
        return $list;
    }

    /**
     * Returns a dropbox for states, either with the 'selected' value or not if $user is defined
     *
     * @param string $user The user id to get the selected value for
     * @param boolean|string $allow_blank add a blank <option> value to the select list, true or false
     * @return string $list The select list
     */
    public static function state($user = '', $allow_blank = '')
    {
        global $utils;
        $list = self::optionsList('state', $allow_blank);
        if ($user != '') {
            $stmt = "SELECT a.soc_sec, rtrim(s.state_name) as state_name, rtrim(s.state_abbr) as state_abbr 
                     FROM address AS a 
                        INNER JOIN state AS s ON a.state = s.state_abbr AND a.preferred = '1' 
                        WHERE a.soc_sec = '$user'
                        ORDER BY s.state_name ASC";
            $selected = $utils->arrayLower(SoapSql::run($stmt));
            return '<option value="' . $selected['state_abbr'] . '" selected>' . $selected['state_name'] . '</option>' . $list;
        }
        return $list;
    }
}
