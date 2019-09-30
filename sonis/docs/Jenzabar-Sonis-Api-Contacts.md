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
* $nmemc_rid **string** - &lt;p&gt;the record id to be deleted&lt;/p&gt;



### insertEmc

    array Jenzabar\Sonis\Api\Contacts::insertEmc(string $soc_sec, string $nmemc_name, string $nmemc_phone1, string $nmemc_phone2, string $nmemc_relation, string $st_addr2, string $add_addrs1, string $add_addrs2, string $city2, string $state2, string $zip2, string $e_mail3, string $memo, string $d_soc_sec)

Creates a new emergency contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;the persons id&lt;/p&gt;
* $nmemc_name **string** - &lt;p&gt;contact name&lt;/p&gt;
* $nmemc_phone1 **string** - &lt;p&gt;contact phone&lt;/p&gt;
* $nmemc_phone2 **string** - &lt;p&gt;contact phone 2&lt;/p&gt;
* $nmemc_relation **string** - &lt;p&gt;relationship&lt;/p&gt;
* $st_addr2 **string** - &lt;p&gt;street address&lt;/p&gt;
* $add_addrs1 **string** - &lt;p&gt;bldg, ste, or apt#&lt;/p&gt;
* $add_addrs2 **string** - &lt;p&gt;additional if needed&lt;/p&gt;
* $city2 **string** - &lt;p&gt;city&lt;/p&gt;
* $state2 **string** - &lt;p&gt;state&lt;/p&gt;
* $zip2 **string** - &lt;p&gt;zip code&lt;/p&gt;
* $e_mail3 **string** - &lt;p&gt;email address&lt;/p&gt;
* $memo **string** - &lt;p&gt;contact memo field&lt;/p&gt;
* $d_soc_sec **string** - &lt;p&gt;not needed&lt;/p&gt;



### searchEmc

    array Jenzabar\Sonis\Api\Contacts::searchEmc(string $soc_sec, string $nmemc_rid)

Searches for a contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;the persons id&lt;/p&gt;
* $nmemc_rid **string** - &lt;p&gt;the contact record id if known&lt;/p&gt;



### updateEmc

    array Jenzabar\Sonis\Api\Contacts::updateEmc(string $soc_sec, string $nmemc_name, string $nmemc_phone1, string $nmemc_phone2, string $nmemc_relation, string $st_addr2, string $add_addrs1, string $add_addrs2, string $city2, string $state2, string $zip2, string $e_mail3, string $memo, string $nmemc_rid, string $d_soc_sec)

Update an emergency contact record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;the persons id&lt;/p&gt;
* $nmemc_name **string** - &lt;p&gt;contact name&lt;/p&gt;
* $nmemc_phone1 **string** - &lt;p&gt;contact phone&lt;/p&gt;
* $nmemc_phone2 **string** - &lt;p&gt;contact phone 2&lt;/p&gt;
* $nmemc_relation **string** - &lt;p&gt;relationship&lt;/p&gt;
* $st_addr2 **string** - &lt;p&gt;street address&lt;/p&gt;
* $add_addrs1 **string** - &lt;p&gt;bldg, ste, or apt#&lt;/p&gt;
* $add_addrs2 **string** - &lt;p&gt;additional if needed&lt;/p&gt;
* $city2 **string** - &lt;p&gt;city&lt;/p&gt;
* $state2 **string** - &lt;p&gt;state&lt;/p&gt;
* $zip2 **string** - &lt;p&gt;zip code&lt;/p&gt;
* $e_mail3 **string** - &lt;p&gt;email address&lt;/p&gt;
* $memo **string** - &lt;p&gt;contact memo field&lt;/p&gt;
* $nmemc_rid **string** - &lt;p&gt;the contact record id if known&lt;/p&gt;
* $d_soc_sec **string** - &lt;p&gt;not needed&lt;/p&gt;


