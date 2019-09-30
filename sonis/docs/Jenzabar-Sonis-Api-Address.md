Jenzabar\Sonis\Api\Address
===============

Class address

Sonis API Framework

Component: address.cfc


* Class name: Address
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'address'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### addAddress

    array Jenzabar\Sonis\Api\Address::addAddress(string $soc_sec, string $preferred, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $phone, string $cell_phone, string $work_phone, string $county_cod, string $country, string $e_mail)

Add to an existing user record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $preferred **string** - &lt;p&gt;The persons preferred address, yes or no&lt;/p&gt;
* $st_addr **string** - &lt;p&gt;The persons street address&lt;/p&gt;
* $add_addr **string** - &lt;p&gt;The persons street address number, such as APT 101 or #101&lt;/p&gt;
* $add_add2 **string** - &lt;p&gt;Don&#039;t think we have ever used this one&lt;/p&gt;
* $city **string** - &lt;p&gt;The persons city&lt;/p&gt;
* $state **string** - &lt;p&gt;The persons state 2 character code such as TX for Texas&lt;/p&gt;
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $phone **string** - &lt;p&gt;The persons phone number&lt;/p&gt;
* $cell_phone **string** - &lt;p&gt;The persons cell phone number&lt;/p&gt;
* $work_phone **string** - &lt;p&gt;The persons work phone number&lt;/p&gt;
* $county_cod **string** - &lt;p&gt;The 2 character code for county such as BX for Bexar&lt;/p&gt;
* $country **string** - &lt;p&gt;The 2 character code for country like US&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;



### addressSearch

    array Jenzabar\Sonis\Api\Address::addressSearch(string $soc_sec, string $preferred)

Search for an address



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $preferred **string** - &lt;p&gt;The persons preferred address, yes or no&lt;/p&gt;



### insertAddress

    array Jenzabar\Sonis\Api\Address::insertAddress(string $soc_sec, string $preferred, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $phone, string $cell_phone, string $fax, string $e_mail, string $work_phone, string $county_cod, string $country, string $operator)

Insert a new address record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $preferred **string** - &lt;p&gt;The persons preferred address, yes or no&lt;/p&gt;
* $st_addr **string** - &lt;p&gt;The persons street address&lt;/p&gt;
* $add_addr **string** - &lt;p&gt;The persons street address number, such as APT 101 or #101&lt;/p&gt;
* $add_add2 **string** - &lt;p&gt;Don&#039;t think we have ever used this one&lt;/p&gt;
* $city **string** - &lt;p&gt;The persons city&lt;/p&gt;
* $state **string** - &lt;p&gt;The persons state 2 character code such as TX for Texas&lt;/p&gt;
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $phone **string** - &lt;p&gt;The persons phone number&lt;/p&gt;
* $cell_phone **string** - &lt;p&gt;The persons cell phone number&lt;/p&gt;
* $fax **string** - &lt;p&gt;The objects fax number&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;
* $work_phone **string** - &lt;p&gt;The persons work phone number&lt;/p&gt;
* $county_cod **string** - &lt;p&gt;The 2 character code for county such as BX for Bexar&lt;/p&gt;
* $country **string** - &lt;p&gt;The 2 character code for country like US&lt;/p&gt;
* $operator **string** - &lt;p&gt;The persons unqiue ID adding or modifying the record. Please change the value&lt;/p&gt;



### updateAddress

    array Jenzabar\Sonis\Api\Address::updateAddress(string $soc_sec, string $add_add2, string $add_addr, string $cell_phone, string $city, string $country, string $county_cod, string $e_mail, string $fax, string $phone, string $st_addr, string $state, string $work_phone, string $zip, string $cell_provider, string $text_me)

Update an existing address record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $add_add2 **string** - &lt;p&gt;Don&#039;t think we have ever used this one&lt;/p&gt;
* $add_addr **string** - &lt;p&gt;The persons street address number, such as APT 101 or #101&lt;/p&gt;
* $cell_phone **string** - &lt;p&gt;The persons cell phone number&lt;/p&gt;
* $city **string** - &lt;p&gt;The persons city&lt;/p&gt;
* $country **string** - &lt;p&gt;The 2 character code for country like US&lt;/p&gt;
* $county_cod **string** - &lt;p&gt;The 2 character code for county such as BX for Bexar&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;
* $fax **string** - &lt;p&gt;The objects fax number&lt;/p&gt;
* $phone **string** - &lt;p&gt;The persons phone number&lt;/p&gt;
* $st_addr **string** - &lt;p&gt;The persons street address&lt;/p&gt;
* $state **string** - &lt;p&gt;The persons state 2 character code such as TX for Texas&lt;/p&gt;
* $work_phone **string** - &lt;p&gt;The persons work phone number&lt;/p&gt;
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $cell_provider **string**
* $text_me **string**


