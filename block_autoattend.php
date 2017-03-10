<?php 

                        
/**
 * Strings for component 'block_autoattend', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['attendanceconfrm'] = 'Attendance Confirmation';
$string['email_user_attend_C'] = '{$a->fullname} [{$a->date} {$a->starttm}-{$a->endtm}]: Your attendance was changed. Please check it at Web.';
$string['email_user_attend_L'] = '{$a->fullname} [{$a->date} {$a->starttm}-{$a->endtm}]: Your attendance became "Late"';
$string['email_user_attend_P'] = '{$a->fullname} [{$a->date} {$a->starttm}-{$a->endtm}]: Your attendance became "Presence"';
$string['email_user_attend_X'] = '{$a->fullname} [{$a->date} {$a->starttm}-{$a->endtm}]: Your attendance became "Absent"';
$string['ipresolv'] = 'Reverse lookup URL of IP address';
$string['ipresolv_desc'] = 'URL for looking up the IP address of student\'s connection origin in reverse is specified.
An IP address portion is described to be %s';
$string['ipresolv_url'] = 'http://whois.arin.net/rest/nets;q=%s?showDetails=true';
$string['keyerrattention'] = 'Attendance keyword is mismatch. Please confirm keyword to your teacher.<br />And try again!!';
$string['keyerroccur'] = 'Attendance keyword error is occurred.';
$string['keyword'] = 'Keyword';
$string['Lacronym'] = 'L';
$string['Ldesc'] = 'Late';
$string['Ltitle'] = 'L';
$string['minute'] = 'Minute';
$string['mismatchip'] = 'Your IP is not corresponding allowed IPs. Your IP is';
$string['mismatchkey'] = 'Not corresponding keyword';
$string['missinfo'] = 'Missing need Information';
$string['Mmethod'] = 'M';
$string['Mmethodfull'] = 'Manual';
$string['monday'] = 'Mon.';
$string['months'] = 'Months';
$string['myvariables'] = 'Grade settings';
$string['needkeyword'] = 'This submition need keyword. Please input attendance keyword.';
$string['nevererror'] = 'Never Occur ERROR!!!';
$string['newdate'] = 'New date';
$string['newsessionduration'] = 'New Duration';
$string['newsessionendtime'] = 'New End Time';
$string['newsessionlatetime'] = 'New Late Time';
$string['newsessionmethod'] = 'New Method';
$string['newsessionstarttime'] = 'New Start Time';
$string['noattforuser'] = 'No attendances exist for the user';
$string['nodescription'] = 'nothing';
$string['nonclass'] = 'No Class';
$string['noofdaysabsent'] = 'No of days absent';
$string['noofdaysexcused'] = 'No of days excused';
$string['noofdayslate'] = 'No of days late';
$string['noofdayspresent'] = 'No of days present';
$string['nosessiondayselected'] = 'No Session day selected';
$string['nosessionexists'] = 'No Session exist in this course';
$string['nosuchsession'] = 'No such session in this course';
$string['nosuchuser'] = 'No such user in this course';
$string['notaccessguest'] = 'Guests cannot access this page';
$string['notaccessnoteacher'] = 'Except for a teacher cannot access this page';
$string['notaccessstudent'] = 'Students cannot access this page';
$string['notcallthis'] = 'You cannot call this script in that way';
$string['novalue'] = '-';
$string['nowtime'] = 'Time Now';
$string['nowtime_help'] = 'When this  displayed time is not in same with the present time, the time of this autoattendance block are inaccurate. <br />
If when the time is absolutely do not match, please check the time zone (date.timezone) in php.ini of PHP.';
$string['Nstate'] = 'N';
$string['Nstatefull'] = 'Not Started';
$string['olddate'] = 'Old date';
$string['oldsessionduration'] = 'Old Duration';
$string['oldsessionendtime'] = 'Old End Time';
$string['oldsessionlatetime'] = 'Old Late Time';
$string['oldsessionmethod'] = 'Old Method';
$string['oldsessionstarttime'] = 'Old Start Time';
$string['Ostate'] = 'O';
$string['Ostatefull'] = 'Opened';
$string['output_idnumber'] = 'Output/Display idnumbers of students';
$string['output_idnumber_desc'] = 'idnumbers of students are included in download data and displayed at Report.';
$string['Pacronym'] = 'P';
$string['page_column_size'] = 'Column size of page';
$string['page_column_size_desc'] = 'A user name is displayed for every number of columns of this.';
$string['page_row_size'] = 'Row size of page';
$string['page_row_size_desc'] = 'A header is displayed for every number of lines of this.';
$string['Pdesc'] = 'Present';
$string['period'] = 'Period';
$string['pleasefeedback'] = 'Please Feedback';
$string['pluginname'] = 'Auto Attendance Block';
$string['Ptitle'] = 'P';
$string['recalcgrades'] = 'Recalc Grades';
$string['refreshdata'] = 'Refresh';
$string['remarks'] = 'Remarks';
$string['removefeedback'] = '(this link can be turned OFF in settings of mod_autoattendmod Module)';
$string['repairdb'] = 'Repair of DB';
$string['repairdbconfirm'] = 'Do you execute to repair of DB?';
$string['repairok'] = 'Repair';
$string['report'] = 'Report';
$string['reqinfomiss'] = 'Required Information is missing';
$string['restoredefaults'] = 'Restore defaults';
$string['return'] = 'Return';
$string['returnbutton'] = 'Return';
$string['returnto_course'] = 'Return';
$string['returntoN'] = 'return to \'Not Started\'';
$string['returntoNconfirm'] = 'Do you really return this session to \'Not Started\' state?';
$string['returntoNdesc'] = 'Even if you return this session to \'Not Started\' state, attendances taken by manual and semi-auto mode are not cleared.';
$string['sameusedip'] = 'Your IP is corresponding other used IPs. Your IP is';
$string['saturday'] = 'Sat.';
$string['sdaysmiss'] = 'Missing days parameter';
$string['selectall'] = 'Select All';
$string['semiautoattend'] = 'Semi Automatic Attendance';
$string['semiautoconfirm'] = 'You can sumbit an attendance of below session. Do you submit an attendance?';
$string['session'] = 'Session';
$string['sessionadded'] = 'Session successfully added';
$string['sessionallowip'] = 'Allowed IPs';
$string['sessionallowip_help'] = 'The range of the IP addresses of the terminal which permits attendance are specified.
Basically format is list of "IP address/submetmask" that divided with the blank or the comma. But you can use the following forms, too<br />
<br />
* The prefix length notation is also possible instead of a subnetmask. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26.155.0/16 => 202.26.0.0/255.255.0.0 <br />
<br />
* When a part of IP address is omitted, it is regarded as 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26./255.255.255.0 => 202.26.0.0/255.255.255.0<br />
<br />
* When a parts of subnetmask is omitted, it is regarded as 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26.100.2/255.255. => 202.26.0.0/255.255.0.0 <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26./255.255.255. => 202.26.0.0/255.255.255.0<br />
<br />
* When all subnet masks are omitted, the portion omitted by the IP address is 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202. => 202.0.0.0/255.0.0.0<br />
<br />
ex.) 192.168.100. 202.26.144.0/255.255.255. 202.26.148.122';
$string['sessionalreadyexists'] = 'Session already exists in this date';
$string['sessiondate'] = 'Session Date';
$string['sessiondays'] = 'Session Days';
$string['sessiondeleted'] = 'Session successfully deleted';
$string['sessionduration'] = 'Duration';
$string['sessionenddate'] = 'Session End Date';
$string['sessionendtime'] = 'End Time';
$string['sessionexist'] = 'Session not added (already exist)!';
$string['sessionlatetime'] = 'Late Time';
$string['sessionmethod'] = 'Method';
$string['sessionmulti'] = 'Create multiple sessions';
$string['sessionscompleted'] = 'Completed';
$string['sessionsgenerated'] = 'Sessions successfully generated';
$string['sessionsnogenerated'] = 'There is no generated session';
$string['sessionstartdate'] = 'Session Start Date';
$string['sessionstarttime'] = 'Start Time';
$string['sessiontable'] = 'Sessions';
$string['sessionupdated'] = 'Session successfully updated';
$string['sessionupdateerror'] = 'Session update Error';
$string['setrandomkey'] = 'Random Key';
$string['showdefaults'] = 'Show defaults';
$string['Smethod'] = 'S';
$string['Smethodfull'] = 'Semi Auto';
$string['starttime'] = 'Start';
$string['status'] = 'Status';
$string['strftimecalled'] = '%H:%M (%d/%m)';
$string['strftimedm'] = '%d/%m';
$string['strftimedmshort'] = '%d/%m';
$string['strftimedmy'] = '%d/%m/%Y';
$string['strftimedmyw'] = '%d/%m/%y (%a)';
$string['strftimefull'] = '%H:%M %d/%m/%Y';
$string['strftimehmshort'] = '%H:%M';
$string['strftimehourmin'] = '%H:%M';
$string['strftimeshortdate'] = '%d/%m/%Y';
$string['studentid'] = 'Student ID';
$string['students_list'] = 'Users List';
$string['submitattend'] = 'Submit Attendance';
$string['submitok'] = 'Submit';
$string['sunday'] = 'Sun.';
$string['takeattendance'] = 'Take Attendance';
$string['takemanualattend'] = 'Attendance';
$string['thursday'] = 'Thu.';
$string['title'] = 'Title';
$string['toNok'] = 'OK';
$string['toNtitle'] = 'to Not Started';
$string['tuesday'] = 'Tue.';
$string['unknownclass'] = 'Unknown Class';
$string['update'] = 'Update';
$string['updateordel'] = 'Update or Delete';
$string['updatesessionattend'] = 'Update Session Attendance';
$string['updatesessioninfo'] = 'Update Session Information';
$string['updateuserattend'] = 'Update User Attendance';
$string['use_timeoffset'] = 'Use Timeoffset of the Timezone';
$string['use_timeoffset_desc'] = 'Timeoffset of the Timezone is used for Administrator.';
$string['validclasses'] = 'Valid Classes';
$string['variablesupdated'] = 'Grade variables successfully updated';
$string['variablesupdateerror'] = 'Grade variables update Error';
$string['wednesday'] = 'Wed.';
$string['week'] = 'week(s)';
$string['weeks'] = 'Weeks';
$string['wiki_url'] = 'http://docs.moodle.org/25/en/Autoattendance_block';
$string['wrongdatesselected'] = 'Wrong date selected';
$string['wrongtimesselected'] = 'Wrong time selected';
$string['Xacronym'] = 'A';
$string['Xdesc'] = 'Absent';
$string['Xtitle'] = 'A';
$string['Yacronym'] = 'N';
$string['Ydesc'] = 'Not Called';
$string['Ytitle'] = 'N';
$string['Zdesc'] = 'Absent or Not Called';