employment
===============

Class employment

Sonis API Framework

Component: employment.cfc


* Class name: employment
* Namespace: 







Methods
-------


### get_comp

    mixed employment::get_comp()





* Visibility: **private**




### delete_employment

    array employment::delete_employment(string $emp_rid)

Deletes an employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $emp_rid **string** - &lt;p&gt;employer table id&lt;/p&gt;



### insert_employment

    array employment::insert_employment(string $soc_sec, string $emp_emply, string $emp_super, string $emp_add1, string $emp_add2, string $emp_add3, string $emp_city, string $emp_state, string $emp_county, string $emp_zip, string $employ_type_rid, string $emp_pos, string $hrs_week, string $start_dt, string $stop_dt, string $emp_mem, string $emp_rid, string $empcountry, string $when_code, string $emp_phone, string $homeinst)

Inserts a new employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $emp_emply **string** - &lt;p&gt;Employer&lt;/p&gt;
* $emp_super **string** - &lt;p&gt;Employer manager&lt;/p&gt;
* $emp_add1 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_add2 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_add3 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_city **string** - &lt;p&gt;Employer city&lt;/p&gt;
* $emp_state **string** - &lt;p&gt;Employer state&lt;/p&gt;
* $emp_county **string** - &lt;p&gt;Employer county&lt;/p&gt;
* $emp_zip **string** - &lt;p&gt;Employer zipcode&lt;/p&gt;
* $employ_type_rid **string**
* $emp_pos **string** - &lt;p&gt;Employee position&lt;/p&gt;
* $hrs_week **string** - &lt;p&gt;Hours a week&lt;/p&gt;
* $start_dt **string** - &lt;p&gt;Start date mm/dd/yyyy&lt;/p&gt;
* $stop_dt **string** - &lt;p&gt;Stop date mm/dd/yyyy&lt;/p&gt;
* $emp_mem **string** - &lt;p&gt;Employer memo&lt;/p&gt;
* $emp_rid **string** - &lt;p&gt;Employer table id&lt;/p&gt;
* $empcountry **string** - &lt;p&gt;Employer country&lt;/p&gt;
* $when_code **string** - &lt;p&gt;Employer when started mm/dd/yyyy&lt;/p&gt;
* $emp_phone **string** - &lt;p&gt;Employer phone number&lt;/p&gt;
* $homeinst **string** - &lt;p&gt;Home institution&lt;/p&gt;



### search

    array employment::search(string $soc_sec, string $emp_rid)

Searches for an employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $emp_rid **string** - &lt;p&gt;employer table id&lt;/p&gt;



### update_employment

    array employment::update_employment(string $soc_sec, string $emp_emply, string $emp_super, string $emp_add1, string $emp_add2, string $emp_add3, string $emp_city, string $emp_state, string $emp_county, string $emp_zip, string $employ_type_rid, string $emp_status, string $passed, string $emp_email, string $number, string $emp_pos, string $hrs_week, string $start_dt, string $stop_dt, string $emp_mem, string $emp_rid, string $empcountry, string $when_code, string $emp_phone, string $homeinst)

Updates the employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $emp_emply **string** - &lt;p&gt;Employer&lt;/p&gt;
* $emp_super **string** - &lt;p&gt;Employer manager&lt;/p&gt;
* $emp_add1 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_add2 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_add3 **string** - &lt;p&gt;Employer address line 1&lt;/p&gt;
* $emp_city **string** - &lt;p&gt;Employer city&lt;/p&gt;
* $emp_state **string** - &lt;p&gt;Employer state&lt;/p&gt;
* $emp_county **string** - &lt;p&gt;Employer county&lt;/p&gt;
* $emp_zip **string** - &lt;p&gt;Employer zipcode&lt;/p&gt;
* $employ_type_rid **string** - &lt;p&gt;Employee type table id&lt;/p&gt;
* $emp_status **string** - &lt;p&gt;Employee status&lt;/p&gt;
* $passed **string** - &lt;p&gt;Passed (used differently for various schools)&lt;/p&gt;
* $emp_email **string** - &lt;p&gt;Employee email address&lt;/p&gt;
* $number **string** - &lt;p&gt;Employee number&lt;/p&gt;
* $emp_pos **string** - &lt;p&gt;Employee position&lt;/p&gt;
* $hrs_week **string** - &lt;p&gt;Hours a week&lt;/p&gt;
* $start_dt **string** - &lt;p&gt;Start date mm/dd/yyyy&lt;/p&gt;
* $stop_dt **string** - &lt;p&gt;Stop date mm/dd/yyyy&lt;/p&gt;
* $emp_mem **string** - &lt;p&gt;Employer memo&lt;/p&gt;
* $emp_rid **string** - &lt;p&gt;employer table id&lt;/p&gt;
* $empcountry **string** - &lt;p&gt;Employer country&lt;/p&gt;
* $when_code **string** - &lt;p&gt;Employer when started mm/dd/yyyy&lt;/p&gt;
* $emp_phone **string** - &lt;p&gt;Employer phone number&lt;/p&gt;
* $homeinst **string** - &lt;p&gt;Home institution&lt;/p&gt;


