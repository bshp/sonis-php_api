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
        $this->proxy_net = $cfg->proxy_net;
        $this->proxy_auth = $cfg->proxy_auth;
        $this->proxy_host = $cfg->proxy_host;
        $this->proxy_port = $cfg->proxy_port;
        $this->proxy_user = $cfg->proxy_user;
        $this->proxy_pass = $cfg->proxy_pass;
        $this->opts = $cfg->opts;
        $this->wsdl = $cfg->host . '/cfc/soapapi.cfc?wsdl';
    }

    /**
     * Store api config variables
     *
     * @return array
     */
    public function api_cfg() {
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
     * @return boolean Returns true or false if endpoint is up
     */
    public function api_up() {
        $ch = curl_init($this->wsdl);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT,5);
        if ($this->proxy_net) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy_host);
            curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxy_port);
        }
        if ($this->proxy_auth) {
            curl_setopt($ch, CURLOPT_USERPWD, "$this->proxy_user:$this->proxy_pass");
        }
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
     * Configurations can be set within sonis.php
     * $cfg->opts section.
     *
     * @return array|SoapClient
     */
    protected function soap_client() {
        try {
            $result = new SoapClient($this->wsdl, $this->opts['soap']);
        } catch (Exception $exception) {
            return ['error' => messages::msg_soap_client_error() . $exception];
        }
        return $result;
    }

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
        global $utils;
        $comp = $args['comp'];
        $method = $args['method'];
        $params = $args['params'];
        $returns = $args['returns'];
        $call = $this->soap_client();
        $result = $call->__soapCall('doAPISomething', [
            'user' => $this->user,
            'pass' => $this->pass,
            'comp' => 'CFC.' . $comp,
            'meth' => $method,
            'hasReturnVariable' => $returns,
            'argumentdata' => $params,
        ]);
        if ($this->opts['debug']) {
            $message = $call->__getLastRequest();
            error_log($message, 0);
        }
        return $utils->utils_array_process($result);
    }
}
