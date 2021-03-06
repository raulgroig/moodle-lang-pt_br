<?php 

                        
/**
 * Strings for component 'report_trainingsessions', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['activitytime_help'] = '<p>This time calculation considers all use time spent in course activities, letting course
    layout times out of calculation. In certain cases (when using the Learning Time Check (non standard) with
    standard time allocation (http://github.com/vfremaux/moodle-mod_learningtimecheck.git), additional
    standard time are used rather than real extracted times from log.</p>';
$string['addcoursegrade'] = 'Course scores';
$string['addmodulelabel'] = 'Add activity module';
$string['addmoduletitle'] = 'Add an activity module you want to add grade in report';
$string['authoritysign'] = 'Education Authority';
$string['batchdate'] = 'Task date';
$string['batchdate_help'] = '<p>This setting means the exact date at which the batch will be lauched and the documents generated. If you fear the documents are heavy (lot
 of students, lot of histories to track), choose a date/time in a low load period of your server.</p>';
$string['batchreports_task'] = 'Batch reports';
$string['bgcolor'] = 'Background color';
$string['checklistadvice'] = 'Special side completion effects';
$string['colors'] = 'Colors';
$string['columnname'] = 'Column name:';
$string['contiguoussessions'] = 'Contiguous sessions';
$string['coupling'] = 'Coupling';
$string['courseglobals'] = 'Course global areas';
$string['coursegrade'] = 'Enable course score';
$string['courselabel'] = 'as column:';
$string['courseraw'] = 'Batchs';
$string['coursesessions'] = 'Working sessions in course (real guessed times)';
$string['coursestart'] = 'Course start date';
$string['coursesummary'] = 'Participant summary';
$string['crop'] = 'Crop out of range sessions';
$string['csv'] = 'Text (CSV)';
$string['csvoutputtoiso'] = 'Iso CSV Output';
$string['csvoutputtoiso_desc'] = 'If enabled, the course raw report will be generated in ISO-8859-1 encoding for old CSV compliant applications.';
$string['currentcourse'] = 'Current course';
$string['disabled'] = '|--------- disabled -----------|';
$string['done'] = 'Performed:';
$string['elapsedadvice'] = 'Elapsed time can be different from session time range due to extra credit times on sessions breaks. Refer to the Use Stats block configuration.';
$string['email'] = 'Email';
$string['enablecoursescore'] = 'Enable course score';
$string['enablelearningtimecheckcoupling'] = 'Enable LTC coupling';
$string['enablelearningtimecheckcoupling_desc'] = 'If enabled, the trainingsession session reports will use the working days filtering of the Learning Time Check Report';
$string['enterprisesign'] = 'Enterprise';
$string['equlearningtime_help'] = '<p>Equivalent learning time summarizes all time spent in course, including standard allocation times if
    the Learning Time Check checklist module is used (http://github.com/vfremaux/moodle-mod_learningtimecheck.git).</p>';
$string['errorbadcoursestructure'] = 'Course structure error : bad id {$a}';
$string['errorcoursestructurefirstpage'] = 'Course structure error : failed getting first page';
$string['errorcoursetoolarge'] = 'Course is too large. Choosing a group';
$string['errornotingroup'] = 'You have not access to all users and do not have any group membership.';
$string['extrauserinfo'] = 'Additional user info in reports';
$string['extrauserinfo_desc'] = 'You can optionnaly add user field data to the user info part';
$string['firstaccess'] = 'First access';
$string['firstenrolldate'] = 'First enroll';
$string['firstname'] = 'First Name';
$string['from'] = 'From';
$string['generateCSV'] = 'Generate as CSV';
$string['generatePDF'] = 'Generate as PDF';
$string['gradesettings'] = 'Grade settings';
$string['head1application'] = 'Head 1 colors are uses on top super header row when suitable.';
$string['head2application'] = 'Head 2 colors are uses on normal header row just above data columns. this is the most common case.';
$string['head3application'] = 'Head 3 coors are used on end of table sumarizer, xhen suitable.';
$string['hideemptymodules'] = 'Hide empty modules';
$string['hideemptymodules_desc'] = 'Is enabled, empty modules (no time spent) will not be printed into reports.';
$string['hitslastweek'] = 'Hits last week';
$string['id'] = 'ID';
$string['idnumber'] = 'ID Number';
$string['in'] = 'In time';
$string['insessiontime'] = 'Inside rules learning time';
$string['insessiontime_help'] = 'This is the "in" learning time that matched validated rules';
$string['instructure'] = 'Time in course activities';
$string['interactive'] = 'Interactive';
$string['interactivetitle'] = 'Produce this batch now!';
$string['items'] = 'Items';
$string['lastaccess'] = 'Last access';
$string['lastname'] = 'Surname';
$string['layout'] = 'Document layout';
$string['learningtimecheckadvice_help'] = '<p>When using a Learning Time Check module that enables teachers to validate activities without
any student interaction in the course, some apparent information discrepancy may appear.</p>
<p>This is a normal situation that reports consistant information regarding the effective
    use of the platform</p>';
$string['learningtimesessioncrop'] = 'Operation on out of range sessions';
$string['learningtimesessioncrop_desc'] = 'When coupling with learningtimecheck, out of valid range sessions could be croped, or kept and only marked into reports';
$string['libsmissing'] = 'This feature has been disabled as libs are missing. Install libs from http://github.com/vfremaux/moodle-local_vflibs to get PDF generation enabled.';
$string['mark'] = 'Mark out of range sessions';
$string['modgrade'] = 'Activity grade';
$string['modulegrade'] = 'Activity module';
$string['modulegrades'] = 'Activity grades';
$string['modulegrades_help'] = 'You can add here more columns to the report from the course grade book, choosing the activity module that will be source for the score.
   You may also define the column label that will be used for this column in the report sheets. If left blank, the column name will be in order
   of availability, the coursemodule IDnumber, or a module identifier built in by Moodle.';
$string['never'] = 'Never';
$string['newtask'] = 'Add a new batch';
$string['nosessions'] = 'No measurable session data';
$string['nostructure'] = 'No measurable course structure detected';
$string['nothing'] = 'No users to compile';
$string['now'] = 'Now !';
$string['onefulluserpersheet'] = 'One full user information per sheet';
$string['oneuserperrow'] = 'One user summary information per row in a single sheet';
$string['othertime'] = 'Other (non activity) time';
$string['othertime_help'] = '<p>Elapsed time that cannot be directly assigned to a course activity module.</p>';
$string['out'] = 'Out time';
$string['outofgroup'] = 'No group';
$string['outofstructure'] = 'Other course use time';
$string['outputdir'] = 'Output directory';
$string['outputdirectory'] = 'Output directory in local course files';
$string['outputdir_help'] = '<p>You may select an output subdirectory for generating your output documents. Note that the storage context where to find those documents
    is the course from where you programmed the batch, even if the compilation course mentionned "All courses"</p>';
$string['outsessiontime'] = 'Out rules remaining time';
$string['outsessiontime_help'] = 'This is the remaining learning time that do NOT match validation rules';
$string['parts'] = 'parts';
$string['pdf'] = 'PDF';
$string['pdfabsoluteverticaloffset'] = 'Doc abs. vert. offset';
$string['pdfabsoluteverticaloffset_desc'] = 'Tells the starting offset of the content generation relative to top of page in pdf generation (in mm).';
$string['pdfpage'] = 'Page:';
$string['pdfpagecutoff'] = 'PDF page height cutoff';
$string['pdfpagecutoff_desc'] = 'Height in page for switching to next page (in mm).';
$string['pdfreportfooter'] = 'PDF report footer image';
$string['pdfreportfooter_desc'] = 'Provide a JPG image for the bottom footer (880px large x up to 100px height)';
$string['pdfreportheader'] = 'PDF report header image';
$string['pdfreportheader_desc'] = 'Provide a JPG image for the top header part (880px large x up to 220px height)';
$string['pdfreportinnerheader'] = 'PDF report inner header image';
$string['pdfreportinnerheader_desc'] = 'Provide a JPG image for the top header part in inner pages (880px large x up to 150px height). If none given, the first page header will be used again.';
$string['periodshift'] = 'Shift period';
$string['periodshiftto'] = 'Shift "to" date only';
$string['printidnumber'] = 'Print ID Number';
$string['printidnumber_desc'] = 'If checked, adds IDNumber to reports';
$string['printsessiontotal'] = 'Display the overal session elapsed time';
$string['printsessiontotal_desc'] = 'Do NOT display the total session time in on screen session reports.';
$string['quickgroupcompile'] = '<h3>Quick Compile for {$a} users:</h3><p>Quick compilation provides a quick summary report for groups less than 50 users, directly in the root directory of your course files.</p>';
$string['quickmonthlyreport'] = 'Quick monthly reports (PDF)';
$string['range'] = 'Range';
$string['recipient'] = 'Recipient';
$string['recipient_desc'] = 'Default recipient of the PDF documents. May be locally overloaded by each operator.';
$string['replay'] = 'Replay';
$string['replaydelay'] = 'Replay delay (min)';
$string['replaydelay_help'] = '<p> If set to a positive value (in minutes), the batch will not be discarded after execution, but replayed continuously with that delay.
 Start date and/or end date will be shifted accordingly if a sliding period replay is selected.</p>';
$string['reportdate'] = 'Report date';
$string['reportfilemanager'] = 'Report files manager';
$string['reportformat'] = 'Document format';
$string['reportforuser'] = 'Report for';
$string['reportlayout'] = 'Report layout';
$string['reportscope'] = 'Scope';
$string['reportscope_help'] = '<p>Some reports allow scanning all courses of the user. Note that some reports do not use the scope.</p>';
$string['scheduledbatches'] = 'Scheduled batches';
$string['scoresettings'] = 'Score Reporting Settings';
$string['scoresettingsadvice'] = 'In course summary reports (one user per line), you may add additional output columns with scores from the gradebook. You can add the global course grade, or choose to add one (or more) single activity grade(s) in the report.';
$string['selectforreport'] = 'Select for reports';
$string['sessionduration'] = 'Session duration';
$string['sessionreportdoctitle'] = 'Session report';
$string['sessionreporttitle'] = 'Session report document caption';
$string['sessionreporttitle_desc'] = 'Printed on first page of a user session report';
$string['sessions'] = 'Working sessions (real guessed times)';
$string['sessionsonly'] = 'User sessions only';
$string['showhits'] = 'Show events (csv)';
$string['showhits_desc'] = 'If set, the hit count will be added to the CSV lines';
$string['singleexec'] = 'Single run';
$string['siteglobals'] = 'Site (non course sections)';
$string['structureitem'] = 'Course trackable item';
$string['structuretotal'] = 'Total {$a}:';
$string['studentsign'] = 'Student';
$string['task'] = 'Task {$a}';
$string['taskname'] = 'Task';
$string['taskrecorded'] = 'Task successfully recorded';
$string['teachersign'] = 'Teacher';
$string['textapplication'] = 'This is a setting for default text of the document.';
$string['textcolor'] = 'Text color';
$string['timeperpart'] = 'Time elapsed per part';
$string['timespent'] = 'Spent';
$string['timespentlastweek'] = 'Spent last week';
$string['to'] = 'To';
$string['tonow'] = 'To now';
$string['toobig'] = '<p>Compilation group is too big to be performed in quick compilation. We incline you programming a delayed batch at a time that will not affect your currently working users.<br/>To setup a batch, preset the compilation parameters in the above form, and register a new batch with the desired configuration, and setting batch time and output dir from the course file storage location origin (relative path, absolute path rejected).</p><p>You can also program a regular compilation batch that will compile every \"replaydelay\" minutes to the desired output.</p>';
$string['totalsessiontime'] = 'Total working sessions time';
$string['totalsessiontime_help'] = 'Note that session list counts some durations that can be outside this course. Total session time should usually be higher than in course time calculation';
$string['totalsitetime'] = 'Total site time';
$string['trainingsessions:batch'] = 'Can batch reports';
$string['trainingsessions:downloadreports'] = 'Can download report documents';
$string['trainingsessions:iscompiled'] = 'Is compiled in reports';
$string['trainingsessionsreport'] = 'Training Session Reports';
$string['trainingsessionsscores'] = 'Score addition to reports';
$string['trainingsessions:view'] = 'Can view training session report';
$string['trainingsessions:viewother'] = 'Can view training session reports from other users';
$string['unvisited'] = 'Unvisited';
$string['updatefromcoursestart'] = 'Get from course start';
$string['uploadglobals'] = 'File uploads';
$string['userlist'] = 'One row per participant';
$string['usersheets'] = 'One sheetset per participant';
$string['usersummary'] = 'Participant summary';
$string['visiteditems'] = 'Visited Items.';
$string['xls'] = 'XLS';