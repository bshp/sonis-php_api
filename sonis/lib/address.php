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
 * Class address
 *
 * Sonis API Framework
 *
 * Component: address.cfc
 *
 * @file address.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class address {

    /**
     * Add to an existing user record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $preferred The persons preferred address, yes or no
     * @param string $st_addr
     * @param string $add_addr
     * @param string $add_add2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $phone
     * @param string $cell_phone
     * @param string $work_phone
     * @param string $county_cod
     * @param string $country
     * @param string $e_mail
     * @return array
     */
    public static function add_address($soc_sec, $preferred, $st_addr = '', $add_addr = '', $add_add2 = '', $city = '', $state = '', $zip = '', $phone = '', $cell_phone = '', $work_phone = '', $county_cod = '', $country = '', $e_mail = '' ) {
        $params = [
            ['soc_sec', $soc_sec],
            ['preferred', $preferred],
            ['st_addr', $st_addr],
            ['add_addr', $add_addr],
            ['add_add2', $add_add2],
            ['city', $city],
            ['state', $state],
            ['zip', $zip],
            ['phone', $phone],
            ['cell_phone', $cell_phone],
            ['work_phone', $work_phone],
            ['county_cod', $county_cod],
            ['country', $country],
            ['e_mail', $e_mail]
        ];
        return $params;
    }

    /**
     * Search for an address
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $preferred The persons preferred address, yes or no
     * @return array
     */
    public static function addressSearch($soc_sec, $preferred) {
        $params = [
            ['sonis_ds', '#sonis.ds#'],
            ['soc_sec', $soc_sec],
            ['preferred', $preferred]
        ];
        return $params;
    }

    /**
     * Insert a new address record
     *
     * @param string $soc_sec The objects unique identifier
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
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @return array
     */
    public static function insert_address($soc_sec, $preferred, $st_addr = '', $add_addr = '', $add_add2 = '', $city = '', $state = '', $zip = '', $phone = '', $cell_phone = '', $fax = '', $e_mail = '', $work_phone = '', $county_cod = '', $country = '', $operator = '' ) {
        $params = [
            ['soc_sec', $soc_sec],
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
            ['operator', $operator],
        ];
        return $params;
    }

    /**
     * Update an existing address record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $add_add2
     * @param string $add_addr
     * @param string $cell_phone
     * @param string $city
     * @param string $country
     * @param string $county_cod
     * @param string $e_mail
     * @param string $fax
     * @param string $phone
     * @param string $st_addr
     * @param string $state
     * @param string $work_phone
     * @param string $zip
     * @param string $cell_provider
     * @param string $text_me
     * @return array
     */
    public static function update_address($soc_sec, $add_add2 = '', $add_addr = '', $cell_phone = '', $city = '', $country = '', $county_cod = '', $e_mail = '', $fax = '', $phone = '', $st_addr = '', $state = '', $work_phone = '', $zip = '', $cell_provider = '', $text_me = '') {
        $params = [
            ['soc_sec', $soc_sec],
            ['add_add2', $add_add2],
            ['add_addr', $add_addr],
            ['cell_phone', $cell_phone],
            ['city', $city],
            ['country', $country],
            ['county_cod', $county_cod],
            ['e_mail', $e_mail],
            ['fax', $fax],
            ['phone', $phone],
            ['st_addr', $st_addr],
            ['state', $state],
            ['work_phone', $work_phone],
            ['zip', $zip],
            ['cell_provider', $cell_provider],
            ['text_me', $text_me],
        ];
        return $params;
    }
}
