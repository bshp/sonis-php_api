Jenzabar\Sonis\Api\SoapSql
===============

Class SoapSql

Sonis API Framework

Component: SoapSql.cfc

Usage: Call the SOAP SQL endpoint for requested data


* Class name: SoapSql
* Namespace: Jenzabar\Sonis\Api







Methods
-------


### run

    array|mixed Jenzabar\Sonis\Api\SoapSql::run(string $sql)

Run raw sql statements.

Do we really need to make SoapSql difficult? it's
just a statement with no other options

All frontend code should check for sql injection's
and or other sql security flaws.

The ';' character is not allowed in your sql statement

* Visibility: **public**
* This method is **static**.


#### Arguments
* $sql **string**


