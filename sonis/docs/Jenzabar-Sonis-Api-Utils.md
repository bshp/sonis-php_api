Jenzabar\Sonis\Api\Utils
===============

Class utils

Utilities

Various php utilities


* Class name: Utils
* Namespace: Jenzabar\Sonis\Api







Methods
-------


### __construct

    mixed Jenzabar\Sonis\Api\Utils::__construct()

Decepticon Constructor



* Visibility: **public**




### apiCfg

    array Jenzabar\Sonis\Api\Utils::apiCfg()

Store api config variables



* Visibility: **public**




### apiUp

    boolean Jenzabar\Sonis\Api\Utils::apiUp()

Simple check for the api endpoint



* Visibility: **public**




### createID

    string Jenzabar\Sonis\Api\Utils::createID(string $lastname)

Generates a new Sonis ID



* Visibility: **public**


#### Arguments
* $lastname **string** - &lt;p&gt;string the persons last name&lt;/p&gt;



### createRID

    string Jenzabar\Sonis\Api\Utils::createRID(string $suffix)

Generate an RID for Sonis

Some tables require a random (*_rid field),
this will create a compatible integer for use.

* Visibility: **public**


#### Arguments
* $suffix **string** - &lt;p&gt;Either a 0 or 1 suffixed to match Sonis rid&#039;s&lt;/p&gt;



### createUUID

    string Jenzabar\Sonis\Api\Utils::createUUID(string $format, string $case)

Generate a UUID, either in coldfusion (cf) format or standard



* Visibility: **public**


#### Arguments
* $format **string** - &lt;p&gt;Either &#039;cf&#039; or &#039;rfc&#039;&lt;/p&gt;
* $case **string** - &lt;p&gt;Return as uppercase or lowercase, either of &#039;lc&#039; or &#039;uc&#039;&lt;/p&gt;



### debugSoap

    boolean|mixed Jenzabar\Sonis\Api\Utils::debugSoap(mixed $call)

Debugging a SOAP call, handle routing



* Visibility: **public**


#### Arguments
* $call **mixed** - &lt;p&gt;The SOAP call that is executed&lt;/p&gt;



### dt

    false|string Jenzabar\Sonis\Api\Utils::dt(string $date)

Format date/time to yyyy-mm-dd



* Visibility: **public**


#### Arguments
* $date **string**



### eventError

    mixed Jenzabar\Sonis\Api\Utils::eventError(string $msg, boolean $fail)

Returns a dynamic message with
trigger_error and/or can fail.



* Visibility: **public**


#### Arguments
* $msg **string**
* $fail **boolean** - &lt;p&gt;Is it fatal?&lt;/p&gt;



### lc

    false|string Jenzabar\Sonis\Api\Utils::lc(string $data)

Convert given string $data to lowercase,
using strtolower



* Visibility: **public**


#### Arguments
* $data **string**



### uc

    false|string Jenzabar\Sonis\Api\Utils::uc(string $data)

Convert given string $data to uppercase,
using strtoupper



* Visibility: **public**


#### Arguments
* $data **string**



### arrayProcess

    array|string Jenzabar\Sonis\Api\Utils::arrayProcess($array)

Process an array.

Sonis returns two arrays (keys, values),
cleanup, remove duplicates, combine keys to
values into a single array.

Ensure returned data is an array, if sql data
called ensure a result is returned. If data is
not an array, send to error log.

* Visibility: **public**


#### Arguments
* $array **mixed**



### arrayCombine

    array Jenzabar\Sonis\Api\Utils::arrayCombine($keys, $values)

Combine an array using array_walk
Sonis can return duplicate keys/values



* Visibility: **public**


#### Arguments
* $keys **mixed**
* $values **mixed**



### arrayException

    boolean Jenzabar\Sonis\Api\Utils::arrayException(string $array)

Send Coldfusion exception to system defined errorlog



* Visibility: **public**


#### Arguments
* $array **string**



### arrayCreateAssoc

    array Jenzabar\Sonis\Api\Utils::arrayCreateAssoc($array)

Creates an associative array from the
given array($array).

API results are in the form of
array 0 = columns/keys, array 1 = data/values,
this will create an associative array instead,
[column/key] => value

* Visibility: **public**


#### Arguments
* $array **mixed**



### arrayLC

    array|boolean Jenzabar\Sonis\Api\Utils::arrayLC(array $array)

Change all keys in an array to lowercase,
works on multi-dimensional arrays as well.



* Visibility: **public**


#### Arguments
* $array **array**



### arrayOfArraysLC

    array Jenzabar\Sonis\Api\Utils::arrayOfArraysLC(array $array)

Change key case to lower for multi-dimensional arrays



* Visibility: **private**


#### Arguments
* $array **array**



### arrayMerge

    array|boolean Jenzabar\Sonis\Api\Utils::arrayMerge(array $array)

Reduce/Deduplicate an array using arrayMerge



* Visibility: **public**


#### Arguments
* $array **array**



### arrayTrim

    array|boolean Jenzabar\Sonis\Api\Utils::arrayTrim(array $array)

Trim an array using array_map



* Visibility: **public**


#### Arguments
* $array **array**



### objToArray

    array|object Jenzabar\Sonis\Api\Utils::objToArray(object $obj)

Convert a given object($obj) to an array($result)

Will take a given object($obj) and convert
it to an array($result). If it already exists, it will
just return the given object($obj).

* Visibility: **public**


#### Arguments
* $obj **object** - &lt;p&gt;The object to create an array from&lt;/p&gt;



### soapClient

    array|\SoapClient Jenzabar\Sonis\Api\Utils::soapClient(string $wsdl, array $opts)

Set SOAP client config

Configurations can be set within sonis.php
$cfg->opts section.

* Visibility: **public**


#### Arguments
* $wsdl **string** - &lt;p&gt;the wsdl location&lt;/p&gt;
* $opts **array** - &lt;p&gt;SOAP options&lt;/p&gt;



### startsWith

    boolean Jenzabar\Sonis\Api\Utils::startsWith(string $string, string $start_string)

Check if string begins with

Returns true or false if a given $start_string is
found in the given $string

* Visibility: **public**


#### Arguments
* $string **string** - &lt;p&gt;The string to search in&lt;/p&gt;
* $start_string **string** - &lt;p&gt;The value to search for&lt;/p&gt;



### getVersion

    string Jenzabar\Sonis\Api\Utils::getVersion(string $key)

Returns the Sonis PHP API version information



* Visibility: **public**


#### Arguments
* $key **string** - &lt;p&gt;The display type to get, major, patch or pretty&lt;/p&gt;


