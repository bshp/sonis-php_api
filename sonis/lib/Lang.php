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
 * Class lang
 *
 * Language
 *
 * Language strings used in the api
 *
 * @file Lang.php
 * @package Language
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2019
 * @license https://opensource.org/licenses/MIT
 */
class Lang
{

    /**
     * Get a language string for the $key provided
     *
     * @param string $key The key identifier for the language string
     * @return mixed $key The language string for the key defined
     */
    public static function get($key)
    {

        global $cfg;
        $i18n = $cfg->locale;
        $root = $cfg->root;
        $lang = [];
        $locale = $root . '/lang/' . $i18n . '.php';

        if ($i18n == '') {
            /** @noinspection PhpIncludeInspection */
            include $root . '/lang/en-US.php';
        } else {
            /** @noinspection PhpIncludeInspection */
            include $locale;
        }
        return $lang[$key];
    }
}
