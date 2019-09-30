Jenzabar\Sonis\Api\Education
===============

Class education

Sonis API Framework

Component: education.cfc


* Class name: Education
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'education'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### deleteEducation

    array Jenzabar\Sonis\Api\Education::deleteEducation(string $soc_sec, string $edu_rid)

Deletes an education record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $edu_rid **string** - &lt;p&gt;Edu record id&lt;/p&gt;



### eduSearch

    array Jenzabar\Sonis\Api\Education::eduSearch(string $soc_sec, string $edu_rid)

Search for an education record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $edu_rid **string** - &lt;p&gt;Edu record id&lt;/p&gt;



### insertDefaultEducation

    array Jenzabar\Sonis\Api\Education::insertDefaultEducation(string $soc_sec, string $cohort_cod)

Inserts a new edu record and sets as default



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $cohort_cod **string** - &lt;p&gt;Cohort code&lt;/p&gt;



### insertEducation

    array Jenzabar\Sonis\Api\Education::insertEducation(string $soc_sec, string $educmem, string $inst_cod, string $mod_stat, string $degree, string $enter_date, string $leav_date, string $grad_mo, string $grad_year, string $graduated)

Inserts a new edu record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $educmem **string** - &lt;p&gt;Educational record memo&lt;/p&gt;
* $inst_cod **string** - &lt;p&gt;Institutional code&lt;/p&gt;
* $mod_stat **string** - &lt;p&gt;The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI&lt;/p&gt;
* $degree **string** - &lt;p&gt;Degree for the given educational record&lt;/p&gt;
* $enter_date **string** - &lt;p&gt;Educational record entry date&lt;/p&gt;
* $leav_date **string** - &lt;p&gt;Educational record leaving date&lt;/p&gt;
* $grad_mo **string** - &lt;p&gt;Educational record gradfuation month&lt;/p&gt;
* $grad_year **string** - &lt;p&gt;Educational record gradfuation year&lt;/p&gt;
* $graduated **string** - &lt;p&gt;Educational record graduated, true or false&lt;/p&gt;



### insertInstitution

    array Jenzabar\Sonis\Api\Education::insertInstitution(string $soc_sec, string $inst_mem, string $edu_rid)

Inserts a new institution



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $inst_mem **string** - &lt;p&gt;Institutional memo&lt;/p&gt;
* $edu_rid **string** - &lt;p&gt;Edu record id&lt;/p&gt;



### searchInstitution

    array Jenzabar\Sonis\Api\Education::searchInstitution(string $inst_state, string $inst_city, string $inst_txt, string $insttypcod, string $inst_cntry)

Search for institution



* Visibility: **public**
* This method is **static**.


#### Arguments
* $inst_state **string** - &lt;p&gt;Institutional state&lt;/p&gt;
* $inst_city **string** - &lt;p&gt;Institutional city&lt;/p&gt;
* $inst_txt **string** - &lt;p&gt;Institutional description&lt;/p&gt;
* $insttypcod **string** - &lt;p&gt;Institutional type code&lt;/p&gt;
* $inst_cntry **string** - &lt;p&gt;Institutional country&lt;/p&gt;



### updateEducation

    array Jenzabar\Sonis\Api\Education::updateEducation(string $soc_sec, string $edu_rid, string $eduinsttyp, string $degree, string $credits, string $qlty_pnts, string $cqpa, string $rankstud, string $rankclass, string $grad_date, string $enter_date, string $leav_date, string $date_rec, string $matric_dt, string $trans_rec, string $prog_desc, string $educmem, string $enr_age, string $orig_grad, string $grad_mo, string $grad_year, string $graduated, string $grad_honors, string $nmedu_ce1, string $nmedu_le1, string $nmedu_ne1, string $inst_txt, string $cohort_cod, string $degree_sought, string $prg_sought, string $ant_grad_date, string $gpa_creds, string $transfered, string $grad_stud, string $OA_inprocess, string $diploma, string $employ_waiver_type, string $cur_cod, string $prev_instname, string $grad_age, string $degreeclass_cod, string $nmedu_transmem, string $employ_waiver, string $override)

