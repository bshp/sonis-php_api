<?php
/**
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
 * API configuration
 *
 * @file sonis.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */

namespace Jenzabar\Sonis\Api;

use stdClass;

require __DIR__ . '/lib.php';

global $cfg;  // Needed for PHPUnit

$cfg = new stdClass();
//========================================
// 1. Configure Sonis API Details        #
//========================================
$cfg->user          =  SONIS_USER;
$cfg->pass          =  SONIS_PASSWORD;
$cfg->host          =  SONIS_HOST;
$cfg->proxy_net     =  PROXY_NET;
$cfg->proxy_auth    =  PROXY_AUTH;
$cfg->proxy_host    =  '';
$cfg->proxy_port    =  '';
$cfg->proxy_user    =  '';
$cfg->proxy_pass    =  '';

//========================================
// 2. Expert: Configure Endpoint Options #
//========================================
$cfg->opts = [
    'soap' => [
        'encoding' => 'UTF-8',
        'trace' => 1,
        'cache_wsdl' => WSDL_CACHE_MEMORY,
        'exceptions' => 1,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
    ],
    'debug' => SOAP_DEBUG, // Print the executed SOAP call to the PHP error log as defined in your php.ini
    'debug_display' => SOAP_DEBUG_DISPLAY, // Display debug messages instead of sending to system error log
];
//=======================================
// Nothing should be changed below this #
//=======================================
//
//===========================
// initialize endpoints     #
//===========================
$api = new soapapi();
$stmt = new soapsql();
$utils = new utils();

//===========================
// proxy parameters         #
//===========================

/**
 * If proxy needed, add addt'l opts
 *
 *@var $cfg->proxy_net
 */
if ($cfg->proxy_net) {
    array_push($cfg->opts['soap'], $cfg->proxy_host, $cfg->proxy_port);
}

/**
 * If proxy authenticated, add addt'l opts
 *
 *@var $cfg->proxy_auth
 */
if ($cfg->proxy_auth) {
    array_push($cfg->opts['soap'], $cfg->proxy_user, $cfg->proxy_pass);
}
$cfg->host = rtrim($cfg->host, '/');
//===========================
// ensure api is reachable  #
//===========================
if (!$utils->utils_api_up()) {
    $utils->utils_event_error(messages::msg_api_unavailable(), true);
}
//closing tag left out on purpose to prevent trailing whitespaces
