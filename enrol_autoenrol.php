<?php 

                        
/**
 * Strings for component 'enrol_autoenrol', language 'pt_br', branch 'MOODLE_28_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['alwaysenrol'] = 'Always Enrol';
$string['alwaysenrol_help'] = 'When set to Yes the plugins will always enrol users, even if they already have access to the course through another method.';
$string['auto_desc'] = 'This group has been automatically created by the Auto Enrol plugin. It will be deleted if you remove the Auto Enrol plugin from the course.';
$string['autoenrol:unenrol'] = 'User can unenrol autoenrolled users';
$string['autoenrol:unenrolself'] = 'User can unenrol themselves if they are being enrolled on access';
$string['countlimit'] = 'Limit';
$string['countlimit_help'] = 'This instance will count the number of enrolments it makes on a course and can stop enrolling users once it reaches a certain level. The default setting of 0 means unlimited.';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during automatic enrolments';
$string['emptyfield'] = 'No {$a}';
$string['filter_help'] = 'When a group focus is selected you can use this field to filter which type of user you wish to enrol onto the course. For example, if you grouped by authentication and filtered with "manual" only users who have registered directly with your site would be enrolled.';
$string['filtering'] = 'User Filtering';
$string['g_email'] = 'Email Address';
$string['general'] = 'General';
$string['groupon'] = 'Group By';
$string['groupon_help'] = 'AutoEnrol can automatically add users to a group when they are enrolled based upon one of these user fields.';
$string['instancename'] = 'Custom Label';
$string['instancename_help'] = 'You can add a custom label to make it clear what this enrolment method does. This option is most useful when there are multiple instances of AutoEnrol on one course.';
$string['method'] = 'Enrol When';
$string['method_help'] = 'Power users can use this setting to change the plugin\'s behaviour so that users are enrolled to the course upon logging in rather than waiting for them to access the course. This is helpful for courses which should be visible on a users "my courses" list by default.';
$string['m_site'] = 'Logging into Site';
$string['pluginname_desc'] = 'The automatic enrolment module allows an option for logged in users to be automatically granted entry to a course and enrolled. This is similar to allowing guest access but the students will be permanently enrolled and therefore able to participate in forum and activities within the area.';
$string['removegroups'] = 'Remove groups';
$string['removegroups_desc'] = 'When an enrolment instance is deleted, should it attempt to remove the groups it has created?';
$string['role_help'] = 'Power users can use this setting to change the permission level at which users are enrolled.';
$string['softmatch'] = 'Soft Match';
$string['softmatch_help'] = 'When enabled AutoEnrol will enrol a user when they partially match the "Allow Only" value instead of requiring an exact match. Soft matches are also case-insensitive. The value of "Filter By" will be used for the group name.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"? You can revisit the course to be reenrolled but information such as grades and assignment submissions may be lost.';
$string['warning_message'] = 'Adding this plugin to your course will allow any registered Moodle users access to your course. Only install this plugin if you want to allow open access to your course for users who have logged in.';