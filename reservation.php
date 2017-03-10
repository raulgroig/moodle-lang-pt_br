<?php 

                        
/**
 * Strings for component 'reservation', language 'pt_br', branch 'MOODLE_32_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['badsection'] = 'Section does not esists in course "{$a}"';
$string['badteachers'] = 'Specified teacher email with ({$a}) not found';
$string['badteachersmail'] = 'Specified teacher email ({$a}) is bogus';
$string['badtimeclose'] = 'timeclose is bogus';
$string['badtimeend'] = 'timeend is bogus';
$string['badtimeopen'] = 'timeopen is bogus';
$string['badtimestart'] = 'timestart is bogus';
$string['by'] = 'by';
$string['bydate'] = 'Event date';
$string['byname'] = 'Name';
$string['bysection'] = 'Topic/Week';
$string['cancelledon'] = 'Cancelled on';
$string['checkclashes'] = 'Check place and time clashes';
$string['clashesfound'] = 'Some place or time clashes found';
$string['clashesreport'] = 'Clashes report';
$string['cleanview'] = 'View only current reserved';
$string['close'] = 'close';
$string['closed'] = 'Closed';
$string['completionreserved'] = 'Student must reserve to complete this activity';
$string['config'] = 'Reservation module global settings';
$string['configautohide'] = 'This define when reservations must be hidded from reservation list (mod/reservation/index.php). This could be useful if used with public lists, in order to display a cleaned list.';
$string['configcheckclashes'] = 'Enable "Check place and time clashes" button in reservation editing page';
$string['configconnectto'] = 'Define where the module search reservations to connect with';
$string['configdownload'] = 'This define the default download file format for all request and reservation lists.';
$string['configevents'] = 'This setting define which events will be created for every reservation';
$string['configfields'] = 'This setting define which fields will shown in reservations table';
$string['configlocations'] = 'In this page you can manage standard locations for reservations in this Moodle site';
$string['configmanualusers'] = 'This define what list of users is shown in dropdown menu used to manual reserve users.';
$string['configmaxoverbook'] = 'This define the max percentage of overbooking for reservations.';
$string['configmaxrequests'] = 'Define the limit of dropdown menu in reservation edit page';
$string['configminduration'] = 'This indicates reservation event minimal duration. It is used with non-ending events to check time and place availability';
$string['confignotifies'] = 'This setting define which notifies must sent';
$string['configoverbookstep'] = 'This define the percentage granularity of overbooking. Smaller step, greater granularity';
$string['configpubliclists'] = 'This define if reservation lists are public (viewed without login) or not.';
$string['configsortby'] = 'This define how reservation list are sorted.';
$string['configsublimits'] = 'Define the number of sublimits rules row in reservation edit page';
$string['confirmdelete'] = 'Are you sure that you want to delete the selected reservation requests?';
$string['connectedto'] = 'Reservation connected to';
$string['connectto'] = 'Connectable reservation from';
$string['description'] = 'Description';
$string['downloadas'] = 'Default download format';
$string['duration10h'] = '10 hours';
$string['duration10min'] = '10 minutes';
$string['duration11h'] = '11 hours';
$string['duration12h'] = '12 hours';
$string['duration15min'] = '15 minutes';
$string['duration20min'] = '20 minutes';
$string['duration2h'] = '2 hours';
$string['duration30min'] = '30 minutes';
$string['duration3h'] = '3 hours';
$string['duration45min'] = '45 minutes';
$string['duration4h'] = '4 hours';
$string['duration5h'] = '5 hours';
$string['duration5min'] = '5 minutes';
$string['duration60min'] = '60 minutes';
$string['duration6h'] = '6 hours';
$string['duration7h'] = '7 hours';
$string['duration8h'] = '8 hours';
$string['duration90min'] = '90 minutes';
$string['duration9h'] = '9 hours';
$string['enablenote'] = 'Enable users note';
$string['equal'] = 'equal to';
$string['err_sublimitsgreater'] = 'Sublimits sum is greater than max allowed request';
$string['err_timeendlower'] = 'Event end date is set prior start date';
$string['err_timeopengreater'] = 'Reservation start date is set after end date';
$string['eventevent'] = 'Create an event from start to end dates (the event)';
$string['eventrequestadded'] = 'Reservation request added';
$string['eventrequestcancelled'] = 'Reservation request cancelled';
$string['eventrequestdeleted'] = 'Reservation request deleted';
$string['events'] = 'Calendar events';
$string['eventsettings'] = 'Event Settings';
$string['explainconfig'] = 'Administrators can define here global settings for the Resevation Module';
$string['fields'] = 'Shown fields';
$string['fullview'] = 'View also deleted reservations';
$string['gradedmail'] = '{$a->teacher} has posted some feedback on your
reservation \'{$a->reservation}\'

You can see it here:

    {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} has posted some feedback on your
reservation \'<i>{$a->reservation}</i>\'<br /><br />
You can see it <a href=\"{$a->url}\">here</a>.';
$string['importreservations'] = 'Import Reservations';
$string['justbooked'] = 'You are booked as: {$a}';
$string['linenumber'] = '#';
$string['location'] = 'Place';
$string['locations'] = 'Manage Locations';
$string['locationslist'] = 'Locations List';
$string['mail'] = 'Reservation \'{$a->reservation}\' has been closed.

You can download reservation list from:

    {$a->url}';
$string['mailhtml'] = 'Reservation <em>{$a->reservation}</em> has been closed.<br /><br />
You can download reservation list from <a href="{$a->url}">here</a>.';
$string['mailrequest'] = 'Reservation \'{$a->reservation}\' has been closed.

You can get your reservation number on:

    {$a->url}';
$string['mailrequesthtml'] = 'Reservation <em>{$a->reservation}</em> has been closed.<br /><br />
You can get your reservation number <a href="{$a->url}">here</a>.';
$string['manage'] = 'Manage';
$string['manualusers'] = 'Manual reserve show users of';
$string['maxoverbook'] = 'Max overbook percentage';
$string['maxrequest'] = 'Max Reservations';
$string['message'] = 'Message to participants';
$string['minduration'] = 'Event minimal duration';
$string['modulename'] = 'Reservation';
$string['modulename_help'] = '<p>The main aim of this activity is schedule laboratory sessions and exams but you can schedule everything you want.</p><p>Teacher can define the number of seats available for the event, event date, reservation opening and closing date.<br />A reservation may have a grade or a scale.<br />Students can book and unbook a seat and add a note about this reservation.</p><p>After the event starts the teacher can grade the event. Students will notified by mail.</p><p>Reservation list may be downloaded in various formats.</p>';
$string['modulenameplural'] = 'Reservations';
$string['newlocation'] = 'New Locations';
$string['noclashes'] = 'No place and time clashes found';
$string['nocourseswithnsections'] = 'No course found with {$a} sections';
$string['nolimit'] = 'No reservation limit';
$string['nomorerequest'] = 'No more seats available';
$string['nooverbook'] = 'No Overbooking';
$string['noparent'] = 'None';
$string['noreservations'] = 'No reservation to show';
$string['note'] = 'Note';
$string['noteachers'] = 'No available teachers';
$string['notequal'] = 'not equal to';
$string['notifies'] = 'Notifies sent';
$string['notifygrades'] = 'Notify reservation graded to students';
$string['notifystudents'] = 'Notify reservation time closed to students';
$string['notifyteachers'] = 'Notify reservation time closed to teachers';
$string['notopened'] = 'Not opened';
$string['novalues'] = 'No available values for this field';
$string['number'] = 'Reservation Number';
$string['otherlocation'] = 'Other location specified';
$string['overbook'] = 'Overbooking';
$string['overbookonly'] = 'Only overbooked seats available';
$string['overbookstep'] = 'Overbook step';
$string['overview'] = 'Overview';
$string['parent'] = 'Connect this reservation with';
$string['pluginadministration'] = 'Reservation administration';
$string['pluginname'] = 'Reservation';
$string['publiclists'] = 'Reservation public list';
$string['requestoverview'] = 'Requests overview';
$string['requests'] = 'Requests';
$string['reservation:addinstance'] = 'Add a new reservation';
$string['reservationcancelled'] = 'Reservation cancelled';
$string['reservationclosed'] = 'Reservations closed';
$string['reservationdenied'] = 'Reservations not allowed';
$string['reservation:downloadrequests'] = 'Can download requests list';
$string['reservationevent'] = 'Create an event from open to close dates (reservation time)';
$string['reservation:grade'] = 'Can assign grade';
$string['reservation_listing'] = 'Index page settings';
$string['reservation:manualdelete'] = 'Can delete other users requests';
$string['reservation:manualreserve'] = 'Can submit request for other users';
$string['reservationnotopened'] = 'Reservations not yet opened';
$string['reservation_other'] = 'Other settings';
$string['reservation:reserve'] = 'Can submit own requests';
$string['reservations'] = 'Reservations';
$string['reservationsettings'] = 'Reservation Settings';
$string['reservation_settings'] = 'Editing settings';
$string['reservation:uploadreservations'] = 'Can upload reservations';
$string['reservation_view'] = 'View page settings';
$string['reservation:viewnote'] = 'Can view requests note';
$string['reservation:viewrequest'] = 'Can view requests list';
$string['reserve'] = 'Reserve';
$string['reservecancel'] = 'Cancel reservation';
$string['reserved'] = 'Reserved';
$string['reservedon'] = 'Reserved on';
$string['reservedonconnected'] = 'You are already reserved on a connected reservation: {$a}';
$string['resetreservation'] = 'Remove all reservations';
$string['save'] = 'Save grade';
$string['search:activity'] = 'Reservation - activity information';
$string['selectvalue'] = 'Select one of available values';
$string['showrequest'] = 'Users can view requests list';
$string['sortby'] = 'Reservation lists sorted by';
$string['sublimit'] = 'Sublimit {$a}';
$string['sublimitrules'] = 'Sublimits Rules';
$string['sublimits'] = 'Reservation Sublimits';
$string['timeclose'] = 'Reservation end on';
$string['timeend'] = 'End date';
$string['timeopen'] = 'Reservation start on';
$string['timestart'] = 'Start date';
$string['upload'] = 'Reservations upload';
$string['upload_help'] = '<p>Reservations may be uploaded via text file. The format of the file should be as follows:</p><ul><li>Each line of the file contains one record</li><li>Each record is a series of data separated by commas (or other delimiters)</li><li>The first record contains a list of fieldnames defining the format of the rest of the file</li><li>Required fieldsname are section, name and timestart</li><li>Optional fieldsname are course, intro, teachers, timeend, maxgrade, timeopen, timeclose, maxrequest</li><li>If course is not specified it must be choosen after preview</li></ul>';
$string['uploadreservations'] = 'Upload Reservations';
$string['uploadreservationspreview'] = 'Upload Reservations Preview';
$string['uploadreservationsresult'] = 'Upload Reservations Result';
$string['with'] = 'with';
$string['withselected'] = 'With selected...';
$string['yourgrade'] = 'Your grade about this reservation is: {$a->grade}/{$a->maxgrade}';
$string['yourscale'] = 'Your grade about this reservation is: {$a}';