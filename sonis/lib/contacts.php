<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2019 Jason A. Everling
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
 *
 *    For Sonis Coldfusion Web Services
 *
 *    By: Jason A. Everling
 *    Email: jeverling@bshp.edu
 *
 */

namespace Jenzabar\Sonis\Api;

/**
 * Class contacts
 *
 * Separated from OA because it also works
 * on normal emergency contact records
 *
 * Component: oa_emc.cfc
 *
 * @file onlineapp.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class contacts
{

    /**
     * Deletes a contact record
     *
     * @param string $nmemc_rid the record id to be deleted
     * @return array
     */
    public static function delete_emc($nmemc_rid)
    {
        $comp = 'oa_emc';
        $method = 'delete_emc';
        $returns = 'yes';
        $params = [
            ['nmemc_rid', $nmemc_rid],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Creates a new emergency contact record
     *
     * @param string $soc_sec the persons id
     * @param string $nmemc_name contact name
     * @param string $nmemc_phone1 contact phone
     * @param string $nmemc_phone2 contact phone 2
     * @param string $nmemc_relation relationship
     * @param string $st_addr2 street address
     * @param string $add_addrs1 bldg, ste, or apt#
     * @param string $add_addrs2 additional if needed
     * @param string $city2 city
     * @param string $state2 state
     * @param string $zip2 zip code
     * @param string $e_mail3 email address
     * @param string $memo contact memo field
     * @param string $d_soc_sec not needed
     * @return array
     */
    public static function insert_emc(
        $soc_sec,
        $nmemc_name,
        $nmemc_phone1,
        $nmemc_phone2,
        $nmemc_relation,
        $st_addr2,
        $add_addrs1,
        $add_addrs2,
        $city2,
        $state2,
        $zip2,
        $e_mail3,
        $memo,
        $d_soc_sec =''
    ) {
        $comp = 'oa_emc';
        $method = 'insert_emc';
        $returns = 'yes';
        $params = [
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['nmemc_name', $nmemc_name],
            ['nmemc_phone1', $nmemc_phone1],
            ['nmemc_phone2', $nmemc_phone2],
            ['nmemc_relation', $nmemc_relation],
            ['st_addr2', $st_addr2],
            ['add_addrs1', $add_addrs1],
            ['add_addrs2', $add_addrs2],
            ['city2', $city2],
            ['state2', $state2],
            ['zip2', $zip2],
            ['e_mail3', $e_mail3],
            ['memo', $memo],
            ['d_soc_sec', $d_soc_sec],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Searches for a contact record
     *
     * @param string $soc_sec the persons id
     * @param string $nmemc_rid the contact record id if known
     * @return array
     */
    public static function search($soc_sec, $nmemc_rid = '')
    {
        $comp = 'oa_emc';
        $method = 'search';
        $returns = 'yes';
        $params = [
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['nmemc_rid', $nmemc_rid],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * @param string $soc_sec the persons id
     * @param string $nmemc_name contact name
     * @param string $nmemc_phone1 contact phone
     * @param string $nmemc_phone2 contact phone 2
     * @param string $nmemc_relation relationship
     * @param string $st_addr2 street address
     * @param string $add_addrs1 bldg, ste, or apt#
     * @param string $add_addrs2 additional if needed
     * @param string $city2 city
     * @param string $state2 state
     * @param string $zip2 zip code
     * @param string $e_mail3 email address
     * @param string $memo contact memo field
     * @param string $nmemc_rid the contact record id if known
     * @param string $d_soc_sec not needed
     * @return array
     */
    public static function update_emc(
        $soc_sec,
        $nmemc_name,
        $nmemc_phone1,
        $nmemc_phone2,
        $nmemc_relation,
        $st_addr2,
        $add_addrs1,
        $add_addrs2,
        $city2,
        $state2,
        $zip2,
        $e_mail3,
        $memo,
        $nmemc_rid,
        $d_soc_sec = ''
    ) {
        $comp = 'oa_emc';
        $method = 'update_emc';
        $returns = 'yes';
        $params = [
            ['MainDir', '#MainDir#'],
            ['soc_sec', $soc_sec],
            ['nmemc_name', $nmemc_name],
            ['nmemc_phone1', $nmemc_phone1],
            ['nmemc_phone2', $nmemc_phone2],
            ['nmemc_relation', $nmemc_relation],
            ['st_addr2', $st_addr2],
            ['add_addrs1', $add_addrs1],
            ['add_addrs2', $add_addrs2],
            ['city2', $city2],
            ['state2', $state2],
            ['zip2', $zip2],
            ['e_mail3', $e_mail3],
            ['memo', $memo],
            ['d_soc_sec', $d_soc_sec],
            ['nmemc_rid', $nmemc_rid],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

}
