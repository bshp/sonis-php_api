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
 *
 *    For Sonis Coldfusion Web Services
 *
 *    By: Jason A. Everling
 *    Email: jason...@gmail.com
 *
 */

/*
 * Related to the online app process,
 * combined from the following;
 * oa_emc, oa_fields, oa_licenses,
 * oa_opt_fields, and oa_questions.
 */
class onlineapp {

    /**
     * @param string $soc_sec
     * @param string $pin
     * @return array
     */
    public static function app_login($soc_sec, $pin) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['pin', $pin],
        ];
        return $params;
    }

    /**
     * @param string $first_name
     * @param string $last_name
     * @param string $birthdate
     * @param string $e_mail
     * @param string $pin
     * @param string $mi
     * @param string $phone
     * @param int $citizen
     * @param string $zip
     * @param string $mod_stat
     * @return array
     */
    public static function create($first_name, $last_name, $birthdate, $e_mail, $pin, $mi = '', $phone = '', $citizen = 1, $zip = '', $mod_stat = '') {
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
        return $params;
    }

    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $birthdate
     * @param string $e_mail
     * @return array
     */
    public static function search($firstname = '', $lastname = '', $birthdate = '', $e_mail = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['first_name', $firstname],
            ['last_name', $lastname],
            ['birthdate', $birthdate],
            ['e_mail', $e_mail]
        ];
        return $params;
    }

    /**
     * @param string $soc_sec
     * @param string $fieldnames
     * @return array
     */
    public static function insert_oa_questions($soc_sec, $fieldnames) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['CurDrive', '#session.CurDrive#'],
            ['soc_sec', $soc_sec],
            ['fieldnames', $fieldnames]
        ];
        return $params;
    }

    /**
     * @param string $soc_sec
     * @param string $column
     * @return array
     */
    public static function oa_questions_search($soc_sec, $column = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['column_', $column],
        ];
        return $params;
    }

    /**
     * @param string $soc_sec
     * @param string $oa_questions_row
     * @param string $oa_questions_col
     * @param int $oa_section_rid
     * @return array
     */
    public static function oa_questions_search_format($soc_sec, $oa_questions_row = '', $oa_questions_col = '', $oa_section_rid = 1) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['oa_questions_row', $oa_questions_row],
            ['oa_questions_col', $oa_questions_col],
            ['oa_section_rid', $oa_section_rid]
        ];
        return $params;
    }
}
