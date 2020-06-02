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
 * Class SoapApi
 *
 * Sonis API Framework
 *
 * Component: SoapApi.cfc
 *
 * Usage: Call the SOAP API endpoint for requested data
 *
 * @file SoapApi.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016-2019
 * @license https://opensource.org/licenses/MIT
 */
class SoapApi
{

    /**
     * Make the SOAP call and send output to array processor
     *
     * This will make the actual SOAP request and then send
     * to the array processor to try and cleanup before returning
     * the results to the output controller
     *
     * @param mixed $args contains component::method($args)
     * @return array|string Returns output of utils.arrayProcess
     * @example '../tests/api.Biographic.php'
     */
    public static function run($args)
    {
        global $utils;
        $comp = $args['comp'];
        $method = $args['method'];
        $params = $args['params'];
        $returns = $args['returns'];
        $hasBinary = false;
        $isBinary = ['biographic'];
        $call = $utils->soapClient(
            $utils->apiCfg()['host'] . '/cfc/SoapApi.cfc?wsdl',
            $utils->apiCfg()['opts']['soap']
        );
        $result = $call->__soapCall(
            'doAPISomething',
            [
                'user' => $utils->apiCfg()['user'],
                'pass' => $utils->apiCfg()['pass'],
                'comp' => 'CFC.' . $comp,
                'meth' => $method,
                'hasReturnVariable' => $returns,
                'argumentdata' => $params,
            ]
        );
        if ($utils->apiCfg()['opts']['debug']) {
            $utils->debugSoap($call);
        }
        if (in_array($comp, $isBinary)) {
            $hasBinary = true;
        }
        return $utils->arrayProcess($result, $hasBinary);
    }
}
