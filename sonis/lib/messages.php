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
 */

namespace Jenzabar\Sonis\Api;

/**
 * Class messages
 *
 * Utilities
 *
 * Messages related to various functions
 *
 * @file messages.php
 * @package Utilities
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
class messages {

    /**
     * Returns a static API unavailable message
     *
     * 'Sonis API is not available, please check
     * your settings (username, password, and/or url)'
     *
     * @return string
     */
    public static function msg_api_unavailable() {
        return 'Sonis API is not available, please check your settings (username, password, and/or url)';
    }

    /**
     * Returns a static generic error message
     *
     * 'An error has occurred, check the log for more details'
     *
     * @return string
     */
    public static function msg_array_error() {
        return 'An error has occurred, check the log for more details';
    }

    /**
     * Returns a SOAP error message
     *
     * 'There was a problem with the client config,
     * SOAP Error: '
     *
     * @return string
     */
    public static function msg_soap_client_error() {
        return 'There was a problem with the client config, SOAP Error: ';
    }

    /**
     * Returns a static undefined error message
     *
     * 'An undefined message was received'
     *
     *
     * @return string
     */
    public static function msg_undefined_error() {
        return 'An undefined message was received';
    }
}
