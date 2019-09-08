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
 * Sonis API Framework
 *
 * Library loader
 *
 * @file lib.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */

namespace Jenzabar\Sonis\Api;

/**
 * Set defaults if undefined
 */
if (!defined('PROXY_NET')) {
    define('PROXY_NET', false);
}
if (!defined('PROXY_AUTH')) {
    define('PROXY_AUTH', false);
}
if (!defined('SOAP_DEBUG')) {
    define('SOAP_DEBUG', false);
}
if (!defined('SOAP_DEBUG_DISPLAY')) {
    define('SOAP_DEBUG_DISPLAY', false);
}

/**
 * The autoloader,
 * sonis.php does everything else
 */
spl_autoload_register(function ($lib) {
    $ns = 'Jenzabar\\Sonis\\Api';
    $path = __DIR__ . '/lib/';
    $strlen = strlen($ns);
    if (strncmp($ns, $lib, $strlen) !== 0) {
        return;
    }
    $class = substr($lib, $strlen);
    $library_file = $path . str_replace('\\', '/', $class) . '.php';
    if (file_exists($library_file)) {
        require $library_file;
    }
});
