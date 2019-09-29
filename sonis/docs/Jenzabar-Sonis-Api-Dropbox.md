Jenzabar\Sonis\Api\Dropbox
===============

Class dropbox

Sonis API Framework

Component: drp_box.cfc


* Class name: Dropbox
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'drp_box'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### booleanBox

    string Jenzabar\Sonis\Api\Dropbox::booleanBox(boolean $allow_blank, string $Additional_Properties)

Creates an html list for yes/no options with values 0 and 1



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### appTerm

    array Jenzabar\Sonis\Api\Dropbox::appTerm(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of application terms



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### campus

    array Jenzabar\Sonis\Api\Dropbox::campus(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of campus'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - &lt;p&gt;Hide excluded values as set in Sonis, true or false&lt;/p&gt;
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### country

    array Jenzabar\Sonis\Api\Dropbox::country(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of countries



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### county

    array Jenzabar\Sonis\Api\Dropbox::county(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, boolean $disp_only, string $value)

Provides an html list of counties



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;
* $disp_only **boolean** - &lt;p&gt;True or false if editable&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### degree

    array Jenzabar\Sonis\Api\Dropbox::degree(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### enrollStatus

    array Jenzabar\Sonis\Api\Dropbox::enrollStatus(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;



### department

    array Jenzabar\Sonis\Api\Dropbox::department(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### ethnicity

    array Jenzabar\Sonis\Api\Dropbox::ethnicity(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### gender

    array Jenzabar\Sonis\Api\Dropbox::gender(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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

    array Jenzabar\Sonis\Api\Dropbox::interest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of interest's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### levelOfEdu

    array Jenzabar\Sonis\Api\Dropbox::levelOfEdu(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of levels of education



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### licenses

    array Jenzabar\Sonis\Api\Dropbox::licenses(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### marital

    array Jenzabar\Sonis\Api\Dropbox::marital(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### programs

    array Jenzabar\Sonis\Api\Dropbox::programs(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $excl_prg, string $value, integer $size)

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

    array Jenzabar\Sonis\Api\Dropbox::program(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of programs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - &lt;p&gt;Hide excluded values as set in Sonis, true or false&lt;/p&gt;
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### state

    array Jenzabar\Sonis\Api\Dropbox::state(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of state's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### stateOfLicensure

    array Jenzabar\Sonis\Api\Dropbox::stateOfLicensure(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of states of licensure



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### schoolYears

    array Jenzabar\Sonis\Api\Dropbox::schoolYears(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $use_cur_sem, string $value, integer $size)

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



### semesters

    array Jenzabar\Sonis\Api\Dropbox::semesters(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $use_cur_sem, string $value, integer $size)

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

    array Jenzabar\Sonis\Api\Dropbox::termInterest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of terms/semester interested in



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $Additional_Properties **string** - &lt;p&gt;Add additional html properties for &lt;select&gt;&lt;/p&gt;



### tuitionStatus

    array Jenzabar\Sonis\Api\Dropbox::tuitionStatus(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### visa

    array Jenzabar\Sonis\Api\Dropbox::visa(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

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



### zones

    array Jenzabar\Sonis\Api\Dropbox::zones(boolean $allow_blank, boolean $multi_select, boolean $hide, string $value, integer $size)

Provides an html list of zones, i.e dbo.zone



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - &lt;p&gt;Allow blank values, true or false, this must be true if $value is not set&lt;/p&gt;
* $multi_select **boolean** - &lt;p&gt;Create mutli-select html box, true or false&lt;/p&gt;
* $hide **boolean** - &lt;p&gt;Hide this dropdown by default, true or false&lt;/p&gt;
* $value **string** - &lt;p&gt;the default value to be used, selected automatically, defaults to blank&lt;/p&gt;
* $size **integer** - &lt;p&gt;Unsure really, testing shows no change&lt;/p&gt;


