Jenzabar\Sonis\Api\Contacts
===============

Class Contacts

Separated from OA because it also works
on normal emergency contact records

Component: oa_emc.cfc


* Class name: Contacts
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'oa_emc'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### deleteEmc

    array Jenzabar\Sonis\Api\Contacts::deleteEmc(string $nmemc_rid)

Deletes a contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $nmemc_rid **string** - the record id to be deleted



### insertEmc

    array Jenzabar\Sonis\Api\Contacts::insertEmc(string $soc_sec, string $nmemc_name, string $nmemc_phone1, string $nmemc_phone2, string $nmemc_relation, string $st_addr2, string $add_addrs1, string $add_addrs2, string $city2, string $state2, string $zip2, string $e_mail3, string $memo, string $d_soc_sec)

Creates a new emergency contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - the persons id
* $nmemc_name **string** - contact name
* $nmemc_phone1 **string** - contact phone
* $nmemc_phone2 **string** - contact phone 2
* $nmemc_relation **string** - relationship
* $st_addr2 **string** - street address
* $add_addrs1 **string** - bldg, ste, or apt#
* $add_addrs2 **string** - additional if needed
* $city2 **string** - city
* $state2 **string** - state
* $zip2 **string** - zip code
* $e_mail3 **string** - email address
* $memo **string** - contact memo field
* $d_soc_sec **string** - not needed



### searchEmc

    array Jenzabar\Sonis\Api\Contacts::searchEmc(string $soc_sec, string $nmemc_rid)

Searches for a contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - the persons id
* $nmemc_rid **string** - the contact record id if known



### updateEmc

    array Jenzabar\Sonis\Api\Contacts::updateEmc(string $soc_sec, string $nmemc_name, string $nmemc_phone1, string $nmemc_phone2, string $nmemc_relation, string $st_addr2, string $add_addrs1, string $add_addrs2, string $city2, string $state2, string $zip2, string $e_mail3, string $memo, string $nmemc_rid, string $d_soc_sec)

Update an emergency contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - the persons id
* $nmemc_name **string** - contact name
* $nmemc_phone1 **string** - contact phone
* $nmemc_phone2 **string** - contact phone 2
* $nmemc_relation **string** - relationship
* $st_addr2 **string** - street address
* $add_addrs1 **string** - bldg, ste, or apt#
* $add_addrs2 **string** - additional if needed
* $city2 **string** - city
* $state2 **string** - state
* $zip2 **string** - zip code
* $e_mail3 **string** - email address
* $memo **string** - contact memo field
* $nmemc_rid **string** - the contact record id if known
* $d_soc_sec **string** - not needed


