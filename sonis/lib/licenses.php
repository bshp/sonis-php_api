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
 * Class licenses
 *
 * A Person's License,
 * this is not a State or Government card,
 * but rather edu related licenses.
 *
 * @author Jason A. Everling <jason...@gmail.com>
 */
class licenses {

    public static function delete_license($soc_sec) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
        ];
        return $params;
    }

    public static function insert_license($soc_sec, $license, $lic_no, $date_rec, $date_exp, $lic_mem = '', $d_soc_sec = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['soc_sec', $license],
            ['lic_no', $lic_no],
            ['date_rec', $date_rec],
            ['date_exp', $date_exp],
            ['lic_mem', $lic_mem],
            ['d_soc_sec', $d_soc_sec],
        ];
        return $params;
    }

    public static function search($soc_sec, $license = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['license', $license],
        ];
        return $params;
    }

    public static function update_license($soc_sec, $license, $lic_no = '', $date_rec = '', $date_exp = '', $lic_mem = '', $d_soc_sec = '',  $lic_rid = '') {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['license', $license],
            ['lic_no', $lic_no],
            ['date_rec', $date_rec],
            ['date_exp', $date_exp],
            ['lic_mem', $lic_mem],
            ['d_soc_sec', $d_soc_sec],
            ['lic_rid', $lic_rid],
        ];
        return $params;
    }
}
