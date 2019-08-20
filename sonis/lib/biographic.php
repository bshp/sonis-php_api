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

    private function get_comp() {
        $result = 'biographic';
        return $result;
    }

    /**
     * Get First and Lastname
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function getName($soc_sec) {
        $comp = (new self())->get_comp();
        $method = 'getName';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Get enrollment status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $sch_yr the school year code, like 201617
     * @param string $semester the semester, either 1,2,3,4
     * @return array
     */
    public static function get_enrollstat($soc_sec, $sch_yr, $semester ) {
        $comp = (new self())->get_comp();
        $method = 'get_enrollstat';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['sch_yr', $sch_yr],
            ['semester', $semester]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Returns data in name table
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function namesearch($soc_sec){
        $comp = (new self())->get_comp();
        $method = 'namesearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec]
        ];
        ////return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Return name and email record
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function namesearch2($soc_sec){
        $comp = (new self())->get_comp();
        $method = 'namesearch2';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Inserts citizenship status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $birth_contry
     * @param string $citizen_country The country code where citizenship resides
     * @param string $iseas_no
     * @param string $visa_cod
     * @param string $visa_issue_date
     * @return array
     */
    public static function nmcit($soc_sec, $birth_contry, $citizen_country, $iseas_no, $visa_cod, $visa_issue_date) {
        $comp = (new self())->get_comp();
        $method = 'nmcit';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['birth_contry', $birth_contry],
            ['citizen_country', $citizen_country],
            ['iseas_no', $iseas_no],
            ['visa_cod', $visa_cod],
            ['visa_issue_date', $visa_issue_date]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Search for citizenship status
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @return array
     */
    public static function nmcitsearch($soc_sec, $mod_stat = '') {
        $comp = (new self())->get_comp();
        $method = 'nmcitsearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['mod_stat', $mod_stat]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Saves biographic information, almost like an update/insert
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @param string $first_name The persons first name
     * @param string $last_name The persons last name
     * @param string $mi The persons middle initial, 1 character
     * @param string $acadstat_cod
     * @param string $prefix The persons prefix, like Mr or Mrs
     * @param string $suffix The persons suffix, like MSN or Phd
     * @param string $maiden The persons maiden name
     * @param string $nickname The persons preferred name
     * @param string $birthdate The persons birthday, such as 05/12/2001
     * @param string $gender The persons gender, M or F
     * @param string $ssn The persons ssn
     * @param string $old_ssn The persons previously recorded ssn
     * @param string $affiliation_cod The persons affiliation status code
     * @param string $citizen If the person is a citizen, true or false
     * @param string $ethnic_cod If the persons ethnicity code
     * @param string $mar_cod If the persons marrital code
     * @param string $transmem If the persons transfer memo
     * @param string $veteran true or false if a veteran
     * @param string $releas_inf true or false if information release allowed
     * @param string $releas_dt the date information release allowed
     * @param string $div_cod The person's division, in the form of the code
     * @param string $dept_cod The person's department, in the form of the code
     * @param string $camp_cod The person's campus, in the form of the code
     * @param string $level_ The person's level, in the form of the code (A-Z, 0-9)
     * @param string $tuit_stat The persons tuition status
     * @param string $name_mem Memo on bio page
     * @param string $pin Encrypted PIN using private key
     * @param string $newpin Temp newpin placeholder
     * @param string $deceased true or false if deceased
     * @param string $dec_date The persons deceased date
     * @param string $exam_id The persons unique exam id
     * @param string $online_hld true or false if has a hold
     * @param string $notpubname true or false to publish name in directory
     * @param string $show_email true or false to publish email in directory
     * @param string $show_phone true or false to publish phone in directory
     * @param string $show_addr true or false to publish address in directory
     * @param string $show_wkphn true or false to publish work phone in directory
     * @param string $excl_billing true or false to exclude from billing
     * @param string $excl_mailing true or false to exclude from all mailing
     * @param string $other_name Persons other name, AKA sort of
     * @param string $fund_stat The persons funding status
     * @param string $photo The persons photo file name, has to be the file name like name.jpg
     * @param string $iped_stat The persons iped status code
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @return array
     */
    public static function save_biographic($soc_sec, $mod_stat, $first_name, $last_name, $mi, $acadstat_cod, $prefix, $suffix, $maiden, $nickname, $birthdate, $gender, $ssn, $old_ssn, $affiliation_cod, $citizen, $ethnic_cod, $mar_cod, $transmem, $veteran, $releas_inf, $releas_dt, $div_cod, $dept_cod, $camp_cod, $level_, $tuit_stat, $name_mem, $pin, $newpin, $deceased, $dec_date, $exam_id, $online_hld, $notpubname, $show_email, $show_phone, $show_addr, $show_wkphn, $excl_billing, $excl_mailing, $other_name, $fund_stat, $photo, $iped_stat, $operator ) {
        $comp = (new self())->get_comp();
        $method = 'save_biographic';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Updates a name record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $photo The persons photo file name, has to be the file name like name.jpg
     * @param string $ssn The persons ssn
     * @param string $gender The persons gender, M or F
     * @param string $ethnic_cod If the persons ethnicity code
     * @param string $birthdate The persons birthday, such as 05/12/2001
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @param string $acadstat_cod
     * @param string $affiliation_cod The persons affiliation status code
     * @param string $citizen If the person is a citizen, true or false
     * @param string $mar_cod If the persons marrital code
     * @param string $veteran true or false if a veteran
     * @param string $deceased true or false if deceased
     * @param string $dec_date The persons deceased date
     * @param string $dl_state The persons drivers license state code
     * @param string $memo Primary memo on Bio page
     * @return array
     */
    public static function update_descriptive($soc_sec, $photo, $ssn, $gender, $ethnic_cod, $birthdate, $mod_stat, $acadstat_cod, $affiliation_cod, $citizen, $mar_cod, $veteran, $deceased, $dec_date, $dl_state, $memo ) {
        $comp = (new self())->get_comp();
        $method = 'update_descriptive';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Creates a new person record
     *
     * @param string $first_name The persons first name
     * @param string $last_name The persons last name
     * @param string $birthdate The persons birthday like 05/12/2001
     * @param string $preferred The persons preferred address, yes or no
     * @param string $st_addr The persons street address
     * @param string $add_addr The persons street address number, such as APT 101 or #101
     * @param string $add_add2 Don't think we have ever used this one
     * @param string $city The persons city
     * @param string $state The persons state 2 character code such as TX for Texas
     * @param string $zip The persons zip code
     * @param string $phone The persons phone number
     * @param string $cell_phone The persons cell phone number
     * @param string $fax The objects fax number
     * @param string $e_mail The primary email address for the record type
     * @param string $work_phone The persons work phone number
     * @param string $county_cod The 2 character code for county such as BX for Bexar. It is best to use a dropbox for these
     * @param string $country The 2 character code for country like US
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @param string $mi The persons middle initial, 1 character
     * @param string $prefix The persons prefix, like Mr or Mrs
     * @param string $suffix The persons suffix, like MSN or Phd
     * @param string $maiden The persons maiden name
     * @param string $nickname The persons preferred name
     * @param string $gender The persons gender, M or F
     * @param string $ssn The persons ssn
     * @param string $affiliation_cod The persons affiliation status code
     * @param string $citizen If the person is a citizen, true or false
     * @param string $ethnic_cod If the persons ethnicity code
     * @param string $mar_cod If the persons marrital code
     * @param string $transmem If the persons transfer memo
     * @param string $veteran true or false if a veteran
     * @param string $releas_inf true or false if information release allowed
     * @param string $releas_dt the date information release allowed
     * @param string $div_cod The person's division, in the form of the code
     * @param string $dept_cod The person's department, in the form of the code
     * @param string $camp_cod The person's campus, in the form of the code
     * @param string $level_ The person's level, in the form of the code (A-Z, 0-9)
     * @param string $tuit_stat The persons tuition status
     * @param string $name_mem Memo on bio page
     * @param string $pin Encrypted PIN using private key
     * @param string $newpin Temp newpin placeholder
     * @param string $deceased true or false if deceased
     * @param string $dec_date The persons deceased date
     * @param string $exam_id The persons unique exam id
     * @param string $online_hld true or false if has a hold
     * @param string $notpubname true or false to publish name in directory
     * @param string $show_email true or false to publich email in directory
     * @param string $show_phone true or false to publich email in directory
     * @param string $show_addr true or false to publish phone in directory
     * @param string $show_wkphn true or false to publish work phone in directory
     * @param string $excl_billing true or false to exclude from billing
     * @param string $excl_mailing true or false to exclude from all mailing
     * @param string $fund_stat The persons funding status
     * @param string $photo The persons photo file name, has to be the file name like name.jpg
     * @param string $iped_stat The persons iped status code
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @param string $address_ce1 Custom address field
     * @param string $address_ce2 Custom address field
     * @param string $address_ce3 Custom address field
     * @param string $address_le1 Custom address field
     * @param string $address_ne1 Custom address field
     * @param string $address_de1 Custom address field
     * @param string $address_fe1 Custom address field
     * @return array
     */
    public static function create_biographic($first_name, $last_name, $birthdate, $preferred, $st_addr, $add_addr, $add_add2, $city, $state, $zip, $phone, $cell_phone, $fax, $e_mail, $work_phone, $county_cod, $country, $mod_stat, $mi, $prefix, $suffix, $maiden, $nickname, $gender, $ssn, $affiliation_cod, $citizen, $ethnic_cod, $mar_cod, $transmem, $veteran, $releas_inf, $releas_dt, $div_cod, $dept_cod, $camp_cod, $level_, $tuit_stat, $name_mem, $pin, $newpin, $deceased, $dec_date, $exam_id, $online_hld, $notpubname, $show_email, $show_phone, $show_addr, $show_wkphn, $excl_billing, $excl_mailing, $fund_stat, $photo, $iped_stat, $operator, $address_ce1, $address_ce2, $address_ce3, $address_le1, $address_ne1, $address_de1, $address_fe1 ) {
        $comp = (new self())->get_comp();
        $method = 'create_biographic';
        $returns = 'yes';
        $params = [
            ['mod_stat', $mod_stat],
            ['first_name', $first_name],
            ['last_name', $last_name],
            ['mi', $mi],
            ['prefix', $prefix],
            ['suffix', $suffix],
            ['maiden', $maiden],
            ['nickname', $nickname],
            ['birthdate', $birthdate],
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Updates a name record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @param string $first_name The persons first name
     * @param string $last_name The persons last name
     * @param string $mi The persons middle initial, 1 character
     * @param string $prefix The persons prefix, like Mr or Mrs
     * @param string $suffix The persons suffix, like MSN or Phd
     * @param string $maiden The persons maiden name
     * @param string $nickname The persons preferred name
     * @param string $other_name Persons other name, AKA sort of
     * @param string $acadstat_cod
     * @return array
     */
    public static function update_name($soc_sec, $mod_stat, $first_name, $last_name, $mi, $prefix, $suffix, $maiden, $nickname, $other_name, $acadstat_cod) {
        $comp = (new self())->get_comp();
        $method = 'update_name';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }
}
