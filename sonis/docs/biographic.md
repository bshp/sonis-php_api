biographic
===============

Class biographic

Sonis API Framework

Component: biograph.cfc, biographic.cfc


* Class name: biographic
* Namespace: 







Methods
-------


### get_comp

    mixed biographic::get_comp()





* Visibility: **private**




### getName

    array biographic::getName(string $soc_sec)

Get First and Lastname



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### get_enrollstat

    array biographic::get_enrollstat(string $soc_sec, string $sch_yr, string $semester)

Get enrollment status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $sch_yr **string** - &lt;p&gt;the school year code, like 201617&lt;/p&gt;
* $semester **string** - &lt;p&gt;the semester, either 1,2,3,4&lt;/p&gt;



### namesearch

    array biographic::namesearch(string $soc_sec)

Returns data in name table



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### namesearch2

    array biographic::namesearch2(string $soc_sec)

Return name and email record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### nmcit

    array biographic::nmcit(string $soc_sec, string $birth_contry, string $citizen_country, string $iseas_no, string $visa_cod, string $visa_issue_date)

Inserts citizenship status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $birth_contry **string**
* $citizen_country **string** - &lt;p&gt;The country code where citizenship resides&lt;/p&gt;
* $iseas_no **string**
* $visa_cod **string**
* $visa_issue_date **string**



### nmcitsearch

    array biographic::nmcitsearch(string $soc_sec, string $mod_stat)

Search for citizenship status



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;



### save_biographic

    array biographic::save_biographic(string $soc_sec, string $mod_stat, string $first_name, string $last_name, string $mi, string $acadstat_cod, string $prefix, string $suffix, string $maiden, string $nickname, string $birthdate, string $gender, string $ssn, string $old_ssn, string $affiliation_cod, string $citizen, string $ethnic_cod, string $mar_cod, string $transmem, string $veteran, string $releas_inf, string $releas_dt, string $div_cod, string $dept_cod, string $camp_cod, string $level_, string $tuit_stat, string $name_mem, string $pin, string $newpin, string $deceased, string $dec_date, string $exam_id, string $online_hld, string $notpubname, string $show_email, string $show_phone, string $show_addr, string $show_wkphn, string $excl_billing, string $excl_mailing, string $other_name, string $fund_stat, string $photo, string $iped_stat, string $operator)

Saves biographic information, almost like an update/insert



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $first_name **string** - &lt;p&gt;The persons first name&lt;/p&gt;
* $last_name **string** - &lt;p&gt;The persons last name&lt;/p&gt;
* $mi **string** - &lt;p&gt;The persons middle initial, 1 character&lt;/p&gt;
* $acadstat_cod **string**
* $prefix **string** - &lt;p&gt;The persons prefix, like Mr or Mrs&lt;/p&gt;
* $suffix **string** - &lt;p&gt;The persons suffix, like MSN or Phd&lt;/p&gt;
* $maiden **string** - &lt;p&gt;The persons maiden name&lt;/p&gt;
* $nickname **string** - &lt;p&gt;The persons preferred name&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $gender **string** - &lt;p&gt;The persons gender, M or F&lt;/p&gt;
* $ssn **string** - &lt;p&gt;The persons ssn&lt;/p&gt;
* $old_ssn **string** - &lt;p&gt;The persons previously recorded ssn&lt;/p&gt;
* $affiliation_cod **string** - &lt;p&gt;The persons affiliation status code&lt;/p&gt;
* $citizen **string** - &lt;p&gt;If the person is a citizen, true or false&lt;/p&gt;
* $ethnic_cod **string** - &lt;p&gt;If the persons ethnicity code&lt;/p&gt;
* $mar_cod **string** - &lt;p&gt;If the persons marrital code&lt;/p&gt;
* $transmem **string** - &lt;p&gt;If the persons transfer memo&lt;/p&gt;
* $veteran **string** - &lt;p&gt;true or false if a veteran&lt;/p&gt;
* $releas_inf **string** - &lt;p&gt;true or false if information release allowed&lt;/p&gt;
* $releas_dt **string** - &lt;p&gt;the date information release allowed&lt;/p&gt;
* $div_cod **string** - &lt;p&gt;The person&#039;s division, in the form of the code&lt;/p&gt;
* $dept_cod **string** - &lt;p&gt;The person&#039;s department, in the form of the code&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The person&#039;s campus, in the form of the code&lt;/p&gt;
* $level_ **string** - &lt;p&gt;The person&#039;s level, in the form of the code (A-Z, 0-9)&lt;/p&gt;
* $tuit_stat **string** - &lt;p&gt;The persons tuition status&lt;/p&gt;
* $name_mem **string** - &lt;p&gt;Memo on bio page&lt;/p&gt;
* $pin **string** - &lt;p&gt;Encrypted PIN using private key&lt;/p&gt;
* $newpin **string** - &lt;p&gt;Temp newpin placeholder&lt;/p&gt;
* $deceased **string** - &lt;p&gt;true or false if deceased&lt;/p&gt;
* $dec_date **string** - &lt;p&gt;The persons deceased date&lt;/p&gt;
* $exam_id **string** - &lt;p&gt;The persons unique exam id&lt;/p&gt;
* $online_hld **string** - &lt;p&gt;true or false if has a hold&lt;/p&gt;
* $notpubname **string** - &lt;p&gt;true or false to publish name in directory&lt;/p&gt;
* $show_email **string** - &lt;p&gt;true or false to publish email in directory&lt;/p&gt;
* $show_phone **string** - &lt;p&gt;true or false to publish phone in directory&lt;/p&gt;
* $show_addr **string** - &lt;p&gt;true or false to publish address in directory&lt;/p&gt;
* $show_wkphn **string** - &lt;p&gt;true or false to publish work phone in directory&lt;/p&gt;
* $excl_billing **string** - &lt;p&gt;true or false to exclude from billing&lt;/p&gt;
* $excl_mailing **string** - &lt;p&gt;true or false to exclude from all mailing&lt;/p&gt;
* $other_name **string** - &lt;p&gt;Persons other name, AKA sort of&lt;/p&gt;
* $fund_stat **string** - &lt;p&gt;The persons funding status&lt;/p&gt;
* $photo **string** - &lt;p&gt;The persons photo file name, has to be the file name like name.jpg&lt;/p&gt;
* $iped_stat **string** - &lt;p&gt;The persons iped status code&lt;/p&gt;
* $operator **string** - &lt;p&gt;The persons unqiue ID adding or modifying the record. Please change the value&lt;/p&gt;



