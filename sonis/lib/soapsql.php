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

namespace Jenzabar\Sonis\Api;

/**
 * Class soapsql
 *
 * Sonis API Framework
 *
 * Component: soapsql.cfc
 *
 * Usage: Call the SOAP SQL endpoint for requested data
 *
 * @file soapsql.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class soapsql
{

    /**
     * Run raw sql statements.
     *
     * Do we really need to make soapsql difficult? it's
     * just a statement with no other options
     *
     * All frontend code should check for sql injection's
     * and or other sql security flaws.
     *
     * The ';' character is not allowed in your sql statement
     *
     * @param string $sql
     * @return array|mixed
     * @example '../tests/sql.sysvar.php'
     * @todo more cleanup, add debugging, maybe check for injections
     */
    public static function run($sql)
    {
        global $utils;
        $returns = true;
        $sql = preg_replace("/[;]/", '', $sql);
        $sqlcmds = ['DELETE', 'INSERT', 'UPDATE',];
        $params = [
            'user' => $utils->utils_api_cfg()['user'],
            'pass' => $utils->utils_api_cfg()['pass'],
            'sql' => $sql,
        ];
        $call = $utils->utils_soap_client($utils->utils_api_cfg()['host'] . '/cfc/soapsql.cfc?wsdl', $utils->utils_api_cfg()['opts']['soap']);
        $result = $call->__soapCall("doSQLSomething", $params);
        if ($utils->utils_api_cfg()['opts']['debug']) {
            $utils->utils_debug_soap($call);
        }
        /** Iterate through sql statement, dont send specific types through the processor */
        foreach ($sqlcmds as $sqlcmd) {
            if ($utils->utils_starts_with($sql, $sqlcmd)) {
                $returns = false;
            }
        }
        if (!$returns) {
            $call->__soapCall("doSQLSomething", $params);
            return 'OK: 200';
        }
        return $utils->utils_array_process($result);
    }
}
