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
 * Class prospect
 *
 * Related to a prospect record.
 * Interested person can fill out a form
 * and it be processed in Sonis by a staff
 * member for follow up.
 *
 * @author Jason A. Everling <jason...@gmail.com>
 */
class prospect {

    /**
     * Inserts a new prospect/inquiry
     *
     * @param string $last_name
     * @param string $first_name
     * @param string $mi
     * @param string $st_addr
     * @param string $add_addr
     * @param string $add_add2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $phone
     * @param string $cell_phone
     * @param string $nickname
     * @param string $work_phone
     * @param string $e_mail
     * @param string $term_int
     * @param string $referby
     * @param string $enstat_cod
     * @param string $prg_cod
     * @param string $camp_cod
     * @param string $comments
     * @param string $snd_app
     * @param string $snd_brch
     * @param string $snd_cat
     * @param string $snd_f4
     * @param string $snd_f5
     * @param string $snd_f6
     * @param string $snd_3PF
     * @param string $employer
     * @param string $moved_dt
     * @param string $move2app
     * @param string $contact
     * @param string $state_of_licensure
     * @param string $level_of_education
     * @param string $level_comp
     * @param string $hs_prereq
     * @param string $prg_intrest
     * @param string $cl_prereq
     * @param string $prereqenrolled
     * @param string $cur_emp
     * @param string $cur_emp_inst_cod
     * @param string $LPN
     * @param string $LPN_years
     * @param string $enroll_month
     * @param string $enroll_yr
     * @param string $ref_other
     * @param string $psprereqcrs_cod
     * @param string $pref_inst_cod
     * @param string $webps_ce1
     * @param string $webps_le1
     * @param string $webps_ne1
     * @param string $webps_de1
     * @param string $webps_fe1
     * @param string $webps_ce2
     * @param string $webps_ce3
     * @param string $incomplete
     * @param string $birthdate
     * @param string $memo1
     * @param string $memo2
     * @param string $memo3
     * @param string $areas_of_interest_rid
     * @param string $undergrd_attnd
     * @param string $undergrd_maj
     * @return array
     */
    public static function addnewps($last_name, $first_name, $mi = '', $st_addr = '', $add_addr = '', $add_add2 = '', $city = '', $state = '', $zip = '', $country = '', $phone = '', $cell_phone = '', $nickname = '', $work_phone = '', $e_mail = '', $term_int = '', $referby = '', $enstat_cod = '', $prg_cod = '', $camp_cod = '', $comments = '', $snd_app = '', $snd_brch = '', $snd_cat = '', $snd_f4 = '', $snd_f5 = '', $snd_f6 = '', $snd_3PF = '', $employer = '', $moved_dt = '', $move2app = '', $contact = '', $state_of_licensure = '', $level_of_education = '', $level_comp = '', $hs_prereq = '', $prg_intrest = '', $cl_prereq = '', $prereqenrolled = '', $cur_emp = '', $cur_emp_inst_cod = '', $LPN = '', $LPN_years = '', $enroll_month = '', $enroll_yr = '', $ref_other = '', $psprereqcrs_cod = '', $pref_inst_cod = '', $webps_ce1 = '', $webps_le1 = '', $webps_ne1 = '', $webps_de1 = '', $webps_fe1 = '', $webps_ce2 = '', $webps_ce3 = '', $incomplete = '', $birthdate = '', $memo1 = '', $memo2 = '', $memo3 = '', $areas_of_interest_rid = '', $undergrd_attnd = '', $undergrd_maj = '') {
        $params = [
            ['sonis_ds', '#sonis_ds#'],
            ['MainDir', '#MainDir#'],
            ['CurDrive', '#CurDrive#'],
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
        return $params;
    }
}
