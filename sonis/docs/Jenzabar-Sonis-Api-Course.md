Jenzabar\Sonis\Api\Course
===============

Class course

Sonis API Framework

Component: crs_sec_list.cfc


* Class name: Course
* Namespace: Jenzabar\Sonis\Api





Properties
----------


### $comp

    private string $comp = 'crs_sec_list'

The Sonis component to call



* Visibility: **private**
* This property is **static**.


Methods
-------


### getCoreReq

    array Jenzabar\Sonis\Api\Course::getCoreReq(integer $crs_id)

Get course core requisites



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getCourseReqs

    array Jenzabar\Sonis\Api\Course::getCourseReqs(integer $crs_id)

Get course requisites



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getPreReqs

    array Jenzabar\Sonis\Api\Course::getPreReqs(integer $crs_id)

Get course pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - &lt;p&gt;The course id&lt;/p&gt;



### getCoursePreReqs

    array Jenzabar\Sonis\Api\Course::getCoursePreReqs(integer $schyear, integer $semlist, string $camp_cod)

Get course core pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $schyear **integer** - &lt;p&gt;The school year in yyyyyy format, 201718&lt;/p&gt;
* $semlist **integer** - &lt;p&gt;The semester, i.e 1,2,3,4..&lt;/p&gt;
* $camp_cod **string** - &lt;p&gt;The campus code&lt;/p&gt;


