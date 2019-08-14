<?php
/**
 *
 * MIT License
 *
 * Copyright (c) 2017 Jason A. Everling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

/**
 * Sonis API Framework
 *
 * Component request router
 *
 * @file router.php
 * @package Core
 * @author Jason A. Everling <jason...@gmail.com>
 * @copyright 2016
 * @license https://opensource.org/licenses/MIT
 */
unset($comp);

$rtr_comp_addr = [
    'add_address',
    'addressSearch',
    'insert_address',
    'update_address',
];

$rtr_comp_bio = [
    'getName',
    'get_enrollstat',
    'namesearch',
    'namesearch2',
    'nmcit',
    'nmcitsearch',
    'save_biographic',
    'update_descriptive',
    'create_biographic',
    'update_name',
];

$rtr_comp_dropbox = [
    'sch_yr',
    'app_term',
    'campus',
    'country',
    'county',
    'degree',
    'interest',
    'state',
    'program',
];

$rtr_comp_education = [
    'delete_education',
    'eduSearch',
    'insert_default_education',
    'insert_education',
    'insert_education_chklst',
    'insert_inst',
    'institutsearch',
    'update_education',
];

$rtr_comp_employment = [
    'delete_employment',
    'insert_employment',
    'search',
    'update_employment',
];

$rtr_comp_oa_licenses = [
    'delete_license',
    'insert_license',
    'search',
    'update_license',
];

$rtr_comp_pagenotes = [
    'get_pagenote',
    'get_pagenote_bottom',
];

$rtr_comp_program = [
    'approgsearch',
    'complete_app',
    'complete_approg',
    'delete_approg',
    'get_nmappchk_record',
    'insert_approg',
    'nmact_add',
    'nmappchk_add',
    'preventrepeats',
    'programSearch',
    'update_nmappchk_memo',
];

$rtr_comp_prospect = [
    'addnewps',
];

if (in_array($method, $rtr_comp_addr)) {
    $comp = 'address';
}

if (in_array($method, $rtr_comp_bio)) {
    $comp = 'biographic';
}

if (in_array($method, $rtr_comp_dropbox)) {
    $comp = 'drp_box';
}

if (in_array($method, $rtr_comp_education)) {
    $comp = 'education';
}

if (in_array($method, $rtr_comp_employment) && !in_array('license', $args)) {
    $comp = 'employment';
}

if (in_array($method, $rtr_comp_oa_licenses) && !in_array('emp_rid', $args)) {
    $comp = 'oa_licenses';
}

if (in_array($method, $rtr_comp_pagenotes)) {
    $comp = 'pagenote';
}

if (in_array($method, $rtr_comp_program)) {
    $comp = 'program';
}

if (in_array($method, $rtr_comp_prospect)) {
    $comp = 'prospect';
}
