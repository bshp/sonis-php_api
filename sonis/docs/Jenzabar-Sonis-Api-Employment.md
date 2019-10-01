Jenzabar\Sonis\Api\Employment
===============

Class employment

Sonis API Framework

Component: employment.cfc


* Class name: Employment
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'employment'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### deleteEmployment

    array Jenzabar\Sonis\Api\Employment::deleteEmployment(string $emp_rid)

Deletes an employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $emp_rid **string** - employer table id



### insertEmployment

    array Jenzabar\Sonis\Api\Employment::insertEmployment(string $soc_sec, string $emp_emply, string $emp_super, string $emp_add1, string $emp_add2, string $emp_add3, string $emp_city, string $emp_state, string $emp_county, string $emp_zip, string $employ_type_rid, string $emp_pos, string $hrs_week, string $start_dt, string $stop_dt, string $emp_mem, string $emp_rid, string $empcountry, string $when_code, string $emp_phone, string $homeinst)

Inserts a new employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $emp_emply **string** - Employer
* $emp_super **string** - Employer manager
* $emp_add1 **string** - Employer address line 1
* $emp_add2 **string** - Employer address line 2
* $emp_add3 **string** - Employer address line 3
* $emp_city **string** - Employer city
* $emp_state **string** - Employer state
* $emp_county **string** - Employer county
* $emp_zip **string** - Employer zipcode
* $employ_type_rid **string**
* $emp_pos **string** - Employee position
* $hrs_week **string** - Hours a week
* $start_dt **string** - Start date mm/dd/yyyy
* $stop_dt **string** - Stop date mm/dd/yyyy
* $emp_mem **string** - Employer memo
* $emp_rid **string** - Employer table id
* $empcountry **string** - Employer country
* $when_code **string** - Employer when started mm/dd/yyyy
* $emp_phone **string** - Employer phone number
* $homeinst **string** - Home institution



### searchEmployment

    array Jenzabar\Sonis\Api\Employment::searchEmployment(string $soc_sec, string $emp_rid)

Searches for an employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $emp_rid **string** - employer table id



### updateEmployment

    array Jenzabar\Sonis\Api\Employment::updateEmployment(string $soc_sec, string $emp_emply, string $emp_super, string $emp_add1, string $emp_add2, string $emp_add3, string $emp_city, string $emp_state, string $emp_county, string $emp_zip, string $employ_type_rid, string $emp_status, string $passed, string $emp_email, string $number, string $emp_pos, string $hrs_week, string $start_dt, string $stop_dt, string $emp_mem, string $emp_rid, string $empcountry, string $when_code, string $emp_phone, string $homeinst)

Updates the employment record



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $emp_emply **string** - Employer
* $emp_super **string** - Employer manager
* $emp_add1 **string** - Employer address line 1
* $emp_add2 **string** - Employer address line 2
* $emp_add3 **string** - Employer address line 3
* $emp_city **string** - Employer city
* $emp_state **string** - Employer state
* $emp_county **string** - Employer county
* $emp_zip **string** - Employer zipcode
* $employ_type_rid **string** - Employee type table id
* $emp_status **string** - Employee status
* $passed **string** - Passed (used differently for various schools)
* $emp_email **string** - Employee email address
* $number **string** - Employee number
* $emp_pos **string** - Employee position
* $hrs_week **string** - Hours a week
* $start_dt **string** - Start date mm/dd/yyyy
* $stop_dt **string** - Stop date mm/dd/yyyy
* $emp_mem **string** - Employer memo
* $emp_rid **string** - employer table id
* $empcountry **string** - Employer country
* $when_code **string** - Employer when started mm/dd/yyyy
* $emp_phone **string** - Employer phone number
* $homeinst **string** - Home institution


