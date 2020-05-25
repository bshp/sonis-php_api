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
* $crs_id **integer** - The course id



### getCourseReqs

    array Jenzabar\Sonis\Api\Course::getCourseReqs(integer $crs_id)

Get course requisites



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - The course id



### getPreReqs

    array Jenzabar\Sonis\Api\Course::getPreReqs(integer $crs_id)

Get course pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $crs_id **integer** - The course id



### getCoursePreReqs

    array Jenzabar\Sonis\Api\Course::getCoursePreReqs(integer $schyear, integer $semlist, string $camp_cod)

Get course core pre-reqs



* Visibility: **public**
* This method is **static**.


#### Arguments
* $schyear **integer** - The school year in yyyyyy format, 201718
* $semlist **integer** - The semester, i.e 1,2,3,4..
* $camp_cod **string** - The campus code


