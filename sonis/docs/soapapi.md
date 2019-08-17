soapapi
===============

Class soapapi

Sonis API Framework

Component: soapapi.cfc

Usage: Call the SOAP API endpoint for requested data


* Class name: soapapi
* Namespace: 







Methods
-------


### __construct

    mixed soapapi::__construct()

Decepticon Constructor



* Visibility: **public**




### apiConfig

    array soapapi::apiConfig()

Store api config variables



* Visibility: **public**




### apiUp

    boolean soapapi::apiUp()

Simple check for the api endpoint



* Visibility: **public**




### soapConfig

    array|\SoapClient soapapi::soapConfig()

Set SOAP client config

Configurations can be set within sonis.php
$cfg->opts section.

* Visibility: **protected**




### run

    array|string soapapi::run(mixed $args)

Make the SOAP call and send output to array processor

This will make the actual SOAP request and then send
to the array processor to try and cleanup before returning
the results to the output controller

* Visibility: **public**


#### Arguments
* $args **mixed** - &lt;p&gt;contains component::method($args)&lt;/p&gt;


