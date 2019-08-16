# Sonis API in PHP
Translated Sonis SOAP API from Coldfuaion to PHP.

We needed an easy way to integrate and develop new plugins for our website (wordpress) and our lms (moodle) so this was created as a framework to build those on top of.

Classes were created from /CFIDE/componentutils/cfcexplorer.cfc in order to obtain un-documented functions, required params, and additional api endpoints.

Many more methods exist in the Sonis API, those are being added as needed.

Documentation wil be added to the github wiki soon, mostly generated from phpdoc.

## Requirements
PHP: 7.x, it should work with 5.6+, code inspection passes but have not tested.

PHP Extensions: php_soap and php_curl

## Configure
Change the settings in section 1. in config-sample.php and then rename to config.php

## Usage
Using this framework inside your package you just need to include the loader, sonis.php,
````
require __DIR__ . '/sonis.php';
````

Now you can make requests, a simple example to get all the details of a person, each component::method(has documented arguments).

````
$soc_sec = 'the persons id';
$args = biographic::namesearch($soc_sec);
$request = $api->run($args);
````
## Notes 

##### _Values_:
Many of the methods might require fields that are not documented as 'required', to try and help, many will have a null value set. You can also update the functions with your own default values.

##### _Errors_:
The SOAP API does not do a good job of reporting errors as an http error code and instead returns a bunch of html as a string. Although there is a function that will log the error and print an error message, the only way to figure the cause is to read your php and/or coldfusion exception logs.

##### _SQL_:
As always with SQL, be careful with your statements. Although Sonis has it documented as 'READ ONLY' it allows updates and drops. The calling function will remove ';' from any statements but you will need to put in your own sql protections within your client.

##### _Tests_:
The tests directory has a few tests you can run, each section documented. We use PHPUnit/Behat on our end for specific use cases and you could also create your own. Eventually I will create some public tests to run.
