<?php 

                        
/**
 * Strings for component 'adobeconnect', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['actinbtngrp'] = '';
$string['event_assign_role'] = 'User assigned a Connect Pro role';
$string['event_join_meeting'] = 'User joined a meeting';
$string['event_unassign_role'] = 'User unassigned a Connect Pro role';
$string['event_view'] = 'Viewed activity';
$string['event_view_all'] = 'Viewed all instances of the activity';
$string['event_view_recording'] = 'User viewed a recording';
$string['meetingtype_help'] = '<p>A public meeting type is one where anyone who has the URL for the meeting can enter the room.</p>
<p>A private meeting type is one where only registered users and participants can enter. The login page does not allow
guests to log in.  With private meetings the meeting does not actually start until the meeting Presenter or Host joins the meeting.</p>

<p>
If you are creating a private meeting it is always good practice to assign at
least 1 host or presenter who will be present in the meeting; because users with
the participant role will be unable to join the meeting unless a user with the
host or presenter roles has already joined th meeting.
</p>

<p>
If the meeting has support for separate groups at least 1 user in each group, who is
to be present in the meeting, should have either the host or presenter role.
</p>';
$string['meeturl_help'] = '<p>You can customize the URL that is used to connect to the Adobe connect meeting.  The Adobe Server domain will always remain the same.
  However the last part of the URL can be customized.
</p>
<p>For example if the Adobe Connect server domain was located at <b>http://adobe.connect.server/</b>
  when customizing the URL to <b>mymeeting</b>, the URL to connect to the meeting would be <b>http://adobe.connect.server/mymeeting</b>.  Leave out the trailing forward slash
</p>
<p>Valid URL entries consists of the name with
<ul>
<li>mymeeting</li>
<li>/mymeeting</li>
</ul>

Invalid URL entries consist of more than one forward slash:
<ul>
<li>mymeeting/mymeeting</li>
<li>mymeeting/mymeeting/</li>
<li>mymeeting/mymeeting//anothermeeting</li>
<li>mymeeting/</li>
</ul>

</p>
<p>Once the meeting has been saved, you will no longer be able to edit/update this field as the field will be disabled.
If updating the activity settings and if <b>Groups Mode</b> is set to no group then you will see part of the URL in the text field.
Otherwise the text field will remain blank as each course group will have their own meeting URL.
</p>';
$string['record_force_desc'] = 'Force all Adobe Connect meetings to be recorded.  This is a site wide effect and the Adobe Connect server must be restarted';
$string['settingblurb'] = '<center><img src="{$a->image}" /></center><br />
    <p>Adobe Systems Inc. and Remote-Learner.net have partnered together to create the first publicly available
    and officially sponsored, integration method between Moodle and Adobe Acrobat Connect Pro. This new
    integration is designed to simplify the use of synchronous events within Moodle. It provides a
    single-sign-on between the two systems with easy creation and management of Adobe Connect Pro
    meetings.</p><br />
    <p><center>About Remote-Learner</center>
    Remote-Learner has been providing educational technologies services since 1982 to its business,
    educational and governmental clients. Today, these services include support for best-of-breed
    open source programs. Remote-Learner is an official Moodle partner, JasperSoft partner and
    Alfresco partner. The company offers SaaS hosting services, IT support contracts, custom
    programming, workforce development training, instructional design and strategic consulting
    services for organizations planning online learning programs.</p><br />
    <p>Visit the <a href="{$a->url}">Adobe Connect Moodle Plugins Directory</a> for information on Enterprise support.</p>';
$string['usergrouprequired'] = 'This Meeting requires users to be in a group in order to join';