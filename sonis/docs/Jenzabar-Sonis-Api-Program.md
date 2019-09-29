Jenzabar\Sonis\Api\Program
===============

Class program

Sonis API Framework

Component: program.cfc

Usage: Program related, mainly for applicants


* Class name: Program
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'program'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### appProgramSearch

    array Jenzabar\Sonis\Api\Program::appProgramSearch(string $soc_sec)

Search for a program



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### appComplete

    array Jenzabar\Sonis\Api\Program::appComplete(string $soc_sec)

Complete an application



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### appProgramDelete

    array Jenzabar\Sonis\Api\Program::appProgramDelete($app_rid)

Delete a program record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $app_rid **mixed**



### insertAppProgram

    array Jenzabar\Sonis\Api\Program::insertAppProgram(string $soc_sec, string $camp_cod, string $entry_date, string $prg_cod, string $div_cod, string $app_date, string $ack_date, string $trans_date, string $is_applicant, string $preferred, string $incomplete, string $app_rid, string $ref_source, string $fee_rec, string $apfee_dt, string $prior_app, string $app_yr, string $acknowledg, string $sms_trans, string $matric_fee, string $degree_ap, string $degree_ac, string $major_ap, string $major_ac, string $time_maint, string $date_maint, string $trans_done, string $operator, string $d_soc_sec)

Insert a program record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The person&#039;s campus, in the form of the code&lt;/p&gt;
* $entry_date **string**
* $prg_cod **string** - &lt;p&gt;Program code&lt;/p&gt;
* $div_cod **string** - &lt;p&gt;The person&#039;s division, in the form of the code&lt;/p&gt;
* $app_date **string**
* $ack_date **string**
* $trans_date **string**
* $is_applicant **string**
* $preferred **string** - &lt;p&gt;The persons preferred address, yes or no&lt;/p&gt;
* $incomplete **string**
* $app_rid **string**
* $ref_source **string**
* $fee_rec **string**
* $apfee_dt **string**
* $prior_app **string**
* $app_yr **string**
* $acknowledg **string**
* $sms_trans **string**
* $matric_fee **string**
* $degree_ap **string** - &lt;p&gt;Degree applied&lt;/p&gt;
* $degree_ac **string** - &lt;p&gt;Degree accepted&lt;/p&gt;
* $major_ap **string**
* $major_ac **string**
* $time_maint **string**
* $date_maint **string**
* $trans_done **string**
* $operator **string** - &lt;p&gt;The persons unqiue ID adding or modifying the record. Please change the value&lt;/p&gt;
* $d_soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### preventRepeats

    array Jenzabar\Sonis\Api\Program::preventRepeats(string $soc_sec, string $prg_cod)

Prevent repeats update



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $prg_cod **string** - &lt;p&gt;Program code&lt;/p&gt;



### programSearch

    array Jenzabar\Sonis\Api\Program::programSearch(string $soc_sec)

Search for a program



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;


