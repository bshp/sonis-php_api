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
     * Decepticon Constructor
     */
    public function __construct() {
        global $cfg;
        $this->user = $cfg->user;
        $this->pass = $cfg->pass;
        $this->host = $cfg->host;
        $this->opts = $cfg->opts;
        $this->wsdl = $cfg->host . '/cfc/soapapi.cfc?wsdl';
    }

    /**
     * Store api config variables
     *
     * @return array
     */
    public function apiConfig() {
        return [
            'user' => $this->user,
            'pass' => $this->pass,
            'host' => $this->host,
            'opts' => $this->opts,
            'wsdl' => $this->wsdl,
        ];
    }

    /**
     * Simple check for the api endpoint
     *
     * @return bool Returns true or false if endpoint is up
     */
    public function apiUp() {
        $ch = curl_init($this->wsdl);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT,5);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        //don't really need detailed error codes
        switch ($httpcode) {
            case 200:
                return true;
        }
        return false;
    }

    /**
     * Set SOAP client config
     *
     * @return array|SoapClient
     */
    protected function soapConfig() {
        try {
            $result = new SoapClient($this->wsdl, $this->opts['soap']);
        } catch (Exception $exception) {
            return ['error' => messages::msg_soap_client_error() . $exception];
        }
        return $result;
    }

    /**
     * Make the SOAP call and send output to decrapifier
     *
     * @param string $method the method within the component
     * @param string $returns yes or no if returns data
     * @param mixed $args contains component::method($key)
     * @return array|string Returns output of utils.utils_array_process
     * @example '../tests/api.biographic.php'
     */
    public function run($method, $returns, $args) {
        global $utils;
        //$method = substr($args, strpos($args, ":") + 2);
        include_once __DIR__ . '/../router.php';
        $call = $this->soapConfig();
        $result = $call->__soapCall('doAPISomething', [
            'user' => $this->user,
            'pass' => $this->pass,
            'comp' => 'CFC.' . $comp,
            'meth' => $method,
            'hasReturnVariable' => $returns,
            'argumentdata' => $args,
        ]);
        if ($this->opts['debug']) {
            $message = $call->__getLastRequest();
            error_log($message, 0);
        }
        return $utils->utils_array_process($result);
    }
}
