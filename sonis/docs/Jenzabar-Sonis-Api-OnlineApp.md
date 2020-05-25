Jenzabar\Sonis\Api\OnlineApp
===============

Class OnlineApp

Sonis API Framework

Component: student_app.cfc, oa_emc.cfc, oa_fields.cfc, oa_licenses.cfc, oa_opt_fields.cfc, oa_questions.cfc


* Class name: OnlineApp
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'student_app'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### appLogin

    array Jenzabar\Sonis\Api\OnlineApp::appLogin(string $soc_sec, string $pin)

Logon function for the online app



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $pin **string** - Encrypted PIN using private key



### createApp

    array Jenzabar\Sonis\Api\OnlineApp::createApp(string $first_name, string $last_name, string $birthdate, string $e_mail, string $pin, string $mi, string $phone, string $zip, string $mod_stat, integer $citizen)

Creates a new online app and person if new into the nmoa table



* Visibility: **public**
* This method is **static**.


#### Arguments
* $first_name **string** - The persons first name
* $last_name **string** - The persons last name
* $birthdate **string** - The persons birthday, such as 05/12/2001
* $e_mail **string** - The primary email address for the record type
* $pin **string** - Encrypted PIN using private key
* $mi **string** - The persons middle initial, 1 character
* $phone **string** - The persons phone number
* $zip **string** - The persons zip code
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
* $citizen **integer**



### searchApp

    array Jenzabar\Sonis\Api\OnlineApp::searchApp(string $firstname, string $lastname, string $birthdate, string $e_mail)

Search for a given online applicant



* Visibility: **public**
* This method is **static**.


#### Arguments
* $firstname **string** - The persons firstname
* $lastname **string** - The persons lastname
* $birthdate **string** - The persons birthday, such as 05/12/2001
* $e_mail **string** - The primary email address for the record type



### insertOAQuestions

    array Jenzabar\Sonis\Api\OnlineApp::insertOAQuestions(string $soc_sec, string $fieldnames)

Insert a new online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $fieldnames **string**



### searchOAQuestions

    array Jenzabar\Sonis\Api\OnlineApp::searchOAQuestions(string $soc_sec, string $column)

Search for an online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $column **string**



### searchOAQuestionsFormat

    array Jenzabar\Sonis\Api\OnlineApp::searchOAQuestionsFormat(string $soc_sec, string $oa_questions_row, string $oa_questions_col, string $oa_section_rid)

The search format



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $oa_questions_row **string**
* $oa_questions_col **string**
* $oa_section_rid **string**


