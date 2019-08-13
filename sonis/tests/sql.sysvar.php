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
 *
 *    For Sonis Coldfusion Web Services
 *
 *    By: Jason A. Everling
 *    Email: jason...@gmail.com
 *
 */

require __DIR__ . '/../config.php';

/**
 * SOAP SQL is the easiest to work with.
 *
 * Data returned is exactly what you have
 * requested, no more, no less. It is
 * recommended to use the API over SQL
 * to help guard against attacks.
 *
 */

/**
 * The query statement to be
 * ran in regular sql language.
 *
 * @var string $sql
 * @example "SELECT TOP 1 * FROM sysvar"
 */
$sql = "SELECT TOP 1 * FROM sysvar";

/**
 * Stores the data queried in $result.
 * Data can be retrieved using the column
 * name in all uppercase, COLUMN_NAME
 *
 * @var array $result
 * @example $result['FIRST_NAME'];
 */
$result = $stmt->run($sql);

print_r($result);
