soapsql
===============

Class soapsql

Sonis API Framework

Component: soapsql.cfc

Usage: Call the SOAP SQL endpoint for requested data


* Class name: soapsql
* Namespace: 







Methods
-------


### run

    array|mixed soapsql::run(string $sql)

Run raw sql statements.

Do we really need to make soapsql difficult? it's
just a statement with no other options

All frontend code should check for sql injection's
and or other sql security flaws.

The ';' character is not allowed in your sql statement

* Visibility: **public**


#### Arguments
* $sql **string**


