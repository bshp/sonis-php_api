course
===============

Class course

Sonis API Framework

Component: crs_sec_list.cfc


* Class name: course
* Namespace: 







Methods
-------


### get_comp

    mixed course::get_comp()





* Visibility: **private**




### getcoreq

    array course::getcoreq(integer $crs_id)

Get course core requisites



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getcreqs

    array course::getcreqs(integer $crs_id)

Get course requisites



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getprereq

    array course::getprereq(integer $crs_id)

Get course pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getprereqco

    array course::getprereqco(integer $schyear, integer $semlist, string $camp_cod)

Get course core pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $schyear **integer** - &lt;p&gt;The school year in yyyyyy format, 201718&lt;/p&gt;
* $semlist **integer** - &lt;p&gt;The semester, i.e 1,2,3,4..&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The campus code&lt;/p&gt;


