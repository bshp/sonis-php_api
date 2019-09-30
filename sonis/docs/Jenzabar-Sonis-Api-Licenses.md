Jenzabar\Sonis\Api\Licenses
===============

Class licenses

Sonis API Framework

Component: oa_licenses.cfc


* Class name: Licenses
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'oa_licenses'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### deleteLicense

    array Jenzabar\Sonis\Api\Licenses::deleteLicense(string $soc_sec, string $lic_rid)

Deletes a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $lic_rid **string** - &lt;p&gt;The Sonis license RID&lt;/p&gt;



### insertLicense

    array Jenzabar\Sonis\Api\Licenses::insertLicense(string $soc_sec, string $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $d_soc_sec)

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



### searchLicense

    array Jenzabar\Sonis\Api\Licenses::searchLicense(string $soc_sec, string $lic_rid)

Search for a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $lic_rid **string** - &lt;p&gt;The Sonis license RID&lt;/p&gt;



### updateLicense

    array Jenzabar\Sonis\Api\Licenses::updateLicense(string $soc_sec, string $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $lic_rid, string $d_soc_sec)

Update a persons given license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;
* $license **string** - &lt;p&gt;The persons license&lt;/p&gt;
* $lic_no **string** - &lt;p&gt;The persons license number (not dirvers license)&lt;/p&gt;
* $date_rec **string** - &lt;p&gt;The persons license date received (mm/dd/yyyy)&lt;/p&gt;
* $date_exp **string** - &lt;p&gt;The persons license date expires (mm/dd/yyyy)&lt;/p&gt;
* $lic_mem **string** - &lt;p&gt;The persons license memo&lt;/p&gt;
* $lic_rid **string** - &lt;p&gt;The random id of the object&lt;/p&gt;
* $d_soc_sec **string** - &lt;p&gt;The objects unique identifier&lt;/p&gt;


