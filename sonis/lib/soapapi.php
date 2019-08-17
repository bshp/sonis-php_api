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
 * Class soapapi
 *
 * Sonis API Framework
 *
 * Component: soapapi.cfc
 *
 * Usage: Call the SOAP API endpoint for requested data
 *
 * @file soapapi.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class soapapi {

    /**
     * Make the SOAP call and send output to array processor
     *
     * This will make the actual SOAP request and then send
     * to the array processor to try and cleanup before returning
     * the results to the output controller
     *
     * @param mixed $args contains component::method($args)
     * @return array|string Returns output of utils.utils_array_process
     * @example '../tests/api.biographic.php'
     */
    public function run($args) {
        global $cfg, $utils;
        $comp = $args['comp'];
        $method = $args['method'];
        $params = $args['params'];
        $returns = $args['returns'];
        $call = $utils->utils_soap_client($cfg->host . '/cfc/soapapi.cfc?wsdl', $cfg->opts['soap']);
        $result = $call->__soapCall('doAPISomething', [
            'user' => $cfg->user,
            'pass' => $cfg->pass,
            'comp' => 'CFC.' . $comp,
            'meth' => $method,
            'hasReturnVariable' => $returns,
            'argumentdata' => $params,
        ]);
        if ($cfg->opts['debug']) {
            $message = $call->__getLastRequest();
            error_log($message, 0);
        }
        return $utils->utils_array_process($result);
    }
}
