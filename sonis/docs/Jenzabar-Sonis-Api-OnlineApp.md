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
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $pin **string** - &lt;p&gt;Encrypted PIN using private key&lt;/p&gt;



### createApp

    array Jenzabar\Sonis\Api\OnlineApp::createApp(string $first_name, string $last_name, string $birthdate, string $e_mail, string $pin, string $mi, string $phone, string $zip, string $mod_stat, integer $citizen)

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
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $citizen **integer**



### searchApp

    array Jenzabar\Sonis\Api\OnlineApp::searchApp(string $firstname, string $lastname, string $birthdate, string $e_mail)

Search for a given online applicant



* Visibility: **public**
* This method is **static**.


#### Arguments
* $firstname **string** - &lt;p&gt;The persons firstname&lt;/p&gt;
* $lastname **string** - &lt;p&gt;The persons lastname&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;



### insertOAQuestions

    array Jenzabar\Sonis\Api\OnlineApp::insertOAQuestions(string $soc_sec, string $fieldnames)

Insert a new online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $fieldnames **string**



### searchOAQuestions

    array Jenzabar\Sonis\Api\OnlineApp::searchOAQuestions(string $soc_sec, string $column)

Search for an online app question



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $column **string**



### searchOAQuestionsFormat

    array Jenzabar\Sonis\Api\OnlineApp::searchOAQuestionsFormat(string $soc_sec, string $oa_questions_row, string $oa_questions_col, integer $oa_section_rid)

The search format



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $oa_questions_row **string**
* $oa_questions_col **string**
* $oa_section_rid **integer**


