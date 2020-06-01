<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2016-2019 Jason A. Everling
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
 * Class dropbox
 *
 * Sonis API Framework
 *
 * Component: drp_box.cfc
 *
 * @file Dropbox.php
 * @package Sonis API
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class Dropbox
{

    /**
     * The Sonis component to call
     *
     * @var string $comp
     */
    public static $comp = 'drp_box';

    /**
     * Creates an html list for yes/no options with values 0 and 1
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return string $result the HTML select value
     */
    public static function booleanBox($allow_blank, $Additional_Properties)
    {
        $result = '<select ' . $Additional_Properties . '>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>';
        if ($allow_blank) {
            $result = '<select ' . $Additional_Properties . '>
                        <option value="0"></option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>';
        }
        return $result;
    }

    /**
     * Provides an html list of application terms
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @return array
     */
    public static function appTerm($allow_blank, $multi_select, $hide, $Additional_Properties, $value = '')
    {
        $comp = self::$comp;
        $method = 'app_term';
        $returns = 'no';
        $params = [
            ['value_', $value],
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of campus'
     *
     * @param boolean $hide_excludes Hide excluded values as set in Sonis, true or false
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @return array
     */
    public static function campus(
        $hide_excludes,
        $allow_blank,
        $multi_select,
        $hide,
        $Additional_Properties,
        $value = ''
    ) {
        $comp = self::$comp;
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of countries
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function country($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'country';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of counties
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @param boolean $disp_only True or false if editable
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @return array
     */
    public static function county($allow_blank, $multi_select, $hide, $Additional_Properties, $disp_only, $value = '')
    {
        $comp = self::$comp;
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of degrees
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function degree($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'degree';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of degrees
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @return array
     */
    public static function enrollStatus($allow_blank, $multi_select, $hide, $Additional_Properties, $value = '')
    {
        $comp = self::$comp;
        $method = 'enrollStatus';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value_', $value],
            ['Additional_Properties', $Additional_Properties]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of departments
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function department($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
        $comp = 'dept';
        $method = 'dept_drop';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of ethnicity's
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function ethnicity($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of genders
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function gender($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of interest's
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function interest($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'interest';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of levels of education
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function levelOfEdu($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'LevelofEdu';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of licenses
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function licenses($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of martial status'
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function marital($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of programs
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param boolean $excl_prg Exclude hidden programs in Sonis
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function programs(
        $allow_blank,
        $multi_select,
        $hide,
        $desc_only,
        $cod_desc,
        $excl_prg,
        $value = '',
        $size = 3
    ) {
        $comp = 'prog';
        $method = 'prog_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
            ['excl_prg', $excl_prg],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of programs
     *
     * @param boolean $hide_excludes Hide excluded values as set in Sonis, true or false
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function program($hide_excludes, $allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'program';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of state's
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function state($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'state';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of states of licensure
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function stateOfLicensure($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'stateoflicensure';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of school years
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $use_cur_sem true or false to use current semester as default
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function schoolYears($allow_blank, $multi_select, $hide, $use_cur_sem, $value = '', $size = 3)
    {
        $comp = 'sch_yr';
        $method = 'sch_yr_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['use_cur_sem', $use_cur_sem],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of semesters
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param boolean $use_cur_sem true or false to use current semester as default
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function semesters(
        $allow_blank,
        $multi_select,
        $hide,
        $desc_only,
        $cod_desc,
        $use_cur_sem,
        $value = '',
        $size = 3
    ) {
        $comp = 'semester';
        $method = 'semester_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
            ['use_cur_sem', $use_cur_sem],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of terms/semester interested in
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $Additional_Properties Add additional html properties for <select>
     * @return array
     */
    public static function termInterest($allow_blank, $multi_select, $hide, $Additional_Properties)
    {
        $comp = self::$comp;
        $method = 'termInterest';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of tuition status'
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function tuitionStatus(
        $allow_blank,
        $multi_select,
        $hide,
        $desc_only,
        $cod_desc,
        $value = '',
        $size = 3
    ) {
        $comp = 'tuitstat';
        $method = 'tuitstat_drop';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of visas'
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param boolean $desc_only Unsure really, testing shows no change
     * @param boolean $cod_desc Unsure really, testing shows no change
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function visa($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3)
    {
        $comp = 'visa';
        $method = 'visa_drop';
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
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }

    /**
     * Provides an html list of zones, i.e dbo.zone
     *
     * @param boolean $allow_blank Allow blank values, true or false, this must be true if $value is not set
     * @param boolean $multi_select Create mutli-select html box, true or false
     * @param boolean $hide Hide this dropdown by default, true or false
     * @param string $value the default value to be used, selected automatically, defaults to blank
     * @param integer $size Unsure really, testing shows no change
     * @return array
     */
    public static function zones($allow_blank, $multi_select, $hide, $value = '', $size = 3)
    {
        $comp = 'zone';
        $method = 'zone_drop';
        $returns = 'no';
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
        ];
        return [
            'comp' => $comp,
            'returns' => $returns,
            'params' => $params,
            'method' => $method
        ];
    }
}
