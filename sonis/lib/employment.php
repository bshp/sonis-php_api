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
 * Class employment
 *
 * Sonis API Framework
 *
 * Component: employment.cfc
 *
 * @file employment.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class employment {

    /**
     * Deletes an employment record
     *
     * @param string $emp_rid employer table id
     * @return array
     */
    public static function delete_employment($emp_rid) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['emp_rid', $emp_rid],
        ];
        return $params;
    }

    /**
     * Inserts a new employment record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $emp_emply Employer
     * @param string $emp_super Employer manager
     * @param string $emp_add1 Employer address line 1
     * @param string $emp_add2 Employer address line 1
     * @param string $emp_add3 Employer address line 1
     * @param string $emp_city Employer city
     * @param string $emp_state Employer state
     * @param string $emp_county Employer county
     * @param string $emp_zip Employer zipcode
     * @param string $employ_type_rid
     * @param string $emp_pos Employee position
     * @param string $hrs_week Hours a week
     * @param string $start_dt Start date mm/dd/yyyy
     * @param string $stop_dt Stop date mm/dd/yyyy
     * @param string $emp_mem Employer memo
     * @param string $emp_rid Employer table id
     * @param string $empcountry Employer country
     * @param string $when_code Employer when started mm/dd/yyyy
     * @param string $emp_phone Employer phone number
     * @param string $homeinst Home institution
     * @return array
     */
    public static function insert_employment($soc_sec, $emp_emply = '', $emp_super = '', $emp_add1 = '', $emp_add2 = '', $emp_add3 = '', $emp_city = '', $emp_state = '', $emp_county = '', $emp_zip = '', $employ_type_rid = '', $emp_pos = '', $hrs_week = '', $start_dt = '', $stop_dt = '', $emp_mem = '', $emp_rid = '', $empcountry = '', $when_code = '', $emp_phone = '', $homeinst = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['emp_emply', $emp_emply],
            ['emp_super', $emp_super],
            ['homeinst', $homeinst],
            ['emp_add1', $emp_add1],
            ['emp_add2', $emp_add2],
            ['emp_add3', $emp_add3],
            ['emp_city', $emp_city],
            ['emp_state', $emp_state],
            ['emp_county', $emp_county],
            ['empcountry', $empcountry],
            ['emp_zip', $emp_zip],
            ['emp_pos', $emp_pos],
            ['emp_phone', $emp_phone],
            ['start_dt', $start_dt],
            ['stop_dt', $stop_dt],
            ['when_code', $when_code],
            ['hrs_week', $hrs_week],
            ['employ_type_rid', $employ_type_rid],
            ['emp_mem', $emp_mem],
            ['emp_rid', $emp_rid]
        ];
        return $params;
    }

    /**
     * Searches for an employment record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $emp_rid employer table id
     * @return array
     */
    public static function search($soc_sec, $emp_rid = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['emp_rid', $emp_rid],
        ];
        return $params;
    }

    /**
     * Updates the employment record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $emp_emply Employer
     * @param string $emp_super Employer manager
     * @param string $emp_add1 Employer address line 1
     * @param string $emp_add2 Employer address line 1
     * @param string $emp_add3 Employer address line 1
     * @param string $emp_city Employer city
     * @param string $emp_state Employer state
     * @param string $emp_county Employer county
     * @param string $emp_zip Employer zipcode
     * @param string $employ_type_rid Employee type table id
     * @param string $emp_status Employee status
     * @param string $passed Passed (used differently for various schools)
     * @param string $emp_email Employee email address
     * @param string $number Employee number
     * @param string $emp_pos Employee position
     * @param string $hrs_week Hours a week
     * @param string $start_dt Start date mm/dd/yyyy
     * @param string $stop_dt Stop date mm/dd/yyyy
     * @param string $emp_mem Employer memo
     * @param string $emp_rid employer table id
     * @param string $empcountry Employer country
     * @param string $when_code Employer when started mm/dd/yyyy
     * @param string $emp_phone Employer phone number
     * @param string $homeinst Home institution
     * @return array
     */
    public static function update_employment($soc_sec, $emp_emply = '', $emp_super = '', $emp_add1 = '', $emp_add2 = '', $emp_add3 = '', $emp_city = '', $emp_state = '', $emp_county = '', $emp_zip = '', $employ_type_rid = '', $emp_status = '', $passed = '', $emp_email = '', $number = '', $emp_pos = '', $hrs_week = '', $start_dt = '', $stop_dt = '', $emp_mem = '', $emp_rid = '', $empcountry = '', $when_code = '', $emp_phone = '', $homeinst = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['emp_rid', $emp_rid],
            ['emp_emply', $emp_emply],
            ['emp_super', $emp_super],
            ['homeinst', $homeinst],
            ['emp_add1', $emp_add1],
            ['emp_add2', $emp_add2],
            ['emp_add3', $emp_add3],
            ['emp_city', $emp_city],
            ['emp_state', $emp_state],
            ['emp_county', $emp_county],
            ['empcountry', $empcountry],
            ['emp_zip', $emp_zip],
            ['emp_pos', $emp_pos],
            ['emp_phone', $emp_phone],
            ['start_dt', $start_dt],
            ['stop_dt', $stop_dt],
            ['when_code', $when_code],
            ['hrs_week', $hrs_week],
            ['employ_type_rid', $employ_type_rid],
            ['emp_status', $emp_status],
            ['passed', $passed],
            ['emp_email', $emp_email],
            ['number', $number],
            ['emp_mem', $emp_mem],
        ];
        return $params;
    }
}
