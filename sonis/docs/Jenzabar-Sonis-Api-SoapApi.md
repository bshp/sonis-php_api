Jenzabar\Sonis\Api\SoapApi
===============

Class SoapApi

Sonis API Framework

Component: SoapApi.cfc

Usage: Call the SOAP API endpoint for requested data


* Class name: SoapApi
* Namespace: Jenzabar\Sonis\Api







Methods
-------


### run

    array|string Jenzabar\Sonis\Api\SoapApi::run(mixed $args)

Make the SOAP call and send output to array processor

This will make the actual SOAP request and then send
to the array processor to try and cleanup before returning
the results to the output controller

* Visibility: **public**
* This method is **static**.


#### Arguments
* $args **mixed** - &lt;p&gt;contains component::method($args)&lt;/p&gt;


