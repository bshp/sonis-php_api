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

    private function get_comp() {
        $result = 'education';
        return $result;
    }

    /**
     * Deletes an education record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid Edu record id
     * @return array
     */
    public static function delete_education($soc_sec, $edu_rid) {
        $comp = (new self())->get_comp();
        $method = 'delete_education';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['edu_rid', $edu_rid]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Search for an education record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid Edu record id
     * @return array
     */
    public static function eduSearch($soc_sec, $edu_rid = '') {
        $comp = (new self())->get_comp();
        $method = 'eduSearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['edu_rid', $edu_rid],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Inserts a new edu record and sets as default
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $cohort_cod Cohort code
     * @return array
     */
    public static function insert_default_education($soc_sec, $cohort_cod) {
        $comp = (new self())->get_comp();
        $method = 'insert_default_education';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['cohort_cod', $cohort_cod]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Inserts a new edu record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $educmem Educational record memo
     * @param string $inst_cod Institutional code
     * @param string $mod_stat The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
     * @param string $degree Degree for the given educational record
     * @param string $enter_date Educational record entry date
     * @param string $leav_date Educational record leaving date
     * @param string $grad_mo Educational record gradfuation month
     * @param string $grad_year Educational record gradfuation year
     * @param string $graduated Educational record graduated, true or false
     * @return array
     */
    public static function insert_education($soc_sec, $educmem, $inst_cod, $mod_stat, $degree, $enter_date, $leav_date, $grad_mo, $grad_year, $graduated) {
        $comp = (new self())->get_comp();
        $method = 'insert_education';
        $returns = 'yes';
        $params = [
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
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Inserts a new institution
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $inst_mem Institutional memo
     * @param string $edu_rid Edu record id
     * @return array
     */
    public static function insert_inst($soc_sec, $inst_mem = '', $edu_rid = '') {
        $comp = (new self())->get_comp();
        $method = 'insert_inst';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['inst_mem', $inst_mem],
            ['edu_rid', $edu_rid],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Search for institution
     *
     * @param string $inst_city Institutional city
     * @param string $inst_state Institutional state
     * @param string $inst_txt Institutional description
     * @param string $insttypcod Institutional type code
     * @param string $inst_cntry Institutional country
     * @return array
     */
    public static function institutsearch($inst_city = '', $inst_state = '', $inst_txt = '', $insttypcod = '', $inst_cntry = '') {
        $comp = (new self())->get_comp();
        $method = 'institutsearch';
        $returns = 'yes';
        $params = [
            ['inst_city', $inst_city],
            ['inst_cntry', $inst_cntry],
            ['inst_state', $inst_state],
            ['inst_txt', $inst_txt],
            ['insttypcod', $insttypcod],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Update a given education record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $edu_rid Edu record id
     * @param string $eduinsttyp Institutional type
     * @param string $degree Degree for the given educational record
     * @param string $credits Credits
     * @param string $qlty_pnts Quality point
     * @param string $cqpa
     * @param string $rankstud Student rank
     * @param string $rankclass Class rank
     * @param string $grad_date Graduation date
     * @param string $enter_date Educational record entry date
     * @param string $leav_date Educational record leaving date
     * @param string $date_rec Date received
     * @param string $matric_dt Matriculation date
     * @param string $trans_rec Transcripts received
     * @param string $prog_desc Program description
     * @param string $educmem Educational record memo
     * @param string $enr_age Enrollment age
     * @param string $orig_grad Original graduation date
     * @param string $grad_mo Educational record gradfuation month
     * @param string $grad_year Educational record gradfuation year
     * @param string $graduated Educational record graduated, true or false
     * @param string $grad_honors Graduated with honors
     * @param string $nmedu_ce1 Custom Field 1
     * @param string $nmedu_le1 Custom Field 2
     * @param string $nmedu_ne1 Custom Field 3
     * @param string $inst_txt Institutional description
     * @param string $cohort_cod Cohort code
     * @param string $degree_sought Degree sought
     * @param string $prg_sought Program sought
     * @param string $ant_grad_date Anticipated graduation date
     * @param string $gpa_creds GPA Credits
     * @param string $transfered Transfered
     * @param string $grad_stud
     * @param string $OA_inprocess Online application in progress
     * @param string $diploma Diploma
     * @param string $employ_waiver_type Employer waiver type
     * @param string $cur_cod
     * @param string $prev_instname Previous instituion name
     * @param string $grad_age Graduating age
     * @param string $degreeclass_cod Degree class code
     * @param string $nmedu_transmem Transfer memo
     * @param string $employ_waiver Employer waiver
     * @param string $override Override flag
     * @return array
     */
    public static function update_education($soc_sec, $edu_rid, $eduinsttyp, $degree, $credits, $qlty_pnts, $cqpa, $rankstud, $rankclass, $grad_date, $enter_date, $leav_date, $date_rec, $matric_dt, $trans_rec, $prog_desc, $educmem, $enr_age, $orig_grad, $grad_mo, $grad_year, $graduated, $grad_honors, $nmedu_ce1, $nmedu_le1, $nmedu_ne1, $inst_txt, $cohort_cod, $degree_sought, $prg_sought, $ant_grad_date, $gpa_creds, $transfered, $grad_stud, $OA_inprocess, $diploma, $employ_waiver_type, $cur_cod, $prev_instname, $grad_age, $degreeclass_cod, $nmedu_transmem, $employ_waiver, $override) {
        $comp = (new self())->get_comp();
        $method = 'update_education';
        $returns = 'yes';
        $params = [
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
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }
}
