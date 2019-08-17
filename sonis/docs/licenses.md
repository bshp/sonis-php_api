licenses
===============

Class licenses

Sonis API Framework

Component: oa_licenses.cfc


* Class name: licenses
* Namespace: 







Methods
-------


### get_comp

    mixed licenses::get_comp()





* Visibility: **private**




### delete_license

    array licenses::delete_license(string $soc_sec)

Deletes a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### insert_license

    array licenses::insert_license(string $soc_sec, string $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $d_soc_sec)

Inserts a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $license **string** - &lt;p&gt;The persons license (not dirvers license)&lt;/p&gt;
* $lic_no **string** - &lt;p&gt;The persons license number (not dirvers license)&lt;/p&gt;
* $date_rec **string** - &lt;p&gt;The persons license date received (mm/dd/yyyy)&lt;/p&gt;
* $date_exp **string** - &lt;p&gt;The persons license date expires (mm/dd/yyyy)&lt;/p&gt;
* $lic_mem **string** - &lt;p&gt;The persons license memo&lt;/p&gt;
* $d_soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;



### search

    array licenses::search(string $soc_sec, string $license)

Search for a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $license **string** - &lt;p&gt;The persons license (not dirvers license)&lt;/p&gt;



### update_license

    array licenses::update_license(string $soc_sec, $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $lic_rid, string $d_soc_sec)

Update a persons given license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $license **mixed** - &lt;p&gt;The persons license&lt;/p&gt;
* $lic_no **string** - &lt;p&gt;The persons license number (not dirvers license)&lt;/p&gt;
* $date_rec **string** - &lt;p&gt;The persons license date received (mm/dd/yyyy)&lt;/p&gt;
* $date_exp **string** - &lt;p&gt;The persons license date expires (mm/dd/yyyy)&lt;/p&gt;
* $lic_mem **string** - &lt;p&gt;The persons license memo&lt;/p&gt;
* $lic_rid **string**
* $d_soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;