### update_descriptive

    array biographic::update_descriptive(string $soc_sec, string $photo, string $ssn, string $gender, string $ethnic_cod, string $birthdate, string $mod_stat, string $acadstat_cod, string $affiliation_cod, string $citizen, string $mar_cod, string $veteran, string $deceased, string $dec_date, string $dl_state, string $memo)

Updates a name record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $photo **string** - &lt;p&gt;The persons photo file name, has to be the file name like name.jpg&lt;/p&gt;
* $ssn **string** - &lt;p&gt;The persons ssn&lt;/p&gt;
* $gender **string** - &lt;p&gt;The persons gender, M or F&lt;/p&gt;
* $ethnic_cod **string** - &lt;p&gt;If the persons ethnicity code&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $acadstat_cod **string**
* $affiliation_cod **string** - &lt;p&gt;The persons affiliation status code&lt;/p&gt;
* $citizen **string** - &lt;p&gt;If the person is a citizen, true or false&lt;/p&gt;
* $mar_cod **string** - &lt;p&gt;If the persons marrital code&lt;/p&gt;
* $veteran **string** - &lt;p&gt;true or false if a veteran&lt;/p&gt;
* $deceased **string** - &lt;p&gt;true or false if deceased&lt;/p&gt;
* $dec_date **string** - &lt;p&gt;The persons deceased date&lt;/p&gt;
* $dl_state **string** - &lt;p&gt;The persons drivers license state code&lt;/p&gt;
* $memo **string** - &lt;p&gt;Primary memo on Bio page&lt;/p&gt;



### create_biographic

    array biographic::create_biographic(string $first_name, string $last_name, string $birthdate, string $preferred, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $phone, string $cell_phone, string $fax, string $e_mail, string $work_phone, string $county_cod, string $country, string $mod_stat, string $mi, string $prefix, string $suffix, string $maiden, string $nickname, string $gender, string $ssn, string $affiliation_cod, string $citizen, string $ethnic_cod, string $mar_cod, string $transmem, string $veteran, string $releas_inf, string $releas_dt, string $div_cod, string $dept_cod, string $camp_cod, string $level_, string $tuit_stat, string $name_mem, string $pin, string $newpin, string $deceased, string $dec_date, string $exam_id, string $online_hld, string $notpubname, string $show_email, string $show_phone, string $show_addr, string $show_wkphn, string $excl_billing, string $excl_mailing, string $fund_stat, string $photo, string $iped_stat, string $operator, string $address_ce1, string $address_ce2, string $address_ce3, string $address_le1, string $address_ne1, string $address_de1, string $address_fe1)