Update a given education record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $edu_rid **string** - &lt;p&gt;Edu record id&lt;/p&gt;
* $eduinsttyp **string** - &lt;p&gt;Institutional type&lt;/p&gt;
* $degree **string** - &lt;p&gt;Degree for the given educational record&lt;/p&gt;
* $credits **string** - &lt;p&gt;Credits&lt;/p&gt;
* $qlty_pnts **string** - &lt;p&gt;Quality point&lt;/p&gt;
* $cqpa **string**
* $rankstud **string** - &lt;p&gt;Student rank&lt;/p&gt;
* $rankclass **string** - &lt;p&gt;Class rank&lt;/p&gt;
* $grad_date **string** - &lt;p&gt;Graduation date&lt;/p&gt;
* $enter_date **string** - &lt;p&gt;Educational record entry date&lt;/p&gt;
* $leav_date **string** - &lt;p&gt;Educational record leaving date&lt;/p&gt;
* $date_rec **string** - &lt;p&gt;Date received&lt;/p&gt;
* $matric_dt **string** - &lt;p&gt;Matriculation date&lt;/p&gt;
* $trans_rec **string** - &lt;p&gt;Transcripts received&lt;/p&gt;
* $prog_desc **string** - &lt;p&gt;Program description&lt;/p&gt;
* $educmem **string** - &lt;p&gt;Educational record memo&lt;/p&gt;
* $enr_age **string** - &lt;p&gt;Enrollment age&lt;/p&gt;
* $orig_grad **string** - &lt;p&gt;Original graduation date&lt;/p&gt;
* $grad_mo **string** - &lt;p&gt;Educational record gradfuation month&lt;/p&gt;
* $grad_year **string** - &lt;p&gt;Educational record gradfuation year&lt;/p&gt;
* $graduated **string** - &lt;p&gt;Educational record graduated, true or false&lt;/p&gt;
* $grad_honors **string** - &lt;p&gt;Graduated with honors&lt;/p&gt;
* $nmedu_ce1 **string** - &lt;p&gt;Custom Field 1&lt;/p&gt;
* $nmedu_le1 **string** - &lt;p&gt;Custom Field 2&lt;/p&gt;
* $nmedu_ne1 **string** - &lt;p&gt;Custom Field 3&lt;/p&gt;
* $inst_txt **string** - &lt;p&gt;Institutional description&lt;/p&gt;
* $cohort_cod **string** - &lt;p&gt;Cohort code&lt;/p&gt;
* $degree_sought **string** - &lt;p&gt;Degree sought&lt;/p&gt;
* $prg_sought **string** - &lt;p&gt;Program sought&lt;/p&gt;
* $ant_grad_date **string** - &lt;p&gt;Anticipated graduation date&lt;/p&gt;
* $gpa_creds **string** - &lt;p&gt;GPA Credits&lt;/p&gt;
* $transfered **string** - &lt;p&gt;Transfered&lt;/p&gt;
* $grad_stud **string**
* $OA_inprocess **string** - &lt;p&gt;Online application in progress&lt;/p&gt;
* $diploma **string** - &lt;p&gt;Diploma&lt;/p&gt;
* $employ_waiver_type **string** - &lt;p&gt;Employer waiver type&lt;/p&gt;
* $cur_cod **string**
* $prev_instname **string** - &lt;p&gt;Previous instituion name&lt;/p&gt;
* $grad_age **string** - &lt;p&gt;Graduating age&lt;/p&gt;
* $degreeclass_cod **string** - &lt;p&gt;Degree class code&lt;/p&gt;
* $nmedu_transmem **string** - &lt;p&gt;Transfer memo&lt;/p&gt;
* $employ_waiver **string** - &lt;p&gt;Employer waiver&lt;/p&gt;
* $override **string** - &lt;p&gt;Override flag&lt;/p&gt;


