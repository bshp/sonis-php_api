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

    /**
     * Provides an html list of school years
     *
     * @param string $value
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param integer $size
     * @param boolean $use_cur_schyr
     * @return array
     */
    public static function sch_yr($value, $allow_blank, $multi_select, $hide, $size, $use_cur_schyr) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value_', $value],
            ['size', $size],
            ['use_cur_schyr', $use_cur_schyr],
        ];
        return $params;
    }

    /**
     * Provides an html list of application terms
     *
     * @param string $value
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function app_term($value, $allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['value_', $value],
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return $params;
    }

    /**
     * Provides an html list of campus'
     *
     * @param boolean $hide_excludes
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $value
     * @param string $Additional_Properties
     * @return array
     */
    public static function campus($hide_excludes, $allow_blank, $multi_select, $hide, $value, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value_', $value],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        return $params;
    }

    /**
     * Provides an html list of countries
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function country($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return $params;
    }

    /**
     * Provides an html list of counties
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @param string $value
     * @param boolean $disp_only
     * @return array
     */
    public static function county($allow_blank, $multi_select, $hide, $Additional_Properties, $value, $disp_only) {
        $params = [
            ['value_', $value],
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['disp_only', $disp_only]
        ];
        return $params;
    }

    /**
     * Provides an html list of degrees
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function degree($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return $params;
    }

    /**
     * Provides an html list of ethnicity's
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param boolean $desc_only
     * @param string $value
     * @param int $size
     * @param boolean $cod_desc
     * @return array
     */
    public static function ethnic_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        return $params;
    }

    /**
     * Provides an html list of genders
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param boolean $desc_only
     * @param string $value
     * @param int $size
     * @param boolean $cod_desc
     * @return array
     */
    public static function gender_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        return $params;
    }

    /**
     * Provides an html list of interest's
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function interest($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return $params;
    }

    /**
     * Provides an html list of licenses
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param boolean $desc_only
     * @param string $value
     * @param int $size
     * @param boolean $cod_desc
     * @return array
     */
    public static function licenses_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        return $params;
    }

    /**
     * Provides an html list of state's
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function state($allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return $params;
    }

    /**
     * Provides an html list of programs
     *
     * @param boolean $hide_excludes
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function program($hide_excludes, $allow_blank, $multi_select, $hide, $Additional_Properties) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        return $params;
    }

    /**
     * Provides an html list of martial status'
     *
     * @param boolean $allow_blank
     * @param boolean $multi_select
     * @param boolean $hide
     * @param boolean $desc_only
     * @param string $value
     * @param int $size
     * @param boolean $cod_desc
     * @return array
     */
    public static function marital_drop($allow_blank, $multi_select, $hide, $desc_only, $cod_desc, $value = '', $size = 3) {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['value', $value],
            ['size', $size],
            ['cod_desc', $cod_desc],
            ['desc_only', $desc_only],
        ];
        return $params;
    }
}
