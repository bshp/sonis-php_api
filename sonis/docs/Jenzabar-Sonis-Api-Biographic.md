Jenzabar\Sonis\Api\Biographic
===============

Class biographic

Sonis API Framework

Component: biograph.cfc, biographic.cfc


* Class name: Biographic
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'biographic'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### getName

    array Jenzabar\Sonis\Api\Biographic::getName(string $soc_sec)

Get First and Lastname



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier



### getEnrollStat

    array Jenzabar\Sonis\Api\Biographic::getEnrollStat(string $soc_sec, string $sch_yr, string $semester)

Get enrollment status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $sch_yr **string** - the school year code, like 201617
* $semester **string** - the semester, either 1,2,3,4



### nameSearch

    array Jenzabar\Sonis\Api\Biographic::nameSearch(string $soc_sec)

Returns data in name table



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier



### nameSearch2

    array Jenzabar\Sonis\Api\Biographic::nameSearch2(string $soc_sec)

Return name and email record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier



### updateCitizenship

    array Jenzabar\Sonis\Api\Biographic::updateCitizenship(string $soc_sec, string $birth_contry, string $citizen_country, string $iseas_no, string $visa_cod, string $visa_issue_date)

Inserts citizenship status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $birth_contry **string**
* $citizen_country **string** - The country code where citizenship resides
* $iseas_no **string**
* $visa_cod **string**
* $visa_issue_date **string**



### searchCitizenship

    array Jenzabar\Sonis\Api\Biographic::searchCitizenship(string $soc_sec, string $mod_stat)

Search for citizenship status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI



### saveBiographic

    array Jenzabar\Sonis\Api\Biographic::saveBiographic(string $soc_sec, string $mod_stat, string $first_name, string $last_name, string $mi, string $acadstat_cod, string $prefix, string $suffix, string $maiden, string $nickname, string $birthdate, string $gender, string $ssn, string $old_ssn, string $affiliation_cod, string $citizen, string $ethnic_cod, string $mar_cod, string $transmem, string $veteran, string $releas_inf, string $releas_dt, string $div_cod, string $dept_cod, string $camp_cod, string $level_, string $tuit_stat, string $name_mem, string $pin, string $newpin, string $deceased, string $dec_date, string $exam_id, string $online_hld, string $notpubname, string $show_email, string $show_phone, string $show_addr, string $show_wkphn, string $excl_billing, string $excl_mailing, string $other_name, string $fund_stat, string $photo, string $iped_stat, string $operator)

Saves biographic information, almost like an update/insert



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
* $first_name **string** - The persons first name
* $last_name **string** - The persons last name
* $mi **string** - The persons middle initial, 1 character
* $acadstat_cod **string**
* $prefix **string** - The persons prefix, like Mr or Mrs
* $suffix **string** - The persons suffix, like MSN or Phd
* $maiden **string** - The persons maiden name
* $nickname **string** - The persons preferred name
* $birthdate **string** - The persons birthday, such as 05/12/2001
* $gender **string** - The persons gender, M or F
* $ssn **string** - The persons ssn
* $old_ssn **string** - The persons previously recorded ssn
* $affiliation_cod **string** - The persons affiliation status code
* $citizen **string** - If the person is a citizen, true or false
* $ethnic_cod **string** - If the persons ethnicity code
* $mar_cod **string** - If the persons marrital code
* $transmem **string** - If the persons transfer memo
* $veteran **string** - true or false if a veteran
* $releas_inf **string** - true or false if information release allowed
* $releas_dt **string** - the date information release allowed
* $div_cod **string** - The person&#039;s division, in the form of the code
* $dept_cod **string** - The person&#039;s department, in the form of the code
* $camp_cod **string** - The person&#039;s campus, in the form of the code
* $level_ **string** - The person&#039;s level, in the form of the code (A-Z, 0-9)
* $tuit_stat **string** - The persons tuition status
* $name_mem **string** - Memo on bio page
* $pin **string** - Encrypted PIN using private key
* $newpin **string** - Temp newpin placeholder
* $deceased **string** - true or false if deceased
* $dec_date **string** - The persons deceased date
* $exam_id **string** - The persons unique exam id
* $online_hld **string** - true or false if has a hold
* $notpubname **string** - true or false to publish name in directory
* $show_email **string** - true or false to publish email in directory
* $show_phone **string** - true or false to publish phone in directory
* $show_addr **string** - true or false to publish address in directory
* $show_wkphn **string** - true or false to publish work phone in directory
* $excl_billing **string** - true or false to exclude from billing
* $excl_mailing **string** - true or false to exclude from all mailing
* $other_name **string** - Persons other name, AKA sort of
* $fund_stat **string** - The persons funding status
* $photo **string** - The persons photo file name, has to be the file name like name.jpg
* $iped_stat **string** - The persons iped status code
* $operator **string** - The persons unqiue ID adding or modifying the record. Please change the value



### updateDescriptive

    array Jenzabar\Sonis\Api\Biographic::updateDescriptive(string $soc_sec, string $photo, string $ssn, string $gender, string $ethnic_cod, string $birthdate, string $mod_stat, string $acadstat_cod, string $affiliation_cod, string $citizen, string $mar_cod, string $veteran, string $deceased, string $dec_date, string $dl_state, string $memo)