Creates a new person record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $first_name **string** - &lt;p&gt;The persons first name&lt;/p&gt;
* $last_name **string** - &lt;p&gt;The persons last name&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday like 05/12/2001&lt;/p&gt;
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
* $county_cod **string** - &lt;p&gt;The 2 character code for county such as BX for Bexar. It is best to use a dropbox for these&lt;/p&gt;
* $country **string** - &lt;p&gt;The 2 character code for country like US&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $mi **string** - &lt;p&gt;The persons middle initial, 1 character&lt;/p&gt;
* $prefix **string** - &lt;p&gt;The persons prefix, like Mr or Mrs&lt;/p&gt;
* $suffix **string** - &lt;p&gt;The persons suffix, like MSN or Phd&lt;/p&gt;
* $maiden **string** - &lt;p&gt;The persons maiden name&lt;/p&gt;
* $nickname **string** - &lt;p&gt;The persons preferred name&lt;/p&gt;
* $gender **string** - &lt;p&gt;The persons gender, M or F&lt;/p&gt;
* $ssn **string** - &lt;p&gt;The persons ssn&lt;/p&gt;
* $affiliation_cod **string** - &lt;p&gt;The persons affiliation status code&lt;/p&gt;
* $citizen **string** - &lt;p&gt;If the person is a citizen, true or false&lt;/p&gt;
* $ethnic_cod **string** - &lt;p&gt;If the persons ethnicity code&lt;/p&gt;
* $mar_cod **string** - &lt;p&gt;If the persons marrital code&lt;/p&gt;
* $transmem **string** - &lt;p&gt;If the persons transfer memo&lt;/p&gt;
* $veteran **string** - &lt;p&gt;true or false if a veteran&lt;/p&gt;
* $releas_inf **string** - &lt;p&gt;true or false if information release allowed&lt;/p&gt;
* $releas_dt **string** - &lt;p&gt;the date information release allowed&lt;/p&gt;
* $div_cod **string** - &lt;p&gt;The person&#039;s division, in the form of the code&lt;/p&gt;
* $dept_cod **string** - &lt;p&gt;The person&#039;s department, in the form of the code&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The person&#039;s campus, in the form of the code&lt;/p&gt;
* $level_ **string** - &lt;p&gt;The person&#039;s level, in the form of the code (A-Z, 0-9)&lt;/p&gt;
* $tuit_stat **string** - &lt;p&gt;The persons tuition status&lt;/p&gt;
* $name_mem **string** - &lt;p&gt;Memo on bio page&lt;/p&gt;
* $pin **string** - &lt;p&gt;Encrypted PIN using private key&lt;/p&gt;
* $newpin **string** - &lt;p&gt;Temp newpin placeholder&lt;/p&gt;
* $deceased **string** - &lt;p&gt;true or false if deceased&lt;/p&gt;
* $dec_date **string** - &lt;p&gt;The persons deceased date&lt;/p&gt;
* $exam_id **string** - &lt;p&gt;The persons unique exam id&lt;/p&gt;
* $online_hld **string** - &lt;p&gt;true or false if has a hold&lt;/p&gt;
* $notpubname **string** - &lt;p&gt;true or false to publish name in directory&lt;/p&gt;
* $show_email **string** - &lt;p&gt;true or false to publich email in directory&lt;/p&gt;
* $show_phone **string** - &lt;p&gt;true or false to publich email in directory&lt;/p&gt;
* $show_addr **string** - &lt;p&gt;true or false to publish phone in directory&lt;/p&gt;
* $show_wkphn **string** - &lt;p&gt;true or false to publish work phone in directory&lt;/p&gt;
* $excl_billing **string** - &lt;p&gt;true or false to exclude from billing&lt;/p&gt;
* $excl_mailing **string** - &lt;p&gt;true or false to exclude from all mailing&lt;/p&gt;
* $fund_stat **string** - &lt;p&gt;The persons funding status&lt;/p&gt;
* $photo **string** - &lt;p&gt;The persons photo file name, has to be the file name like name.jpg&lt;/p&gt;
* $iped_stat **string** - &lt;p&gt;The persons iped status code&lt;/p&gt;
* $operator **string** - &lt;p&gt;The persons unqiue ID adding or modifying the record. Please change the value&lt;/p&gt;
* $address_ce1 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_ce2 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_ce3 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_le1 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_ne1 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_de1 **string** - &lt;p&gt;Custom address field&lt;/p&gt;
* $address_fe1 **string** - &lt;p&gt;Custom address field&lt;/p&gt;



### update_name

    array biographic::update_name(string $soc_sec, string $mod_stat, string $first_name, string $last_name, string $mi, string $prefix, string $suffix, string $maiden, string $nickname, string $other_name, string $acadstat_cod)

Updates a name record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $first_name **string** - &lt;p&gt;The persons first name&lt;/p&gt;
* $last_name **string** - &lt;p&gt;The persons last name&lt;/p&gt;
* $mi **string** - &lt;p&gt;The persons middle initial, 1 character&lt;/p&gt;
* $prefix **string** - &lt;p&gt;The persons prefix, like Mr or Mrs&lt;/p&gt;
* $suffix **string** - &lt;p&gt;The persons suffix, like MSN or Phd&lt;/p&gt;
* $maiden **string** - &lt;p&gt;The persons maiden name&lt;/p&gt;
* $nickname **string** - &lt;p&gt;The persons preferred name&lt;/p&gt;
* $other_name **string** - &lt;p&gt;Persons other name, AKA sort of&lt;/p&gt;
* $acadstat_cod **string**


