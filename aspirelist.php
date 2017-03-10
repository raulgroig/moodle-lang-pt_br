<?php 

                        
/**
 * Strings for component 'aspirelist', language 'pt_br', branch 'MOODLE_32_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['aspirecodesettings'] = 'Talis Aspire code settings';
$string['aspiresitesettings'] = 'Talis Aspire site settings';
$string['aspireurl_desc'] = 'Enter the base URL of your Talis Aspire site (not an HTTPS alias).';
$string['aspireurlhttpsalias_desc'] = 'Enter the HTTPS alias URL of your Talis Aspire site (if you have one).';
$string['authorsinconfig'] = 'Include authors in config form';
$string['authorsinconfig_desc'] = 'Should resource item descriptions in module configuration forms include the names of authors? By default only the item title and resource format are included, to save space on the form.';
$string['center'] = 'Center';
$string['codecolumn_desc'] = 'Optional. The name of the column in the custom table containing your Talis Aspire list codes';
$string['coderegex_desc'] = 'Optional. If using the course ID number or short name as your code source, this is a regular expression (including delimiters) matching the Talis Aspire code part of it. If no regex is provided here it will be assumed that the field contains the Aspire code only.';
$string['codesource_desc'] = 'Select the source of your Talis Aspire list codes. If you choose to use a custom database table you must also specify the table, columns and course attribute details in the fields below. If no code is found in the custom table for a particular course, the course ID number will be checked as a fallback.';
$string['codetable_desc'] = 'Optional. The name of a custom table in the Moodle database containing your Talis Aspire list codes mapped against a Moodle course attribute.';
$string['college'] = 'College';
$string['course'] = 'Course';
$string['courseattribute_desc'] = 'Optional. The unique course attribute that is mapped against your Talis Aspire codes in the custom table (normally id, idnumber or shortname).';
$string['coursecolumn'] = 'Course column';
$string['coursecolumn_desc'] = 'Optional. The name of the column in the custom table containing the course attribute that is mapped against your Talis Aspire list codes.';
$string['defaultdisplay_desc'] = 'By default, should new resource lists be displayed on a separate page via a link, or inline on the course page?';
$string['department'] = 'Department';
$string['display'] = 'Display resource list contents';
$string['display_help'] = 'If you choose to display the resource list contents on the course page, there will be no link to a separate page. The description will be displayed only if "Display description on course page" is checked.';
$string['displayinline'] = 'Inline on the course page';
$string['displaypage'] = 'On a separate page';
$string['division'] = 'Division';
$string['errorcourseattribute'] = 'You must specify a course attribute if you want to use a custom database table as your Aspire code source.';
$string['errorcoursecolumn'] = 'You must specify the course column if you want to use a custom database table as your Aspire code source.';
$string['faculty'] = 'Faculty';
$string['field'] = 'Field';
$string['generalsettings'] = 'General settings';
$string['includechildcodes'] = 'Include meta child codes';
$string['includechildcodes_desc'] = 'Check for course meta links and include the Aspire list codes associated with any child courses found.';
$string['institute'] = 'Institute';
$string['institution'] = 'Institution';
$string['kgcolumn'] = 'Knowledge group column';
$string['kgcolumn_desc'] = 'Optional. The name of the column in the custom table containing the knowledge group (if left blank the default knowledge group configured in the Talis Aspire site settings will be used for all lists).';
$string['knowledgegroup'] = 'Default knowledge group';
$string['knowledgegroup_desc'] = 'Select the default target knowledge group for your Talis Aspire lists. This can be overridden per list if using a custom database table for your Aspire code source (configured below).';
$string['level'] = 'Level';
$string['module'] = 'Module';
$string['modulename'] = 'Aspire resource list';
$string['modulename_help'] = '<p>The Aspire resource list module enables a teacher to include a selection of resources from associated Talis Aspire resource lists directly within the content of their course.</p><p>The resource list can be displayed either in a separate, linked page, or embedded in the course page itself (hidden initially, with a link to toggle visibility).</p>';
$string['modulename_link'] = 'mod/aspirelist/view';
$string['modulenameplural'] = 'Aspire resource lists';
$string['noaspirelists'] = 'Sorry, there are no resource lists associated with this {$a}.';
$string['noconnection'] = 'Unfortunately the Talis Aspire website is currently unavailable. Please try again later.';
$string['onlineresource'] = 'Online resource';
$string['page-mod-aspirelist-view'] = 'Resource list module main page';
$string['page-mod-aspirelist-x'] = 'Any resource list module page';
$string['pathway'] = 'Pathway';
$string['pluginadministration'] = 'Aspire resource list administration';
$string['pluginname'] = 'Aspire resource list';
$string['programme'] = 'Programme';
$string['requiremodintro'] = 'Require resource list description';
$string['requiremodintro_desc'] = 'Enable this option if you want to force users to enter a description for each resource list.';
$string['school'] = 'School';
$string['subject'] = 'Subject';
$string['unit'] = 'Unit';
$string['yearregex'] = 'Year code regex';
$string['yearregex_desc'] = 'Optional. This is a regular expression (including delimiters) matching the year code part of your course ID numbers or short names (both will be checked), and can be used irrespective of the source of the Aspire list codes. If no regex is provided here it will be assumed that there is no year code, and the latest version of each list will be used.';