onlineapp
===============

Class onlineapp

Sonis API Framework

Component: student_app.cfc, oa_emc.cfc, oa_fields.cfc, oa_licenses.cfc, oa_opt_fields.cfc, oa_questions.cfc


* Class name: onlineapp
* Namespace: 







Methods
-------


### app_login

    array onlineapp::app_login(string $soc_sec, string $pin)

Logon function for the online app



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $pin **string** - &lt;p&gt;Encrypted PIN using private key&lt;/p&gt;



### create

    array onlineapp::create(string $first_name, string $last_name, string $birthdate, string $e_mail, string $pin, string $mi, string $phone, integer $citizen, string $zip, string $mod_stat)

Creates a new online app and person if new into the nmoa table



* Visibility: **public**
* This method is **static**.


#### Arguments
* $first_name **string** - &lt;p&gt;The persons first name&lt;/p&gt;
* $last_name **string** - &lt;p&gt;The persons last name&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;
* $pin **string** - &lt;p&gt;Encrypted PIN using private key&lt;/p&gt;
* $mi **string** - &lt;p&gt;The persons middle initial, 1 character&lt;/p&gt;
* $phone **string** - &lt;p&gt;The persons phone number&lt;/p&gt;
* $citizen **integer**
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;



### search

    array onlineapp::search(string $firstname, string $lastname, string $birthdate, string $e_mail)

Search for a given online applicant



* Visibility: **public**
* This method is **static**.


#### Arguments
* $firstname **string** - &lt;p&gt;The persons firstname&lt;/p&gt;
* $lastname **string** - &lt;p&gt;The persons lastname&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;



### insert_oa_questions

    array onlineapp::insert_oa_questions(string $soc_sec, string $fieldnames)

Insert a new online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $fieldnames **string**



### oa_questions_search

    array onlineapp::oa_questions_search(string $soc_sec, string $column)

Search for an online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $column **string**



### oa_questions_search_format

    array onlineapp::oa_questions_search_format(string $soc_sec, string $oa_questions_row, string $oa_questions_col, integer $oa_section_rid)

The search format



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $oa_questions_row **string**
* $oa_questions_col **string**
* $oa_section_rid **integer**