Updates a name record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $photo **string** - The persons photo file name, has to be the file name like name.jpg
* $ssn **string** - The persons ssn
* $gender **string** - The persons gender, M or F
* $ethnic_cod **string** - If the persons ethnicity code
* $birthdate **string** - The persons birthday, such as 05/12/2001
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
* $acadstat_cod **string**
* $affiliation_cod **string** - The persons affiliation status code
* $citizen **string** - If the person is a citizen, true or false
* $mar_cod **string** - If the persons marrital code
* $veteran **string** - true or false if a veteran
* $deceased **string** - true or false if deceased
* $dec_date **string** - The persons deceased date
* $dl_state **string** - The persons drivers license state code
* $memo **string** - Primary memo on Bio page



### createBiographic

    array Jenzabar\Sonis\Api\Biographic::createBiographic(string $mod_stat, string $first_name, string $last_name, string $mi, string $prefix, string $suffix, string $maiden, string $nickname, string $birthdate, string $gender, string $ssn, string $affiliation_cod, string $citizen, string $ethnic_cod, string $mar_cod, string $transmem, string $veteran, string $releas_inf, string $releas_dt, string $div_cod, string $dept_cod, string $camp_cod, string $level_, string $tuit_stat, string $name_mem, string $pin, string $newpin, string $deceased, string $dec_date, string $exam_id, string $online_hld, string $notpubname, string $show_email, string $show_phone, string $show_addr, string $show_wkphn, string $excl_billing, string $excl_mailing, string $fund_stat, string $photo, string $iped_stat, string $operator, string $preferred, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $phone, string $cell_phone, string $fax, string $e_mail, string $work_phone, string $county_cod, string $country, string $address_ce1, string $address_ce2, string $address_ce3, string $address_le1, string $address_ne1, string $address_de1, string $address_fe1)

Creates a new person record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $mod_stat **string** - The status of the person to be created
* $first_name **string** - The persons first name
* $last_name **string** - The persons last name
* $mi **string** - The persons middle initial, 1 characteR
* $prefix **string** - The persons prefix, like Mr or Mrs
* $suffix **string** - The persons suffix, like MSN or Phd
* $maiden **string** - The persons maiden name
* $nickname **string** - The persons preferred name
* $birthdate **string** - The persons birthday like 05/12/2001
* $gender **string** - The persons gender, M or F
* $ssn **string** - The persons ssn
* $affiliation_cod **string** - The persons affiliation status code
* $citizen **string** - If the person is a citizen, true or false
* $ethnic_cod **string** - If the persons ethnicity code
* $mar_cod **string** - If the persons marrital code
* $transmem **string** - If the persons transfer memo
* $veteran **string** - true or false if a veteran
* $releas_inf **string** - true or false if information release allowed
* $releas_dt **string** - the date information release allowed
* $div_cod **string** - The person&#039;s division, in the form of the code
* $dept_cod **string** - The person&#039;s department, in the form of the code
* $camp_cod **string** - The person&#039;s campus, in the form of the code
* $level_ **string** - The person&#039;s level, in the form of the code (A-Z, 0-9)
* $tuit_stat **string** - The persons tuition status
* $name_mem **string** - Memo on bio page
* $pin **string** - Encrypted PIN using private key
* $newpin **string** - Temp newpin placeholder
* $deceased **string** - true or false if deceased
* $dec_date **string** - The persons deceased date
* $exam_id **string** - The persons unique exam id
* $online_hld **string** - true or false if has a hold
* $notpubname **string** - true or false to publish name in directory
* $show_email **string** - true or false to publich email in directory
* $show_phone **string** - true or false to publich email in directory
* $show_addr **string** - true or false to publish phone in directory
* $show_wkphn **string** - true or false to publish work phone in directory
* $excl_billing **string** - true or false to exclude from billing
* $excl_mailing **string** - true or false to exclude from all mailing
* $fund_stat **string** - The persons funding status
* $photo **string** - The persons photo file name, has to be the file name like name.jpg
* $iped_stat **string** - The persons iped status code
* $operator **string** - The persons unqiue ID adding or modifying the record. Please change the value
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
* $address_ce1 **string** - Custom address field
* $address_ce2 **string** - Custom address field
* $address_ce3 **string** - Custom address field
* $address_le1 **string** - Custom address field
* $address_ne1 **string** - Custom address field
* $address_de1 **string** - Custom address field
* $address_fe1 **string** - Custom address field



### updateName

    array Jenzabar\Sonis\Api\Biographic::updateName(string $soc_sec, string $mod_stat, string $first_name, string $last_name, string $mi, string $prefix, string $suffix, string $maiden, string $nickname, string $other_name, string $acadstat_cod)

Updates a name record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
* $first_name **string** - The persons first name
* $last_name **string** - The persons last name
* $mi **string** - The persons middle initial, 1 character
* $prefix **string** - The persons prefix, like Mr or Mrs
* $suffix **string** - The persons suffix, like MSN or Phd
* $maiden **string** - The persons maiden name
* $nickname **string** - The persons preferred name
* $other_name **string** - Persons other name, AKA sort of
* $acadstat_cod **string**


