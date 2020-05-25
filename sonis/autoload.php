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
 *
 *    For Sonis Coldfusion Web Services
 *
 *    By: Jason A. Everling
 *    Email: jeverling@bshp.edu
 *
 */

namespace Jenzabar\Sonis\Api;

/**
 * The autoloader,
 * sonis.php does everything else
 */
spl_autoload_register(function ($class) {
    $ns = 'Jenzabar\Sonis\Api';
    $len = strlen($ns);

    //Check if we are using the Sonis namespace before proceeding
    if (strncmp($ns, $class, $len) !== 0) {
        return;
    }

    $lib = explode('\\', $class);
    require(__DIR__ . '/lib/' . $lib[3] . '.php');
    
});

//============================
// Set defaults if undefined #
//============================
if (!defined('PROXY_NET')) {
    define('PROXY_NET', false);
}
if (!defined('PROXY_AUTH')) {
    define('PROXY_AUTH', false);
}
if (!defined('PROXY_HOST')) {
    define('PROXY_HOST', '');
}
if (!defined('PROXY_PORT')) {
    define('PROXY_PORT', '');
}
if (!defined('PROXY_USER')) {
    define('PROXY_USER', '');
}
if (!defined('PROXY_PASS')) {
    define('PROXY_PASS', '');
}
if (!defined('SOAP_DEBUG')) {
    define('SOAP_DEBUG', false);
}
if (!defined('SOAP_DEBUG_DISPLAY')) {
    define('SOAP_DEBUG_DISPLAY', false);
}
