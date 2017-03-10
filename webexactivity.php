<?php 

                        
/**
 * Strings for component 'webexactivity', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['directlinks'] = 'Direct links';
$string['directlinkstext'] = '<p>These links provide direct access to the recordings on the Moodle server. Access to them doesn\'t require a logging in, and are not logged.</p><br />
Streaming: <a target="_blank" href="{$a->streamurl}" alt="Streaming link">{$a->streamurl}</a><br />
Download: <a target="_blank" href="{$a->fileurl}" alt="Streaming link">{$a->fileurl}</a><br />';
$string['enablecallin'] = 'Enable Telephone Callin';
$string['enablecallin_help'] = 'Enable telephony callin support for newly created meetings. Do not enable unless you have CALLIN telephony support.';
$string['error_'] = '';
$string['error_LI_InvalidTicket'] = 'The login ticket is invalid. Please try again.';
$string['event_meeting_joined'] = 'meeting joined';
$string['externallinktext'] = '<p>This link is for participants who are not enrolled in this course. Students in the course will not need to be emailed this link, as they can just click on the Join meeting link on the previous page. This link should be distributed carefully - anybody with this link will be able to access this meeting.  To invite others to the meeting, copy the URL below and send it to them.  If this is a public meeting, this link can also be placed on a web site.</p>';
$string['getexternallink'] = '<a href="{$a->url}">Get external participant link</a>';
$string['host'] = 'Host';
$string['hostmeetinglink'] = '<a href="{$a->url}">Host Meeting</a>';
$string['hostschedulingexception'] = 'User cannot scheduling a meeting for this host.';
$string['longavailability_help'] = 'Setting this option will leave the meeting available to host until the Extended availability end time. Allows reusable meetings for things like office hours.';
$string['meetingclosegrace'] = 'Meeting grace period';
$string['meetingpast'] = 'This meeting has past.';
$string['meetingtypes_desc'] = 'These are WebEx meeting types supported by this module. For each type, you can select if it is "Available" (you have a license for it in WebEx, and you want it to be able for use it from Moodle), and if you want it to be "Available to all users". Types that are "Available", but not "Available to all users" will only be selectable by people with the mod/webexactivity:allavailabletypes permission. "Meeting password required" is to tell the plugin if WebEx requires a password. Use the "Generate required passwords" below to allows a user to not supply a password.';
$string['modulename_help'] = 'The WebEx Meeting activity allows instructors to schedule meetings into the WebEx web conferencing system*.

When you add the WebEx Meeting activity, you define the date and time of the meeting, as well a number of other optional parameters (such as expected duration, a description, etc). Participants (enrolled students) are then able to enter the WebEx meeting by clicking on a "join meeting" link under the activity in Moodle (teachers will see a link that says "host meeting"). If the meeting is recorded, students will be able to view the recording after the meeting is over.

* WebEx is a web conferencing system that allows students and teachers to synchronously collaborate. It transmits real-time audio and video, and includes tools such as whiteboard, chat, and desktop sharing.';
$string['recordingstreamurl'] = 'Play';
$string['recordingtrashtime'] = 'Recording trash time';
$string['recordingtrashtime_help'] = 'Number of hours a recording will be held before being deleted permanently.';
$string['requiremeetingpassword_help'] = 'Require a user to enter a meeting password. If unchecked, and the meeting type is marked as requiring a password above, a password will be randomly generated.';
$string['search:activity'] = 'WebEx Meeting - activity information';
$string['stream'] = 'Stream';
$string['task_deleterecordings'] = 'Purge deleted recordings';
$string['task_updateallrecordings'] = 'Update all recordings';
$string['task_updatemediumrecordings'] = 'Update medium past recordings';
$string['task_updateopensessions'] = 'Update open sessions';
$string['task_updaterecentrecordings'] = 'Update recent past recordings';
$string['typemeetingcenter_desc'] = '';
$string['typetrainingcenter_desc'] = '';
$string['unknownhostwebexidexception'] = 'WebEx Host ID doesn\'t exist';
$string['webexactivity:hostmeeting'] = 'Host and manage WebEx Meeting';
$string['webexusercollision'] = 'Collision with existing WebEx user.';