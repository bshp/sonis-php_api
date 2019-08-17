dropbox
===============

Class dropbox

Sonis API Framework

Component: drp_box.cfc


* Class name: dropbox
* Namespace: 







Methods
-------


### get_comp

    mixed dropbox::get_comp()





* Visibility: **private**




### app_term

    array dropbox::app_term(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of application terms



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### campus

    array dropbox::campus(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of campus'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - &lt;p&gt;Hide excluded values as set in Sonis, true or false&lt;/p&gt;
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### country

    array dropbox::country(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of countries



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### county

    array dropbox::county(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, boolean $disp_only, string $value)

Provides an html list of counties



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;
* $disp_only **boolean** - &lt;p&gt;True or false if editable&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### degree

    array dropbox::degree(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### enrollStatus

    array dropbox::enrollStatus(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### dept_drop

    array dropbox::dept_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of departments



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### ethnic_drop

    array dropbox::ethnic_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of ethnicity's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### gender_drop

    array dropbox::gender_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of genders



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### interest

    array dropbox::interest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of interest's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### LevelofEdu

    array dropbox::LevelofEdu(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of levels of education



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### licenses_drop

    array dropbox::licenses_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of licenses



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### marital_drop

    array dropbox::marital_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of martial status'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### prog_drop

    array dropbox::prog_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $excl_prg, string $value, integer $size)

Provides an html list of programs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $excl_prg **boolean** - &lt;p&gt;Exclude hidden programs in Sonis&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### program

    array dropbox::program(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of programs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - &lt;p&gt;Hide excluded values as set in Sonis, true or false&lt;/p&gt;
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### state

    array dropbox::state(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of state's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### stateoflicensure

    array dropbox::stateoflicensure(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of states of licensure



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### sch_yr_drop

    array dropbox::sch_yr_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $use_cur_sem, string $value, integer $size)

Provides an html list of school years



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $use_cur_sem **boolean** - &lt;p&gt;true or false to use current semester as default&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### semester_drop

    array dropbox::semester_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $use_cur_sem, string $value, integer $size)

Provides an html list of semesters



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $use_cur_sem **boolean** - &lt;p&gt;true or false to use current semester as default&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### termInterest

    array dropbox::termInterest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of terms/semester interested in



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Additional props&lt;/p&gt;



### tuitstat_drop

    array dropbox::tuitstat_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of tuition status'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### visa_drop

    array dropbox::visa_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of visas'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $desc_only **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $cod_desc **boolean** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;



### zone_drop

    array dropbox::zone_drop(boolean $allow_blank, boolean $multi_select, boolean $hide, string $value, integer $size)

Provides an html list of zones, i.e dbo.zone



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;


