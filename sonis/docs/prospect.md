prospect
===============

Class prospect

Sonis API Framework

Component: addps.cfc, addps_direct.cfc

Usage: Add new prospect inquiry, update prospect


* Class name: prospect
* Namespace: 







Methods
-------


### get_comp

    mixed prospect::get_comp()





* Visibility: **private**




### addnewps

    array prospect::addnewps(string $last_name, string $first_name, string $mi, string $st_addr, string $add_addr, string $add_add2, string $city, string $state, string $zip, string $country, string $phone, string $cell_phone, string $nickname, string $work_phone, string $e_mail, string $term_int, string $referby, string $enstat_cod, string $prg_cod, string $camp_cod, string $comments, string $snd_app, string $snd_brch, string $snd_cat, string $snd_f4, string $snd_f5, string $snd_f6, string $snd_3PF, string $employer, string $moved_dt, string $move2app, string $contact, string $state_of_licensure, string $level_of_education, string $level_comp, string $hs_prereq, string $prg_intrest, string $cl_prereq, string $prereqenrolled, string $cur_emp, string $cur_emp_inst_cod, string $LPN, string $LPN_years, string $enroll_month, string $enroll_yr, string $ref_other, string $psprereqcrs_cod, string $pref_inst_cod, string $webps_ce1, string $webps_le1, string $webps_ne1, string $webps_de1, string $webps_fe1, string $webps_ce2, string $webps_ce3, string $incomplete, string $birthdate, string $memo1, string $memo2, string $memo3, string $areas_of_interest_rid, string $undergrd_attnd, string $undergrd_maj)

Inserts a new prospect/inquiry



* Visibility: **public**
* This method is **static**.


#### Arguments
* $last_name **string** - &lt;p&gt;The persons last name&lt;/p&gt;
* $first_name **string** - &lt;p&gt;The persons first name&lt;/p&gt;
* $mi **string** - &lt;p&gt;The persons middle initial, 1 character&lt;/p&gt;
* $st_addr **string** - &lt;p&gt;The persons street address&lt;/p&gt;
* $add_addr **string** - &lt;p&gt;The persons street address number, such as APT 101 or #101&lt;/p&gt;
* $add_add2 **string** - &lt;p&gt;Don&#039;t think we have ever used this one&lt;/p&gt;
* $city **string** - &lt;p&gt;The persons city&lt;/p&gt;
* $state **string** - &lt;p&gt;The persons state 2 character code such as TX for Texas&lt;/p&gt;
* $zip **string** - &lt;p&gt;The persons zip code&lt;/p&gt;
* $country **string** - &lt;p&gt;The 2 character code for country like US&lt;/p&gt;
* $phone **string** - &lt;p&gt;The persons phone number&lt;/p&gt;
* $cell_phone **string** - &lt;p&gt;The persons cell phone number&lt;/p&gt;
* $nickname **string** - &lt;p&gt;The persons preferred name&lt;/p&gt;
* $work_phone **string** - &lt;p&gt;The persons work phone number&lt;/p&gt;
* $e_mail **string** - &lt;p&gt;The primary email address for the record type&lt;/p&gt;
* $term_int **string** - &lt;p&gt;Applicant term interested in&lt;/p&gt;
* $referby **string** - &lt;p&gt;Referred by&lt;/p&gt;
* $enstat_cod **string** - &lt;p&gt;Enrollment status code&lt;/p&gt;
* $prg_cod **string** - &lt;p&gt;Program code&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The person&#039;s campus, in the form of the code&lt;/p&gt;
* $comments **string** - &lt;p&gt;Comments&lt;/p&gt;
* $snd_app **string** - &lt;p&gt;Workflow send application&lt;/p&gt;
* $snd_brch **string** - &lt;p&gt;Workflow send brochure&lt;/p&gt;
* $snd_cat **string** - &lt;p&gt;Workflow send catalog&lt;/p&gt;
* $snd_f4 **string** - &lt;p&gt;Wokrflow custom&lt;/p&gt;
* $snd_f5 **string** - &lt;p&gt;Wokrflow custom&lt;/p&gt;
* $snd_f6 **string** - &lt;p&gt;Wokrflow custom&lt;/p&gt;
* $snd_3PF **string**
* $employer **string** - &lt;p&gt;Employer&lt;/p&gt;
* $moved_dt **string** - &lt;p&gt;Date moved&lt;/p&gt;
* $move2app **string** - &lt;p&gt;Date moved to applicant&lt;/p&gt;
* $contact **string** - &lt;p&gt;Contact information&lt;/p&gt;
* $state_of_licensure **string** - &lt;p&gt;The persons state 2 character code such as TX for Texas where the license was granted&lt;/p&gt;
* $level_of_education **string** - &lt;p&gt;Persons level of education&lt;/p&gt;
* $level_comp **string** - &lt;p&gt;highest level completed&lt;/p&gt;
* $hs_prereq **string** - &lt;p&gt;Highschool pre-req&lt;/p&gt;
* $prg_intrest **string** - &lt;p&gt;Program interested in&lt;/p&gt;
* $cl_prereq **string** - &lt;p&gt;Class pre-req&lt;/p&gt;
* $prereqenrolled **string** - &lt;p&gt;Pre-req enrolled?&lt;/p&gt;
* $cur_emp **string** - &lt;p&gt;Current employer&lt;/p&gt;
* $cur_emp_inst_cod **string** - &lt;p&gt;Current employer institution code&lt;/p&gt;
* $LPN **string** - &lt;p&gt;Has LPN&lt;/p&gt;
* $LPN_years **string** - &lt;p&gt;For how long&lt;/p&gt;
* $enroll_month **string** - &lt;p&gt;Enrollment month&lt;/p&gt;
* $enroll_yr **string** - &lt;p&gt;Enrollment year&lt;/p&gt;
* $ref_other **string** - &lt;p&gt;Referred by &#039;other&#039; box&lt;/p&gt;
* $psprereqcrs_cod **string** - &lt;p&gt;Pre-req course code&lt;/p&gt;
* $pref_inst_cod **string** - &lt;p&gt;Preferred institutional code&lt;/p&gt;
* $webps_ce1 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_le1 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_ne1 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_de1 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_fe1 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_ce2 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $webps_ce3 **string** - &lt;p&gt;Custom Field&lt;/p&gt;
* $incomplete **string** - &lt;p&gt;App incomplete&lt;/p&gt;
* $birthdate **string** - &lt;p&gt;The persons birthday, such as 05/12/2001&lt;/p&gt;
* $memo1 **string** - &lt;p&gt;Memo 1&lt;/p&gt;
* $memo2 **string** - &lt;p&gt;Memo 2&lt;/p&gt;
* $memo3 **string** - &lt;p&gt;Memo 3&lt;/p&gt;
* $areas_of_interest_rid **string** - &lt;p&gt;Areas of interest table id&lt;/p&gt;
* $undergrd_attnd **string** - &lt;p&gt;Undergraduate?&lt;/p&gt;
* $undergrd_maj **string** - &lt;p&gt;Undergraduate major&lt;/p&gt;


