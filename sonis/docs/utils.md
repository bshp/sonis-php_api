utils
===============

Class utils

Utilities

Various php utilities


* Class name: utils
* Namespace: 







Methods
-------


### utils_dt

    false|string utils::utils_dt(string $date)

Format date/time to yyyy-mm-dd



* Visibility: **public**


#### Arguments
* $date **string**



### utils_event_error

    mixed utils::utils_event_error(string $msg, boolean $fail)

Returns a dynamic message with
trigger_error and/or can fail.



* Visibility: **public**


#### Arguments
* $msg **string**
* $fail **boolean** - &lt;p&gt;Is it fatal?&lt;/p&gt;



### utils_lc

    false|string utils::utils_lc(string $data)

Convert given string $data to lowercase,
using strtolower



* Visibility: **public**


#### Arguments
* $data **string**



### utils_uc

    false|string utils::utils_uc(string $data)

Convert given string $data to uppercase,
using strtoupper



* Visibility: **public**


#### Arguments
* $data **string**



### utils_array_process

    array|string utils::utils_array_process($array)

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



### utils_array_combine

    array utils::utils_array_combine($keys, $values)

Combine an array using array_walk
Sonis can return duplicate keys/values



* Visibility: **public**


#### Arguments
* $keys **mixed**
* $values **mixed**



### utils_array_exception

    boolean utils::utils_array_exception(string $array)

Send Coldfusion exception to system defined errorlog



* Visibility: **public**


#### Arguments
* $array **string**



### utils_array_create_assoc

    array utils::utils_array_create_assoc($array)

Creates an associative array from the
given array($array).

API results are in the form of
array 0 = columns/keys, array 1 = data/values,
this will create an associative array instead,
[column/key] => value

* Visibility: **public**


#### Arguments
* $array **mixed**



### utils_array_lc

    array|boolean utils::utils_array_lc(array $array)

Change all keys in an array to lowercase



* Visibility: **public**


#### Arguments
* $array **array**



### utils_array_merge

    array|boolean utils::utils_array_merge(array $array)

Reduce/Deduplicate an array using array_merge



* Visibility: **public**


#### Arguments
* $array **array**



### utils_array_trim

    array|boolean utils::utils_array_trim(array $array)

Trim an array using array_map



* Visibility: **public**


#### Arguments
* $array **array**



### utils_obj_to_array

    array|object utils::utils_obj_to_array(object $obj)

Convert a given object($obj) to an array($result)

Will take a given object($obj) and convert
it to an array($result). If it already exists, it will
just return the given object($obj).

* Visibility: **public**


#### Arguments
* $obj **object** - &lt;p&gt;The object to create an array from&lt;/p&gt;


