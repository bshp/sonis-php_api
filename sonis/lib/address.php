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
class address
{

    /**
     * Get the component for the method
     *
     * @return string $result The sonis web services component
     */
    public function get_comp()
    {
        $result = 'address';
        return $result;
    }

    /**
     * Add to an existing user record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $preferred The persons preferred address, yes or no
     * @param string $st_addr The persons street address
     * @param string $add_addr The persons street address number, such as APT 101 or #101
     * @param string $add_add2 Don't think we have ever used this one
     * @param string $city The persons city
     * @param string $state The persons state 2 character code such as TX for Texas
     * @param string $zip The persons zip code
     * @param string $phone The persons phone number
     * @param string $cell_phone The persons cell phone number
     * @param string $work_phone The persons work phone number
     * @param string $county_cod The 2 character code for county such as BX for Bexar. It is best to use a dropbox for these
     * @param string $country The 2 character code for country like US
     * @param string $e_mail The primary email address for the record type
     * @return array
     */
    public static function add_address($soc_sec, $preferred, $st_addr, $add_addr, $add_add2, $city, $state, $zip, $phone, $cell_phone, $work_phone, $county_cod, $country, $e_mail)
    {
        $comp = (new self())->get_comp();
        $method = 'add_address';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Search for an address
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $preferred The persons preferred address, yes or no
     * @return array
     */
    public static function addressSearch($soc_sec, $preferred)
    {
        $comp = (new self())->get_comp();
        $method = 'addressSearch';
        $returns = 'yes';
        $params = [
            ['soc_sec', $soc_sec],
            ['preferred', $preferred]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Insert a new address record
     *
     * @param string $soc_sec The objects unique identifier
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
     * @param string $operator The persons unqiue ID adding or modifying the record. Please change the value
     * @return array
     */
    public static function insert_address($soc_sec, $preferred, $st_addr, $add_addr, $add_add2, $city, $state, $zip, $phone, $cell_phone, $fax, $e_mail, $work_phone, $county_cod, $country, $operator)
    {
        $comp = (new self())->get_comp();
        $method = 'insert_address';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Update an existing address record
     *
     * @param string $soc_sec The objects unique identifier
     * @param string $add_add2 Don't think we have ever used this one
     * @param string $add_addr The persons street address number, such as APT 101 or #101
     * @param string $cell_phone The persons cell phone number
     * @param string $city The persons city
     * @param string $country The 2 character code for country like US
     * @param string $county_cod The 2 character code for county such as BX for Bexar. It is best to use a dropbox for these
     * @param string $e_mail The primary email address for the record type
     * @param string $fax The objects fax number
     * @param string $phone The persons phone number
     * @param string $st_addr The persons street address
     * @param string $state The persons state 2 character code such as TX for Texas
     * @param string $work_phone The persons work phone number
     * @param string $zip The persons zip code
     * @param string $cell_provider
     * @param string $text_me
     * @return array
     */
    public static function update_address($soc_sec, $add_add2, $add_addr, $cell_phone, $city, $country, $county_cod, $e_mail, $fax, $phone, $st_addr, $state, $work_phone, $zip, $cell_provider, $text_me)
    {
        $comp = (new self())->get_comp();
        $method = 'update_address';
        $returns = 'yes';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }
}
