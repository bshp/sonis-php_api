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
* $soc_sec **string** - The objects unique identifier
* $edu_rid **string** - Edu record id



### eduSearch

    array Jenzabar\Sonis\Api\Education::eduSearch(string $soc_sec, string $edu_rid)

Search for an education record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $edu_rid **string** - Edu record id



### insertDefaultEducation

    array Jenzabar\Sonis\Api\Education::insertDefaultEducation(string $soc_sec, string $cohort_cod)

Inserts a new edu record and sets as default



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $cohort_cod **string** - Cohort code



### insertEducation

    array Jenzabar\Sonis\Api\Education::insertEducation(string $soc_sec, string $educmem, string $inst_cod, string $mod_stat, string $degree, string $enter_date, string $leav_date, string $grad_mo, string $grad_year, string $graduated)

Inserts a new edu record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $educmem **string** - Educational record memo
* $inst_cod **string** - Institutional code
* $mod_stat **string** - The 2 character code for module status, such as ST, WD, AL, PS, FA, SF, and HI
* $degree **string** - Degree for the given educational record
* $enter_date **string** - Educational record entry date
* $leav_date **string** - Educational record leaving date
* $grad_mo **string** - Educational record gradfuation month
* $grad_year **string** - Educational record gradfuation year
* $graduated **string** - Educational record graduated, true or false



### insertInstitution

    array Jenzabar\Sonis\Api\Education::insertInstitution(string $soc_sec, string $inst_mem, string $edu_rid)

Inserts a new institution



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $inst_mem **string** - Institutional memo
* $edu_rid **string** - Edu record id



### searchInstitution

    array Jenzabar\Sonis\Api\Education::searchInstitution(string $inst_state, string $inst_city, string $inst_txt, string $insttypcod, string $inst_cntry)

Search for institution



* Visibility: **public**
* This method is **static**.


#### Arguments
* $inst_state **string** - Institutional state
* $inst_city **string** - Institutional city
* $inst_txt **string** - Institutional description
* $insttypcod **string** - Institutional type code
* $inst_cntry **string** - Institutional country



### updateEducation

    array Jenzabar\Sonis\Api\Education::updateEducation(string $soc_sec, string $edu_rid, string $eduinsttyp, string $degree, string $credits, string $qlty_pnts, string $cqpa, string $rankstud, string $rankclass, string $grad_date, string $enter_date, string $leav_date, string $date_rec, string $matric_dt, string $trans_rec, string $prog_desc, string $educmem, string $enr_age, string $orig_grad, string $grad_mo, string $grad_year, string $graduated, string $grad_honors, string $nmedu_ce1, string $nmedu_le1, string $nmedu_ne1, string $inst_txt, string $cohort_cod, string $degree_sought, string $prg_sought, string $ant_grad_date, string $gpa_creds, string $transfered, string $grad_stud, string $OA_inprocess, string $diploma, string $employ_waiver_type, string $cur_cod, string $prev_instname, string $grad_age, string $degreeclass_cod, string $nmedu_transmem, string $employ_waiver, string $override)

Update a given education record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $edu_rid **string** - Edu record id
* $eduinsttyp **string** - Institutional type
* $degree **string** - Degree for the given educational record
* $credits **string** - Credits
* $qlty_pnts **string** - Quality point
* $cqpa **string**
* $rankstud **string** - Student rank
* $rankclass **string** - Class rank
* $grad_date **string** - Graduation date
* $enter_date **string** - Educational record entry date
* $leav_date **string** - Educational record leaving date
* $date_rec **string** - Date received
* $matric_dt **string** - Matriculation date
* $trans_rec **string** - Transcripts received
* $prog_desc **string** - Program description
* $educmem **string** - Educational record memo
* $enr_age **string** - Enrollment age
* $orig_grad **string** - Original graduation date
* $grad_mo **string** - Educational record gradfuation month
* $grad_year **string** - Educational record gradfuation year
* $graduated **string** - Educational record graduated, true or false
* $grad_honors **string** - Graduated with honors
* $nmedu_ce1 **string** - Custom Field 1
* $nmedu_le1 **string** - Custom Field 2
* $nmedu_ne1 **string** - Custom Field 3
* $inst_txt **string** - Institutional description
* $cohort_cod **string** - Cohort code
* $degree_sought **string** - Degree sought
* $prg_sought **string** - Program sought
* $ant_grad_date **string** - Anticipated graduation date
* $gpa_creds **string** - GPA Credits
* $transfered **string** - Transfered
* $grad_stud **string**
* $OA_inprocess **string** - Online application in progress
* $diploma **string** - Diploma
* $employ_waiver_type **string** - Employer waiver type
* $cur_cod **string**
* $prev_instname **string** - Previous instituion name
* $grad_age **string** - Graduating age
* $degreeclass_cod **string** - Degree class code
* $nmedu_transmem **string** - Transfer memo
* $employ_waiver **string** - Employer waiver
* $override **string** - Override flag


