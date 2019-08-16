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
 * Class dropbox
 *
 * Sonis API Framework
 *
 * Component: drp_box.cfc
 *
 * @file dropbox.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class dropbox {

    private function get_comp() {
        $result = 'drp_box';
        return $result;
    }

    /**
     * Provides an html list of school years
     *
     * @param string $value a value for the dropbox
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param integer $size Unsure really, testing shows no change, defaults to '3'
     * @param boolean $use_cur_schyr True or false, use the current school year on sysvars, defaults to true
     * @return array
     */
    public static function sch_yr($value, $allow_blank, $multi_select, $hide, $size, $use_cur_schyr) {
        $comp = (new self())->get_comp();
        $method = 'sch_yr';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value_', $value],
            ['size', $size],
            ['use_cur_schyr', $use_cur_schyr],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of application terms
     *
     * @param string $value a value for the dropbox
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function app_term($value, $allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'app_term';
        $returns = 'no';
        $params = [
            ['value_', $value],
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of campus'
     *
     * @param boolean $hide_excludes Hide excluded values as set in Sonis, true or false
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $value a value for the dropbox
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function campus($hide_excludes, $allow_blank, $multi_select, $hide, $value, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'campus';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value_', $value],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of countries
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function country($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'country';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of counties
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @param string $value a value for the dropbox
     * @param boolean $disp_only True or false if editable
     * @return array
     */
    public static function county($allow_blank, $multi_select, $hide, $Additional_Properties, $value, $disp_only) {
        $comp = (new self())->get_comp();
        $method = 'county';
        $returns = 'no';
        $params = [
            ['value_', $value],
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['disp_only', $disp_only]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of degrees
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function degree($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'degree';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of ethnicity's
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param string $value a value for the dropbox
     * @param integer $size Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @return array
     */
    public static function ethnic_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $comp = 'ethnic';
        $method = 'ethnic_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of genders
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param string $value a value for the dropbox
     * @param integer $size Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @return array
     */
    public static function gender_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $comp = 'gender';
        $method = 'gender_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of interest's
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function interest($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'interest';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of licenses
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param string $value a value for the dropbox
     * @param integer $size Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @return array
     */
    public static function licenses_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $comp = 'licenses';
        $method = 'licenses_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of state's
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function state($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'state';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of programs
     *
     * @param boolean $hide_excludes Hide excluded values as set in Sonis, true or false
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Additional props
     * @return array
     */
    public static function program($hide_excludes, $allow_blank, $multi_select, $hide, $Additional_Properties) {
        $comp = (new self())->get_comp();
        $method = 'program';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }

    /**
     * Provides an html list of martial status'
     *
     * @param boolean $allow_blank Allow blank values, true or false
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param string $value a value for the dropbox
     * @param integer $size Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @return array
     */
    public static function marital_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $comp = 'marital';
        $method = 'marital_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        //return $params;
        return ['comp' => $comp, 'returns' => $returns, 'params' => $params, 'method' => $method];
    }
}
