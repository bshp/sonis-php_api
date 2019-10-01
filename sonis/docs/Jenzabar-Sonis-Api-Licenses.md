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
* $soc_sec **string** - The objects unique identifier
* $lic_rid **string** - The Sonis license RID



### insertLicense

    array Jenzabar\Sonis\Api\Licenses::insertLicense(string $soc_sec, string $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $d_soc_sec)

Inserts a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $license **string** - The persons license (not dirvers license)
* $lic_no **string** - The persons license number (not dirvers license)
* $date_rec **string** - The persons license date received (mm/dd/yyyy)
* $date_exp **string** - The persons license date expires (mm/dd/yyyy)
* $lic_mem **string** - The persons license memo
* $d_soc_sec **string** - The objects unique identifier



### searchLicense

    array Jenzabar\Sonis\Api\Licenses::searchLicense(string $soc_sec, string $lic_rid)

Search for a persons license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $lic_rid **string** - The Sonis license RID



### updateLicense

    array Jenzabar\Sonis\Api\Licenses::updateLicense(string $soc_sec, string $license, string $lic_no, string $date_rec, string $date_exp, string $lic_mem, string $lic_rid, string $d_soc_sec)

Update a persons given license



* Visibility: **public**
* This method is **static**.


#### Arguments
* $soc_sec **string** - The objects unique identifier
* $license **string** - The persons license
* $lic_no **string** - The persons license number (not dirvers license)
* $date_rec **string** - The persons license date received (mm/dd/yyyy)
* $date_exp **string** - The persons license date expires (mm/dd/yyyy)
* $lic_mem **string** - The persons license memo
* $lic_rid **string** - The random id of the object
* $d_soc_sec **string** - The objects unique identifier


