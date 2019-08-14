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
 * Fields with drop-downs and/or lookup
 *
 * @author Jason A. Everling <jason...@gmail.com>
 */
class dropbox {

    /**
     * Provides a list of school years
     *
     * @param $value
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $size
     * @param string $use_cur_schyr
     * @return array
     */
    public static function sch_yr($value, $allow_blank = '', $multi_select = '', $hide = '', $size = '', $use_cur_schyr = '') {
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
     * Provides a list of application terms
     *
     * @param $value
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function app_term($value, $allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
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
     * Provides a list of campus'
     *
     * @param $hide_excludes
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $value
     * @param string $Additional_Properties
     * @return array
     */
    public static function campus($hide_excludes, $allow_blank = '', $multi_select = '', $hide = '', $value = '', $Additional_Properties = '') {
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
     * Provides a list of countries
     *
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function country($allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return $params;
    }

    /**
     * Provides a list of counties
     *
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @param string $value
     * @param string $disp_only
     * @return array
     */
    public static function county($allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '', $value = '', $disp_only = '') {
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
     * Provides a list of degrees
     *
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function degree($allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return $params;
    }

    /**
     * Provides a list of interest's
     *
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function interest($allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];

        return $params;
    }

    /**
     * Provides a list of state's
     *
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function state($allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties]
        ];
        return $params;
    }

    /**
     * Provides a list of programs
     *
     * @param $hide_excludes
     * @param string $allow_blank
     * @param string $multi_select
     * @param string $hide
     * @param string $Additional_Properties
     * @return array
     */
    public static function program($hide_excludes, $allow_blank = '', $multi_select = '', $hide = '', $Additional_Properties = '') {
        $params = [
            ['allow_blank', $allow_blank],
            ['multi_select', $multi_select],
            ['hide', $hide],
            ['Additional_Properties', $Additional_Properties],
            ['hide_excludes', $hide_excludes]
        ];
        return $params;
    }
}
