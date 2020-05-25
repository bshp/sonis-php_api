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
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### appTerm

    array Jenzabar\Sonis\Api\Dropbox::appTerm(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of application terms



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;
* $value **string** - the default value to be used, selected automatically, defaults to blank



### campus

    array Jenzabar\Sonis\Api\Dropbox::campus(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of campus'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - Hide excluded values as set in Sonis, true or false
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;
* $value **string** - the default value to be used, selected automatically, defaults to blank



### country

    array Jenzabar\Sonis\Api\Dropbox::country(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of countries



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### county

    array Jenzabar\Sonis\Api\Dropbox::county(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, boolean $disp_only, string $value)

Provides an html list of counties



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;
* $disp_only **boolean** - True or false if editable
* $value **string** - the default value to be used, selected automatically, defaults to blank



### degree

    array Jenzabar\Sonis\Api\Dropbox::degree(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### enrollStatus

    array Jenzabar\Sonis\Api\Dropbox::enrollStatus(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties, string $value)

Provides an html list of degrees



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;
* $value **string** - the default value to be used, selected automatically, defaults to blank



### department

    array Jenzabar\Sonis\Api\Dropbox::department(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of departments



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### ethnicity

    array Jenzabar\Sonis\Api\Dropbox::ethnicity(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of ethnicity's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### gender

    array Jenzabar\Sonis\Api\Dropbox::gender(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of genders



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### interest

    array Jenzabar\Sonis\Api\Dropbox::interest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of interest's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### levelOfEdu

    array Jenzabar\Sonis\Api\Dropbox::levelOfEdu(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of levels of education



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### licenses

    array Jenzabar\Sonis\Api\Dropbox::licenses(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of licenses



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### marital

    array Jenzabar\Sonis\Api\Dropbox::marital(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of martial status'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### programs

    array Jenzabar\Sonis\Api\Dropbox::programs(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $excl_prg, string $value, integer $size)

Provides an html list of programs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $excl_prg **boolean** - Exclude hidden programs in Sonis
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### program

    array Jenzabar\Sonis\Api\Dropbox::program(boolean $hide_excludes, boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of programs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $hide_excludes **boolean** - Hide excluded values as set in Sonis, true or false
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### state

    array Jenzabar\Sonis\Api\Dropbox::state(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of state's



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### stateOfLicensure

    array Jenzabar\Sonis\Api\Dropbox::stateOfLicensure(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of states of licensure



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### schoolYears

    array Jenzabar\Sonis\Api\Dropbox::schoolYears(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $use_cur_sem, string $value, integer $size)

Provides an html list of school years



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $use_cur_sem **boolean** - true or false to use current semester as default
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### semesters

    array Jenzabar\Sonis\Api\Dropbox::semesters(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, boolean $use_cur_sem, string $value, integer $size)

Provides an html list of semesters



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $use_cur_sem **boolean** - true or false to use current semester as default
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### termInterest

    array Jenzabar\Sonis\Api\Dropbox::termInterest(boolean $allow_blank, boolean $multi_select, boolean $hide, string $Additional_Properties)

Provides an html list of terms/semester interested in



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $Additional_Properties **string** - Add additional html properties for &lt;select&gt;



### tuitionStatus

    array Jenzabar\Sonis\Api\Dropbox::tuitionStatus(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of tuition status'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### visa

    array Jenzabar\Sonis\Api\Dropbox::visa(boolean $allow_blank, boolean $multi_select, boolean $hide, boolean $desc_only, boolean $cod_desc, string $value, integer $size)

Provides an html list of visas'



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $desc_only **boolean** - Unsure really, testing shows no change
* $cod_desc **boolean** - Unsure really, testing shows no change
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change



### zones

    array Jenzabar\Sonis\Api\Dropbox::zones(boolean $allow_blank, boolean $multi_select, boolean $hide, string $value, integer $size)

Provides an html list of zones, i.e dbo.zone



* Visibility: **public**
* This method is **static**.


#### Arguments
* $allow_blank **boolean** - Allow blank values, true or false, this must be true if $value is not set
* $multi_select **boolean** - Create mutli-select html box, true or false
* $hide **boolean** - Hide this dropdown by default, true or false
* $value **string** - the default value to be used, selected automatically, defaults to blank
* $size **integer** - Unsure really, testing shows no change


