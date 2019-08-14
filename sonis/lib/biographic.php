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
 * Class biographic
 *
 * Sonis API Framework
 *
 * Component: biograph.cfc, biographic.cfc
 *
 * @file biographic.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class biographic {

    /**
     * Get First and Lastname
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function getName($soc_sec) {
        $params = [
            ['soc_sec', $soc_sec]
        ];
        return $params;
    }

    /**
     * Get enrollment status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $sch_yr
     * @param string $semester
     * @return array
     */
    public static function get_enrollstat($soc_sec, $sch_yr = '', $semester = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['sch_yr', $sch_yr],
            ['semester', $semester]
        ];
        return $params;
    }

    /**
     * Returns data in name table
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function namesearch($soc_sec){
        $params = [
            ['soc_sec', $soc_sec]
        ];
        return $params;
    }

    /**
     * Return name and email record
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function namesearch2($soc_sec){
        $params = [
            ['soc_sec', $soc_sec]
        ];
        return $params;
    }

    /**
     * Inserts citizenship status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $birth_contry
     * @param string $citizen_country
     * @param string $iseas_no
     * @param string $visa_cod
     * @param string $visa_issue_date
     * @return array
     */
    public static function nmcit($soc_sec, $birth_contry = '', $citizen_country = '', $iseas_no = '', $visa_cod = '', $visa_issue_date = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['birth_contry', $birth_contry],
            ['citizen_country', $citizen_country],
            ['iseas_no', $iseas_no],
            ['visa_cod', $visa_cod],
            ['visa_issue_date', $visa_issue_date]
        ];
        return $params;
    }

    /**
     * Search for citizenship status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat
     * @return array
     */
    public static function nmcitsearch($soc_sec, $mod_stat = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['mod_stat', $mod_stat]
        ];
        return $params;
    }

    /**
     * Saves biographic information, almost like an update/insert
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat
     * @param string $first_name
     * @param string $last_name
     * @param string $mi
     * @param string $acadstat_cod
     * @param string $prefix
     * @param string $suffix
     * @param string $maiden
     * @param string $nickname
     * @param string $birthdate
     * @param string $gender
     * @param string $ssn
     * @param string $old_ssn
     * @param string $affiliation_cod
     * @param string $citizen
     * @param string $ethnic_cod
     * @param string $mar_cod
     * @param string $transmem
     * @param string $veteran
     * @param string $releas_inf
     * @param string $releas_dt
     * @param string $div_cod
     * @param string $dept_cod
     * @param string $camp_cod
     * @param string $level_
     * @param string $tuit_stat
     * @param string $name_mem
     * @param string $pin
     * @param string $newpin
     * @param string $deceased
     * @param string $dec_date
     * @param string $exam_id
     * @param string $online_hld
     * @param string $notpubname
     * @param string $show_email
     * @param string $show_phone
     * @param string $show_addr
     * @param string $show_wkphn
     * @param string $excl_billing
     * @param string $excl_mailing
     * @param string $other_name
     * @param string $fund_stat
     * @param string $photo
     * @param string $iped_stat
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @return array
     */
    public static function save_biographic($soc_sec, $mod_stat = '', $first_name = '', $last_name = '', $mi = '', $acadstat_cod = '', $prefix = '', $suffix = '', $maiden = '', $nickname = '', $birthdate = '', $gender = '', $ssn = '', $old_ssn = '', $affiliation_cod = '', $citizen = '', $ethnic_cod = '', $mar_cod = '', $transmem = '', $veteran = '', $releas_inf = '', $releas_dt = '', $div_cod = '', $dept_cod = '', $camp_cod = '', $level_ = '', $tuit_stat = '', $name_mem = '', $pin = '', $newpin = '', $deceased = '', $dec_date = '', $exam_id = '', $online_hld = '', $notpubname = '', $show_email = '', $show_phone = '', $show_addr = '', $show_wkphn = '', $excl_billing = '', $excl_mailing = '', $other_name = '', $fund_stat = '', $photo = '', $iped_stat = '', $operator = '' ) {
        $params = [
            ['soc_sec', $soc_sec],
            ['mod_stat', $mod_stat],
            ['first_name', $first_name],
            ['last_name', $last_name],
            ['mi', $mi],
            ['acadstat_cod', $acadstat_cod],
            ['prefix', $prefix],
            ['suffix', $suffix],
            ['maiden', $maiden],
            ['nickname', $nickname],
            ['birthdate', $birthdate],
            ['gender', $gender],
            ['ssn', $ssn],
            ['old_ssn', $old_ssn],
            ['affiliation_cod', $affiliation_cod],
            ['citizen', $citizen],
            ['ethnic_cod', $ethnic_cod],
            ['mar_cod', $mar_cod],
            ['transmem', $transmem],
            ['veteran', $veteran],
            ['releas_inf', $releas_inf],
            ['releas_dt', $releas_dt],
            ['div_cod', $div_cod],
            ['dept_cod', $dept_cod],
            ['camp_cod', $camp_cod],
            ['level_', $level_],
            ['tuit_stat', $tuit_stat],
            ['name_mem', $name_mem],
            ['pin', $pin],
            ['newpin', $newpin],
            ['deceased', $deceased],
            ['dec_date', $dec_date],
            ['exam_id', $exam_id],
            ['online_hld', $online_hld],
            ['notpubname', $notpubname],
            ['show_email', $show_email],
            ['show_phone', $show_phone],
            ['show_addr', $show_addr],
            ['show_wkphn', $show_wkphn],
            ['excl_billing', $excl_billing],
            ['excl_mailing', $excl_mailing],
            ['other_name', $other_name],
            ['fund_stat', $fund_stat],
            ['photo', $photo],
            ['iped_stat', $iped_stat],
            ['operator', $operator]

        ];

        return $params;
    }

    /**
     * Updates a name record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $photo
     * @param string $ssn
     * @param string $gender
     * @param string $ethnic_cod
     * @param string $birthdate
     * @param string $mod_stat
     * @param string $acadstat_cod
     * @param string $affiliation_cod
     * @param string $citizen
     * @param string $mar_cod
     * @param string $veteran
     * @param string $deceased
     * @param string $dec_date
     * @param string $dl_state
     * @param string $memo
     * @return array
     */
    public static function update_descriptive($soc_sec = '', $photo = '', $ssn = '', $gender = '', $ethnic_cod = '', $birthdate = '', $mod_stat = '', $acadstat_cod = '', $affiliation_cod = '', $citizen = '', $mar_cod = '', $veteran = '', $deceased = '', $dec_date = '', $dl_state = '', $memo = '' ) {
        $params = [
            ['soc_sec', $soc_sec],
            ['ssn', $ssn],
            ['mod_stat', $mod_stat],
            ['gender', $gender],
            ['acadstat_cod', $acadstat_cod],
            ['affiliation_cod', $affiliation_cod],
            ['citizen', $citizen],
            ['ethnic_cod', $ethnic_cod],
            ['mar_cod', $mar_cod],
            ['veteran', $veteran],
            ['deceased', $deceased],
            ['dec_date', $dec_date],
            ['photo', $photo],
            ['dl_state', $dl_state],
            ['birthdate', $birthdate],
            ['memo', $memo]
        ];
        return $params;
    }

    /**
     * Creates a new person record
     *
     * @param $first_name
     * @param $last_name
     * @param $birthdate
     * @param string $preferred The persons preferred address, yes or no
     * @param string $st_addr
     * @param string $add_addr
     * @param string $add_add2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $phone
     * @param string $cell_phone
     * @param string $fax
     * @param string $e_mail
     * @param string $work_phone
     * @param string $county_cod
     * @param string $country
     * @param string $mod_stat
     * @param string $mi
     * @param string $prefix
     * @param string $suffix
     * @param string $maiden
     * @param string $nickname
     * @param string $gender
     * @param string $ssn
     * @param string $affiliation_cod
     * @param string $citizen
     * @param string $ethnic_cod
     * @param string $mar_cod
     * @param string $transmem
     * @param string $veteran
     * @param string $releas_inf
     * @param string $releas_dt
     * @param string $div_cod
     * @param string $dept_cod
     * @param string $camp_cod
     * @param string $level_
     * @param string $tuit_stat
     * @param string $name_mem
     * @param string $pin
     * @param string $newpin
     * @param string $deceased
     * @param string $dec_date
     * @param string $exam_id
     * @param string $online_hld
     * @param string $notpubname
     * @param string $show_email
     * @param string $show_phone
     * @param string $show_addr
     * @param string $show_wkphn
     * @param string $excl_billing
     * @param string $excl_mailing
     * @param string $fund_stat
     * @param string $photo
     * @param string $iped_stat
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @param string $address_ce1
     * @param string $address_ce2
     * @param string $address_ce3
     * @param string $address_le1
     * @param string $address_ne1
     * @param string $address_de1
     * @param string $address_fe1
     * @return array
     */
    public static function create_biographic($first_name, $last_name, $birthdate, $preferred = '', $st_addr = '', $add_addr = '', $add_add2 = '', $city = '', $state = '', $zip = '', $phone = '', $cell_phone = '', $fax = '', $e_mail = '', $work_phone = '', $county_cod = '', $country = '', $mod_stat = '', $mi = '', $prefix = '', $suffix = '', $maiden = '', $nickname = '', $gender = '', $ssn = '', $affiliation_cod = '', $citizen = '', $ethnic_cod = '', $mar_cod = '', $transmem = '', $veteran = '', $releas_inf = '', $releas_dt = '', $div_cod = '', $dept_cod = '', $camp_cod = '', $level_ = '', $tuit_stat = '', $name_mem = '', $pin = '', $newpin = '', $deceased = '', $dec_date = '', $exam_id = '', $online_hld = '', $notpubname = '', $show_email = '', $show_phone = '', $show_addr = '', $show_wkphn = '', $excl_billing = '', $excl_mailing = '', $fund_stat = '', $photo = '', $iped_stat = '', $operator = '', $address_ce1 = '', $address_ce2 = '', $address_ce3 = '', $address_le1 = '', $address_ne1 = '', $address_de1 = '', $address_fe1 = '' ) {
        $params = [
            ['mod_stat', $mod_stat],
            ['first_name', $first_name],
            ['last_name', $last_name], # required
            ['mi', $mi],
            ['prefix', $prefix],
            ['suffix', $suffix],
            ['maiden', $maiden],
            ['nickname', $nickname],
            ['birthdate', $birthdate], # required
            ['gender', $gender],
            ['ssn', $ssn],
            ['affiliation_cod', $affiliation_cod],
            ['citizen', $citizen],
            ['ethnic_cod', $ethnic_cod],
            ['mar_cod', $mar_cod],
            ['transmem', $transmem],
            ['veteran', $veteran],
            ['releas_inf', $releas_inf],
            ['releas_dt', $releas_dt],
            ['div_cod', $div_cod],
            ['dept_cod', $dept_cod],
            ['camp_cod', $camp_cod],
            ['level_', $level_],
            ['tuit_stat', $tuit_stat],
            ['name_mem', $name_mem],
            ['pin', $pin],
            ['newpin', $newpin],
            ['deceased', $deceased],
            ['dec_date', $dec_date],
            ['exam_id', $exam_id],
            ['online_hld', $online_hld],
            ['notpubname', $notpubname],
            ['show_email', $show_email],
            ['show_phone', $show_phone],
            ['show_addr', $show_addr],
            ['show_wkphn', $show_wkphn],
            ['excl_billing', $excl_billing],
            ['excl_mailing', $excl_mailing],
            ['fund_stat', $fund_stat],
            ['photo', $photo],
            ['iped_stat', $iped_stat],
            ['operator', $operator],
            ['preferred', $preferred],
            ['st_addr', $st_addr],
            ['add_addr', $add_addr],
            ['add_add2', $add_add2],
            ['city', $city],
            ['state', $state],
            ['zip', $zip],
            ['phone', $phone],
            ['cell_phone', $cell_phone],
            ['fax', $fax],
            ['e_mail', $e_mail],
            ['work_phone', $work_phone],
            ['county_cod', $county_cod],
            ['country', $country],
            ['address_ce1', $address_ce1],
            ['address_ce2', $address_ce2],
            ['address_ce3', $address_ce3],
            ['address_le1', $address_le1],
            ['address_ne1', $address_ne1],
            ['address_de1', $address_de1],
            ['address_fe1', $address_fe1]
        ];
        return $params;
    }

    /**
     * Updates a name record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat
     * @param string $first_name
     * @param string $last_name
     * @param string $mi
     * @param string $prefix
     * @param string $suffix
     * @param string $maiden
     * @param string $nickname
     * @param string $other_name
     * @param string $acadstat_cod
     * @return array
     */
    public static function update_name($soc_sec = '', $mod_stat = '', $first_name = '', $last_name = '', $mi = '', $prefix = '', $suffix = '', $maiden = '', $nickname = '', $other_name = '', $acadstat_cod = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['mod_stat', $mod_stat],
            ['last_name', $last_name],
            ['first_name', $first_name],
            ['mi', $mi],
            ['acadstat_cod', $acadstat_cod],
            ['prefix', $prefix],
            ['suffix', $suffix],
            ['maiden', $maiden],
            ['nickname', $nickname],
            ['other_name', $other_name]
        ];
        return $params;
    }
}
