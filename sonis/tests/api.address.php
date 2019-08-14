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
 * Test file for soapapi.cfc, the address.cfc component
 *
 * @file api.address.php
 * @package Test
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
require __DIR__ . '/../config.php';

/**
 * The method within the component
 *
 * @var string $method
 */
$method = 'addressSearch';

/**
 * Is data returned? Yes or No
 *
 * @var string $returns
 */
$returns = 'yes';

/**
 * Required for an address record,
 * if set to 'no' then multiple arrays
 * will be returned
 *
 * @var string $preferred The persons preferred address, yes or no
 */
$preferred = 'yes';

/**
 * The persons Sonis ID (soc_sec)
 *
 * Most, if not all, will require a soc_sec
 *
 * @var string $soc_sec
 */
$soc_sec = '000000000';

/**
 * All the arguments to send.
 *
 * Required format:
 * $args = class::function(all your variables)
 *
 * @var mixed $args
 */
$args = address::addressSearch($soc_sec, $preferred);

/**
 * Start the API call process.
 * Almost every call will look like this.
 *
 * @var mixed $request
 */
$request = $api->run($method, $returns, $args);

print_r($request);
