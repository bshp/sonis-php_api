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
 * Class onlineapp
 *
 * Sonis API Framework
 *
 * Component: student_app.cfc, oa_emc.cfc, oa_fields.cfc, oa_licenses.cfc, oa_opt_fields.cfc, oa_questions.cfc
 *
 * @file onlineapp.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class onlineapp {

    /**
     * Logon function for the online app
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $pin Encrypted PIN using private key
     * @return array
     */
    public static function app_login($soc_sec, $pin) {
        $comp = 'student_app';
        $method = 'app_login';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['pin', $pin],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Creates a new online app and person if new into the nmoa table
     *
     * @param string $first_name The persons first name
     * @param string $last_name The persons last name
     * @param string $birthdate The persons birthday, such as 05/12/2001
     * @param string $e_mail The primary email address for the record type
     * @param string $pin Encrypted PIN using private key
     * @param string $mi The persons middle initial, 1 character
     * @param string $phone The persons phone number
     * @param integer $citizen
     * @param string $zip The persons zip code
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @return array
     */
    public static function create($first_name, $last_name, $birthdate, $e_mail, $pin, $mi = '', $phone = '', $citizen = 1, $zip = '', $mod_stat = '') {
        $comp = 'student_app';
        $method = 'create';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '//'],
            ['first_name', $first_name],
            ['last_name', $last_name],
            ['mi', $mi],
            ['birthdate', $birthdate],
            ['e_mail', $e_mail],
            ['pin', $pin],
            ['phone', $phone],
            ['zip', $zip],
            ['citizen', $citizen],
            ['mod_stat', $mod_stat],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Search for a given online applicant
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $birthdate The persons birthday, such as 05/12/2001
     * @param string $e_mail The primary email address for the record type
     * @return array
     */
    public static function search($firstname = '', $lastname = '', $birthdate = '', $e_mail = '') {
        $comp = 'student_app';
        $method = 'search';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['first_name', $firstname],
            ['last_name', $lastname],
            ['birthdate', $birthdate],
            ['e_mail', $e_mail]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Insert a new online app question
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $fieldnames
     * @return array
     */
    public static function insert_oa_questions($soc_sec, $fieldnames) {
        $comp = 'oa_questions';
        $method = 'insert_oa_questions';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['CurDrive', '#session.CurDrive#'],
            ['soc_sec', $soc_sec],
            ['fieldnames', $fieldnames]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Search for an online app question
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $column
     * @return array
     */
    public static function oa_questions_search($soc_sec, $column = '') {
        $comp = 'oa_questions';
        $method = 'oa_questions_search';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['column_', $column],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * The search format
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $oa_questions_row
     * @param string $oa_questions_col
     * @param integer $oa_section_rid
     * @return array
     */
    public static function oa_questions_search_format($soc_sec, $oa_questions_row = '', $oa_questions_col = '', $oa_section_rid = 1) {
        $comp = 'oa_questions';
        $method = 'oa_questions_search_format';
        $returns = 'yes';
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['oa_questions_row', $oa_questions_row],
            ['oa_questions_col', $oa_questions_col],
            ['oa_section_rid', $oa_section_rid]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }
}
