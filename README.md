# Sonis API in PHP
Translated Sonis SOAP API from Coldfuaion to PHP.

We needed an easy way to integrate and develop new plugins for our website (wordpress) and our lms (moodle) so this was created as a framework to build those on top of.

Classes were created from /CFIDE/componentutils/cfcexplorer.cfc in order to obtain un-documented functions, required params, and additional api endpoints.

Many more methods exist in the Sonis API, those are being added as needed.

Documentation wil be added to the github wiki soon, mostly generated from phpdoc.

## Requirements
PHP: 7.x +, it should work with 5.6 but have not tested.

PHP Extensions: php_soap and php_curl

## Configure
Within your application or projects config file, define the required constants,
````
define('SONIS_USER', 'username');  // Replace 'username' with your Sonis API username
define('SONIS_PASSWORD', 'password'); // Replace 'password' with your Sonis API username
define('SONIS_HOST', 'https://sonis.example.edu'); // Replace 'https://sonis.example.edu' with your Sonis API url
````
Optional:
````
define('PROXY_NET', false); // true or false if proxy needed
define('PROXY_AUTH', false); // true or false if proxy authenticated
define('PROXY_HOST', ''); // Proxy host, DNS or IPv4
define('PROXY_PORT, ''); // Proxy port
define('PROXY_USER, ''); //Proxy username if authenticated
define('PROXY_PASS, ''); // Proxy password
define('SOAP_DEBUG', false); // Send SOAP debug messages to your system log, true or false
define('SOAP_DEBUG_DISPLAY', false); // Display the debug messages, requires SOAP_DEBUG true
````
## Usage
Using this framework inside your package you just need to include the loader, sonis.php. You can check /tests/api.biographic.php as an example
````
use Jenzabar\Sonis\Api\soapapi;
use Jenzabar\Sonis\Api\biographic;

require __DIR__ . '/sonis/sonis.php';
````

Now you can make requests, a simple example to get all the details of a person, each component::method(has documented arguments).

````
$soc_sec = 'the persons id';
$args = biographic::namesearch($soc_sec);
$request = soapapi::run($args);
````
## Notes 

##### _To-do_:
Random cleanup and organization

##### _Values_:
Many of the methods might require almost every field to be sent even if null, searches on the other hand can usually take just one value. If you send an update to a record and do not specify all the current fields then it will erase the fields in Sonis. For an update request, it is best to run a get or search request on the object you are updating first to prefill all the current variables then however you are updating the content replace those values and then run the update method.

For example, if you want to update the address for a given person you would run,

````
address::addressSearch($soc_sec, $preferred);
````

then for each returned value, store them as variables so you can then run,

````
address::update_address($soc_sec, $add_add2, $add_addr, $cell_phone, $city, $country, $county_cod, $e_mail, $fax, $phone, $st_addr, $state, $work_phone, $zip, $cell_provider, $text_me);
```` 

with all the values from your search and then you can replace the values that need to be updated.

Recommended:

_Inserts and Searches(Reads)_ - Use $api(API), returns everything you need with a simple soap request versus large sql statements

_Updates and Deletes(Writes)_ - Use $stmt(SQL), it's the reverse as the previous, a simple request to update values versus a huge soap request.

##### _Errors_:
The SOAP API does not do a good job of reporting errors as an http error code and instead returns a bunch of html as a string. Although there is a function that will log the error and print an error message, the only way to figure the cause is to read your php and/or coldfusion exception logs.

##### _SQL_:
As always with SQL, be careful with your statements. Although Sonis has it documented as 'READ ONLY' it allows updates and drops. The calling function will remove ';' from any statements but you will need to put in your own sql protections within your client.

##### _Tests_:
The tests directory has a few tests you can run, each section documented. We use PHPUnit/Behat on our end for specific use cases and you could also create your own. Eventually I will create some public tests to run.
