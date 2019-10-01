Jenzabar\Sonis\Api\Prospect
===============

Class prospect

Sonis API Framework

Component: addps.cfc, addps_direct.cfc

Usage: Add new prospect inquiry, update prospect


* Class name: Prospect
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'addps'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### addProspect

    array Jenzabar\Sonis\Api\Prospect::addProspect(string $last_name, string $first_name, string $mi, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $country, string $phone, string $cell_phone, string $nickname, string $work_phone, string $e_mail, string $term_int, string $referby, string $enstat_cod, string $prg_cod, string $camp_cod, string $comments, string $snd_app, string $snd_brch, string $snd_cat, string $snd_f4, string $snd_f5, string $snd_f6, string $snd_3PF, string $employer, string $moved_dt, string $move2app, string $contact, string $state_of_licensure, string $level_of_education, string $level_comp, string $hs_prereq, string $prg_intrest, string $cl_prereq, string $prereqenrolled, string $cur_emp, string $cur_emp_inst_cod, string $LPN, string $LPN_years, string $enroll_month, string $enroll_yr, string $ref_other, string $psprereqcrs_cod, string $pref_inst_cod, string $webps_ce1, string $webps_le1, string $webps_ne1, string $webps_de1, string $webps_fe1, string $webps_ce2, string $webps_ce3, string $incomplete, string $birthdate, string $memo1, string $memo2, string $memo3, string $areas_of_interest_rid, string $undergrd_attnd, string $undergrd_maj)

Inserts a new prospect/inquiry



* Visibility: **public**
* This method is **static**.


#### Arguments
* $last_name **string** - The persons last name
* $first_name **string** - The persons first name
* $mi **string** - The persons middle initial, 1 character
* $st_addr **string** - The persons street address
* $add_addr **string** - The persons street address number, such as APT 101 or #101
* $add_add2 **string** - Don&#039;t think we have ever used this one
* $city **string** - The persons city
* $state **string** - The persons state 2 character code such as TX for Texas
* $zip **string** - The persons zip code
* $country **string** - The 2 character code for country like US
* $phone **string** - The persons phone number
* $cell_phone **string** - The persons cell phone number
* $nickname **string** - The persons preferred name
* $work_phone **string** - The persons work phone number
* $e_mail **string** - The primary email address for the record type
* $term_int **string** - Applicant term interested in
* $referby **string** - Referred by
* $enstat_cod **string** - Enrollment status code
* $prg_cod **string** - Program code
* $camp_cod **string** - The person&#039;s campus, in the form of the code
* $comments **string** - Comments
* $snd_app **string** - Workflow send application
* $snd_brch **string** - Workflow send brochure
* $snd_cat **string** - Workflow send catalog
* $snd_f4 **string** - Wokrflow custom
* $snd_f5 **string** - Wokrflow custom
* $snd_f6 **string** - Wokrflow custom
* $snd_3PF **string**
* $employer **string** - Employer
* $moved_dt **string** - Date moved
* $move2app **string** - Date moved to applicant
* $contact **string** - Contact information
* $state_of_licensure **string** - The persons state 2 character code for license state
* $level_of_education **string** - Persons level of education
* $level_comp **string** - highest level completed
* $hs_prereq **string** - Highschool pre-req
* $prg_intrest **string** - Program interested in
* $cl_prereq **string** - Class pre-req
* $prereqenrolled **string** - Pre-req enrolled?
* $cur_emp **string** - Current employer
* $cur_emp_inst_cod **string** - Current employer institution code
* $LPN **string** - Has LPN
* $LPN_years **string** - For how long
* $enroll_month **string** - Enrollment month
* $enroll_yr **string** - Enrollment year
* $ref_other **string** - Referred by &#039;other&#039; box
* $psprereqcrs_cod **string** - Pre-req course code
* $pref_inst_cod **string** - Preferred institutional code
* $webps_ce1 **string** - Custom Field
* $webps_le1 **string** - Custom Field
* $webps_ne1 **string** - Custom Field
* $webps_de1 **string** - Custom Field
* $webps_fe1 **string** - Custom Field
* $webps_ce2 **string** - Custom Field
* $webps_ce3 **string** - Custom Field
* $incomplete **string** - App incomplete
* $birthdate **string** - The persons birthday, such as 05/12/2001
* $memo1 **string** - Memo 1
* $memo2 **string** - Memo 2
* $memo3 **string** - Memo 3
* $areas_of_interest_rid **string** - Areas of interest table id
* $undergrd_attnd **string** - Undergraduate?
* $undergrd_maj **string** - Undergraduate major


