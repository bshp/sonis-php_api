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
 * Sonis API Framework
 *
 * Component: oa_licenses.cfc
 *
 * @file licenses.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class licenses {

    private function get_comp() {
        $result = 'oa_licenses';
        return $result;
    }

    /**
     * Deletes a persons license
     *
     * @param string $soc_sec The objects unique identifier
     * @return array
     */
    public static function delete_license($soc_sec) {
        $comp = (new self())->get_comp();
        $method = 'delete_license';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Inserts a persons license
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $license The persons license (not dirvers license)
     * @param string $lic_no The persons license number (not dirvers license)
     * @param string $date_rec The persons license date received (mm/dd/yyyy)
     * @param string $date_exp The persons license date expires (mm/dd/yyyy)
     * @param string $lic_mem The persons license memo
     * @param string $d_soc_sec The objects unique identifier
     * @return array
     */
    public static function insert_license($soc_sec, $license, $lic_no, $date_rec, $date_exp, $lic_mem, $d_soc_sec = '') {
        $comp = (new self())->get_comp();
        $method = 'insert_license';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['soc_sec', $license],
            ['lic_no', $lic_no],
            ['date_rec', $date_rec],
            ['date_exp', $date_exp],
            ['lic_mem', $lic_mem],
            ['d_soc_sec', $d_soc_sec],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Search for a persons license
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $license The persons license (not dirvers license)
     * @return array
     */
    public static function search($soc_sec, $license = '') {
        $comp = (new self())->get_comp();
        $method = 'search';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['license', $license],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Update a persons given license
     *
     * @param string $soc_sec The objects unique identifier
     * @param $license The persons license
     * @param string $lic_no The persons license number (not dirvers license)
     * @param string $date_rec The persons license date received (mm/dd/yyyy)
     * @param string $date_exp The persons license date expires (mm/dd/yyyy)
     * @param string $lic_mem The persons license memo
     * @param string $d_soc_sec The objects unique identifier
     * @param string $lic_rid
     * @return array
     */
    public static function update_license($soc_sec, $license, $lic_no, $date_rec, $date_exp, $lic_mem, $lic_rid, $d_soc_sec = '') {
        $comp = (new self())->get_comp();
        $method = 'update_license';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['license', $license],
            ['lic_no', $lic_no],
            ['date_rec', $date_rec],
            ['date_exp', $date_exp],
            ['lic_mem', $lic_mem],
            ['d_soc_sec', $d_soc_sec],
            ['lic_rid', $lic_rid],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }
}
