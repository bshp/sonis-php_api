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

namespace Jenzabar\Sonis\Api;

/**
 * Class prospect
 *
 * Sonis API Framework
 *
 * Component: addps.cfc, addps_direct.cfc
 *
 * Usage: Add new prospect inquiry, update prospect
 *
 * @file prospect.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class prospect {

    private function get_comp() {
        $result = 'addps';
        return $result;
    }

    /**
     * Inserts a new prospect/inquiry
     *
     * @param string $last_name The persons last name
     * @param string $first_name The persons first name
     * @param string $mi The persons middle initial, 1 character
     * @param string $st_addr The persons street address
     * @param string $add_addr The persons street address number, such as APT 101 or #101
     * @param string $add_add2 Don't think we have ever used this one
     * @param string $city The persons city
     * @param string $state The persons state 2 character code such as TX for Texas
     * @param string $zip The persons zip code
     * @param string $country The 2 character code for country like US
     * @param string $phone The persons phone number
     * @param string $cell_phone The persons cell phone number
     * @param string $nickname The persons preferred name
     * @param string $work_phone The persons work phone number
     * @param string $e_mail The primary email address for the record type
     * @param string $term_int Applicant term interested in
     * @param string $referby Referred by
     * @param string $enstat_cod Enrollment status code
     * @param string $prg_cod Program code
     * @param string $camp_cod The person's campus, in the form of the code
     * @param string $comments Comments
     * @param string $snd_app Workflow send application
     * @param string $snd_brch Workflow send brochure
     * @param string $snd_cat Workflow send catalog
     * @param string $snd_f4 Wokrflow custom
     * @param string $snd_f5 Wokrflow custom
     * @param string $snd_f6 Wokrflow custom
     * @param string $snd_3PF
     * @param string $employer Employer
     * @param string $moved_dt Date moved
     * @param string $move2app Date moved to applicant
     * @param string $contact Contact information
     * @param string $state_of_licensure The persons state 2 character code such as TX for Texas where the license was granted
     * @param string $level_of_education Persons level of education
     * @param string $level_comp highest level completed
     * @param string $hs_prereq Highschool pre-req
     * @param string $prg_intrest Program interested in
     * @param string $cl_prereq Class pre-req
     * @param string $prereqenrolled Pre-req enrolled?
     * @param string $cur_emp Current employer
     * @param string $cur_emp_inst_cod Current employer institution code
     * @param string $LPN Has LPN
     * @param string $LPN_years For how long
     * @param string $enroll_month Enrollment month
     * @param string $enroll_yr Enrollment year
     * @param string $ref_other Referred by 'other' box
     * @param string $psprereqcrs_cod Pre-req course code
     * @param string $pref_inst_cod Preferred institutional code
     * @param string $webps_ce1 Custom Field
     * @param string $webps_le1 Custom Field
     * @param string $webps_ne1 Custom Field
     * @param string $webps_de1 Custom Field
     * @param string $webps_fe1 Custom Field
     * @param string $webps_ce2 Custom Field
     * @param string $webps_ce3 Custom Field
     * @param string $incomplete App incomplete
     * @param string $birthdate The persons birthday, such as 05/12/2001
     * @param string $memo1 Memo 1
     * @param string $memo2 Memo 2
     * @param string $memo3 Memo 3
     * @param string $areas_of_interest_rid Areas of interest table id
     * @param string $undergrd_attnd Undergraduate?
     * @param string $undergrd_maj Undergraduate major
     * @return array
     */
    public static function addnewps($last_name, $first_name, $mi, $st_addr, $add_addr, $add_add2, $city, $state, $zip, $country, $phone, $cell_phone, $nickname, $work_phone, $e_mail, $term_int, $referby, $enstat_cod, $prg_cod, $camp_cod, $comments, $snd_app, $snd_brch, $snd_cat, $snd_f4, $snd_f5, $snd_f6, $snd_3PF, $employer, $moved_dt, $move2app, $contact, $state_of_licensure, $level_of_education, $level_comp, $hs_prereq, $prg_intrest, $cl_prereq, $prereqenrolled, $cur_emp, $cur_emp_inst_cod, $LPN, $LPN_years, $enroll_month, $enroll_yr, $ref_other, $psprereqcrs_cod, $pref_inst_cod, $webps_ce1, $webps_le1, $webps_ne1, $webps_de1, $webps_fe1, $webps_ce2, $webps_ce3, $incomplete, $birthdate, $memo1, $memo2, $memo3, $areas_of_interest_rid, $undergrd_attnd, $undergrd_maj ) {
        $comp = (new self())->get_comp();
        $method = 'addnewps';
        $returns = 'yes';
        $params = [
            ['last_name', $last_name],
            ['first_name', $first_name],
            ['mi', $mi],
            ['st_addr', $st_addr],
            ['add_addr', $add_addr],
            ['add_add2', $add_add2],
            ['city', $city],
            ['state', $state],
            ['zip', $zip],
            ['country', $country],
            ['phone', $phone],
            ['cell_phone', $cell_phone],
            ['nickname', $nickname],
            ['work_phone', $work_phone],
            ['e_mail', $e_mail],
            ['term_int', $term_int],
            ['referby', $referby],
            ['enstat_cod', $enstat_cod],
            ['prg_cod', $prg_cod],
            ['camp_cod', $camp_cod],
            ['comments', $comments],
            ['snd_app', $snd_app],
            ['snd_brch', $snd_brch],
            ['snd_cat', $snd_cat],
            ['snd_f4', $snd_f4],
            ['snd_f5', $snd_f5],
            ['snd_f6', $snd_f6],
            ['snd_3PF', $snd_3PF],
            ['employer', $employer],
            ['moved_dt', $moved_dt],
            ['move2app', $move2app],
            ['contact', $contact],
            ['state_of_licensure', $state_of_licensure],
            ['level_of_education', $level_of_education],
            ['level_comp', $level_comp],
            ['hs_prereq', $hs_prereq],
            ['prg_intrest', $prg_intrest],
            ['cl_prereq', $cl_prereq],
            ['prereqenrolled', $prereqenrolled],
            ['cur_emp', $cur_emp],
            ['cur_emp_inst_cod', $cur_emp_inst_cod],
            ['LPN', $LPN],
            ['LPN_years', $LPN_years],
            ['enroll_month', $enroll_month],
            ['enroll_yr', $enroll_yr],
            ['ref_other', $ref_other],
            ['psprereqcrs_cod', $psprereqcrs_cod],
            ['pref_inst_cod', $pref_inst_cod],
            ['webps_ce1', $webps_ce1],
            ['webps_le1', $webps_le1],
            ['webps_ne1', $webps_ne1],
            ['webps_de1', $webps_de1],
            ['webps_fe1', $webps_fe1],
            ['webps_ce2', $webps_ce2],
            ['webps_ce3', $webps_ce3],
            ['incomplete', $incomplete],
            ['birthdate', $birthdate],
            ['memo1', $memo1],
            ['memo2', $memo2],
            ['memo3', $memo3],
            ['areas_of_interest_rid', $areas_of_interest_rid],
            ['undergrd_attnd', $undergrd_attnd],
            ['undergrd_maj', $undergrd_maj],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }
}
