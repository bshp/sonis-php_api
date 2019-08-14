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
 * Class education
 *
 * Sonis API Framework
 *
 * Component: education.cfc
 *
 * @file education.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class education {

    /**
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid
     * @return array
     */
    public static function delete_education($soc_sec, $edu_rid) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['edu_rid', $edu_rid]
        ];
        return $params;
    }

    /**
     * Search for an education record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid
     * @return array
     */
    public static function eduSearch($soc_sec, $edu_rid = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['edu_rid', $edu_rid],
        ];
        return $params;
    }

    /**
     * @param string $soc_sec The objects unique identifier
     * @param string $cohort_cod
     * @return array
     */
    public static function insert_default_education($soc_sec, $cohort_cod = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['CurDrive', '#session.CurDrive#'],
            ['soc_sec', $soc_sec],
            ['cohort_cod', $cohort_cod]
        ];
        return $params;
    }

    /**
     * @param string $soc_sec The objects unique identifier
     * @param string $educmem
     * @param string $inst_cod
     * @param string $mod_stat
     * @param string $degree
     * @param string $enter_date
     * @param string $leav_date
     * @param string $grad_mo
     * @param string $grad_year
     * @param string $graduated
     * @return array
     */
    public static function insert_education($soc_sec, $educmem = '', $inst_cod = '', $mod_stat = '', $degree = '', $enter_date = '', $leav_date = '', $grad_mo = '', $grad_year = '', $graduated = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['inst_txt', $educmem],
            ['inst_cod', $inst_cod],
            ['mod_stat', $mod_stat],
            ['degree', $degree],
            ['enter_date', $enter_date],
            ['leav_date', $leav_date],
            ['grad_mo', $grad_mo],
            ['grad_year', $grad_year],
            ['graduated', $graduated]
        ];
        return $params;
    }

    /**
     * @param string $soc_sec The objects unique identifier
     * @param string $inst_mem
     * @param string $edu_rid
     * @return array
     */
    public static function insert_inst($soc_sec, $inst_mem = '', $edu_rid = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['inst_mem', $inst_mem],
            ['edu_rid', $edu_rid],
        ];
        return $params;
    }

    /**
     * Search for institution
     *
     * @param string $inst_city
     * @param string $inst_state
     * @param string $inst_txt
     * @param string $insttypcod
     * @param string $inst_cntry
     * @return array
     */
    public static function institutsearch($inst_city = '', $inst_state = '', $inst_txt = '', $insttypcod = '', $inst_cntry = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['inst_city', $inst_city],
            ['inst_cntry', $inst_cntry],
            ['inst_state', $inst_state],
            ['inst_txt', $inst_txt],
            ['insttypcod', $insttypcod],
        ];
        return $params;
    }

    /**
     * Update a given education record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid
     * @param string $eduinsttyp
     * @param string $degree
     * @param string $credits
     * @param string $qlty_pnts
     * @param string $cqpa
     * @param string $rankstud
     * @param string $rankclass
     * @param string $grad_date
     * @param string $enter_date
     * @param string $leav_date
     * @param string $date_rec
     * @param string $matric_dt
     * @param string $trans_rec
     * @param string $prog_desc
     * @param string $educmem
     * @param string $enr_age
     * @param string $orig_grad
     * @param string $grad_mo
     * @param string $grad_year
     * @param string $graduated
     * @param string $grad_honors
     * @param string $nmedu_ce1
     * @param string $nmedu_le1
     * @param string $nmedu_ne1
     * @param string $inst_txt
     * @param string $cohort_cod
     * @param string $degree_sought
     * @param string $prg_sought
     * @param string $ant_grad_date
     * @param string $gpa_creds
     * @param string $transfered
     * @param string $grad_stud
     * @param string $OA_inprocess
     * @param string $diploma
     * @param string $employ_waiver_type
     * @param string $cur_cod
     * @param string $prev_instname
     * @param string $grad_age
     * @param string $degreeclass_cod
     * @param string $nmedu_transmem
     * @param string $employ_waiver
     * @param string $override
     * @return array
     */
    public static function update_education($soc_sec, $edu_rid = '', $eduinsttyp = '', $degree = '', $credits = '', $qlty_pnts = '', $cqpa = '', $rankstud = '', $rankclass = '', $grad_date = '', $enter_date = '', $leav_date = '', $date_rec = '', $matric_dt = '', $trans_rec = '', $prog_desc = '', $educmem = '', $enr_age = '', $orig_grad = '', $grad_mo = '', $grad_year = '', $graduated = '', $grad_honors = '', $nmedu_ce1 = '', $nmedu_le1 = '', $nmedu_ne1 = '', $inst_txt = '', $cohort_cod = '', $degree_sought = '', $prg_sought = '', $ant_grad_date = '', $gpa_creds = '', $transfered = '', $grad_stud = '', $OA_inprocess = '', $diploma = '', $employ_waiver_type = '', $cur_cod = '', $prev_instname = '', $grad_age = '', $degreeclass_cod = '', $nmedu_transmem = '', $employ_waiver = '', $override = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['edu_rid', $edu_rid],
            ['eduinsttyp', $eduinsttyp],
            ['degree', $degree],
            ['credits', $credits],
            ['qlty_pnts', $qlty_pnts],
            ['cqpa', $cqpa],
            ['rankstud', $rankstud],
            ['rankclass', $rankclass],
            ['grad_date', $grad_date],
            ['enter_date', $enter_date],
            ['leav_date', $leav_date],
            ['date_rec', $date_rec],
            ['matric_dt', $matric_dt],
            ['trans_rec', $trans_rec],
            ['prog_desc', $prog_desc],
            ['educmem', $educmem],
            ['enr_age', $enr_age],
            ['orig_grad', $orig_grad],
            ['grad_mo', $grad_mo],
            ['grad_year', $grad_year],
            ['graduated', $graduated],
            ['grad_honors', $grad_honors],
            ['nmedu_ce1', $nmedu_ce1],
            ['nmedu_le1', $nmedu_le1],
            ['nmedu_ne1', $nmedu_ne1],
            ['inst_txt', $inst_txt],
            ['cohort_cod', $cohort_cod],
            ['degree_sought', $degree_sought],
            ['prg_sought', $prg_sought],
            ['ant_grad_date', $ant_grad_date],
            ['gpa_creds', $gpa_creds],
            ['transfered', $transfered],
            ['grad_stud', $grad_stud],
            ['OA_inprocess', $OA_inprocess],
            ['diploma', $diploma],
            ['employ_waiver_type', $employ_waiver_type],
            ['cur_cod', $cur_cod],
            ['prev_instname', $prev_instname],
            ['grad_age', $grad_age],
            ['degreeclass_cod', $degreeclass_cod],
            ['nmedu_transmem', $nmedu_transmem],
            ['employ_waiver', $employ_waiver],
            ['override', $override],
        ];
        return $params;
    }
}
