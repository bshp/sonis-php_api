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
 * Class program
 *
 * Sonis API Framework
 *
 * Component: program.cfc
 *
 * Usage: Program related, mainly for applicants
 *
 * @file program.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class program {

    /**
     * Search for a program
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function approgsearch($soc_sec) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
        ];
        return $params;
    }

    /**
     * Complete an application
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function complete_app($soc_sec) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
        ];
        return $params;
    }

    /**
     * Delete a program record
     *
     * @param $app_rid
     * @return array
     */
    public static function delete_approg($app_rid) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['app_rid', $app_rid]
        ];
        return $params;
    }

    /**
     * Insert a program record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $d_soc_sec
     * @param string $camp_cod
     * @param string $entry_date
     * @param string $prg_cod
     * @param string $div_cod
     * @param string $app_date
     * @param string $ack_date
     * @param string $trans_date
     * @param string $is_applicant
     * @param string $preferred The persons preferred address, yes or no
     * @param string $incomplete
     * @param string $app_rid
     * @param string $ref_source
     * @param string $fee_rec
     * @param string $apfee_dt
     * @param string $prior_app
     * @param string $app_yr
     * @param string $acknowledg
     * @param string $sms_trans
     * @param string $matric_fee
     * @param string $degree_ap
     * @param string $degree_ac
     * @param string $major_ap
     * @param string $major_ac
     * @param string $time_maint
     * @param string $date_maint
     * @param string $trans_done
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @return array
     */
    public static function insert_approg($soc_sec, $d_soc_sec = '', $camp_cod = '', $entry_date = '', $prg_cod = '', $div_cod = '', $app_date = '', $ack_date = '', $trans_date = '', $is_applicant = '', $preferred = '', $incomplete = '', $app_rid = '', $ref_source = '', $fee_rec = '', $apfee_dt = '', $prior_app = '', $app_yr = '', $acknowledg = '', $sms_trans = '', $matric_fee = '', $degree_ap = '', $degree_ac = '', $major_ap = '', $major_ac = '', $time_maint = '', $date_maint = '', $trans_done = '', $operator = '') {
        $params = [
            ['d_soc_sec', $d_soc_sec],
            ['soc_sec', $soc_sec],
            ['app_rid', $app_rid],
            ['prg_cod', $prg_cod],
            ['ref_source', $ref_source],
            ['fee_rec', $fee_rec],
            ['apfee_dt', $apfee_dt],
            ['prior_app', $prior_app],
            ['app_yr', $app_yr],
            ['div_cod', $div_cod],
            ['camp_cod', $camp_cod],
            ['app_date', $app_date],
            ['entry_date', $entry_date],
            ['incomplete', $incomplete],
            ['acknowledg', $acknowledg],
            ['ack_date', $ack_date],
            ['sms_trans', $sms_trans],
            ['trans_date', $trans_date],
            ['matric_fee', $matric_fee],
            ['degree_ap', $degree_ap],
            ['degree_ac', $degree_ac],
            ['major_ap', $major_ap],
            ['major_ac', $major_ac],
            ['time_maint', $time_maint],
            ['date_maint', $date_maint],
            ['trans_done', $trans_done],
            ['operator', $operator],
            ['MainDir', '#MainDir#'],
            ['CurDrive', '#session.CurDrive#'],
            ['is_applicant', $is_applicant],
            ['preferred', $preferred]
        ];
        return $params;
    }

    /**
     * Prevent repeats update
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $prg_cod
     * @return array
     */
    public static function preventrepeats($soc_sec, $prg_cod) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['prg_cod', $prg_cod],
        ];
        return $params;
    }

    /**
     * Search for a program
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function programSearch($soc_sec) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
        ];
        return $params;
    }
}
