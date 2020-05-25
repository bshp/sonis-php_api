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
* $soc_sec **string** - The objects unique identifier
* $preferred **string** - The persons preferred address, yes or no
* $st_addr **string** - The persons street address
* $add_addr **string** - The persons street address number, such as APT 101 or #101
* $add_add2 **string** - Don&#039;t think we have ever used this one
* $city **string** - The persons city
* $state **string** - The persons state 2 character code such as TX for Texas
* $zip **string** - The persons zip code
* $phone **string** - The persons phone number
* $cell_phone **string** - The persons cell phone number
* $work_phone **string** - The persons work phone number
* $county_cod **string** - The 2 character code for county such as BX for Bexar
* $country **string** - The 2 character code for country like US
* $e_mail **string** - The primary email address for the record type



### addressSearch

    array Jenzabar\Sonis\Api\Address::addressSearch(string $soc_sec, string $preferred)

Search for an address



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $preferred **string** - The persons preferred address, yes or no



### insertAddress

    array Jenzabar\Sonis\Api\Address::insertAddress(string $soc_sec, string $preferred, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $phone, string $cell_phone, string $fax, string $e_mail, string $work_phone, string $county_cod, string $country, string $operator)

Insert a new address record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $preferred **string** - The persons preferred address, yes or no
* $st_addr **string** - The persons street address
* $add_addr **string** - The persons street address number, such as APT 101 or #101
* $add_add2 **string** - Don&#039;t think we have ever used this one
* $city **string** - The persons city
* $state **string** - The persons state 2 character code such as TX for Texas
* $zip **string** - The persons zip code
* $phone **string** - The persons phone number
* $cell_phone **string** - The persons cell phone number
* $fax **string** - The objects fax number
* $e_mail **string** - The primary email address for the record type
* $work_phone **string** - The persons work phone number
* $county_cod **string** - The 2 character code for county such as BX for Bexar
* $country **string** - The 2 character code for country like US
* $operator **string** - The persons unqiue ID adding or modifying the record. Please change the value



### updateAddress

    array Jenzabar\Sonis\Api\Address::updateAddress(string $soc_sec, string $add_add2, string $add_addr, string $cell_phone, string $city, string $country, string $county_cod, string $e_mail, string $fax, string $phone, string $st_addr, string $state, string $work_phone, string $zip, string $cell_provider, string $text_me)

Update an existing address record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $add_add2 **string** - Don&#039;t think we have ever used this one
* $add_addr **string** - The persons street address number, such as APT 101 or #101
* $cell_phone **string** - The persons cell phone number
* $city **string** - The persons city
* $country **string** - The 2 character code for country like US
* $county_cod **string** - The 2 character code for county such as BX for Bexar
* $e_mail **string** - The primary email address for the record type
* $fax **string** - The objects fax number
* $phone **string** - The persons phone number
* $st_addr **string** - The persons street address
* $state **string** - The persons state 2 character code such as TX for Texas
* $work_phone **string** - The persons work phone number
* $zip **string** - The persons zip code
* $cell_provider **string**
* $text_me **string**


