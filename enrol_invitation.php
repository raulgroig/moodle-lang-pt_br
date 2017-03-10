<?php 

                        
/**
 * Strings for component 'enrol_invitation', language 'pt_br', branch 'MOODLE_25_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['cannotsendmoreinvitationfortoday'] = 'No invitations left for today. Try later.';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during invitation enrolments';
$string['emailaddressnumber'] = 'Email address {$a}';
$string['emailmessageinvitation'] = '{$a->managername} invited you to join {$a->fullname}.

To join, click the following link: {$a->enrolurl}

You will need to create an account if you don\'t have one yet.

{$a->sitename}
-----------------------------
{$a->siteurl}';
$string['emailmessageuserenrolled'] = '{$a->userfullname} has enrolled in {$a->coursefullname}.

Click the following link to check the new enrolments: {$a->courseenrolledusersurl}

{$a->sitename}
-------------
{$a->siteurl}';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod_desc'] = 'Default enrolment validity duration (in seconds). If set to zero, the enrolment validity duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['invitationpagehelp'] = '<ul><li>You have {$a} invitation(s) left for today.</li><li>Each invitation is unique and expires once used.</li></ul>';
$string['maxinviteperday_help'] = 'Maximum number of invitations that can be sent per day for this course.';
$string['noinvitationinstanceset'] = 'No invitation enrolment instance has been found. Please add an invitation enrol instance to your course first.';
$string['pluginname_desc'] = 'The Invitation module allows to send invitations by email. These invitations can be used only once. Users clicking on the email link are automatically enrolled.';
$string['status'] = 'Allow invitation enrolments';
$string['status_desc'] = 'Allow users to invite people to enrol into a course by default.';
$string['unenrol'] = 'Unenrol user';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['unenroluser'] = 'Do you really want to unenrol "{$a->user}" from course "{$a->course}"?';