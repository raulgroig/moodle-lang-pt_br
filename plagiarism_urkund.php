<?php 

                        
/**
 * Strings for component 'plagiarism_urkund', language 'pt_br', branch 'MOODLE_32_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['allowallsupportedfiles'] = 'Allow all supported file types';
$string['allowallsupportedfiles_help'] = 'This allows the teacher to restrict which file types will be sent to URKUND for processing. It does not prevent students from uploading different file types to the assignment.';
$string['attempts'] = 'Attempts made';
$string['cannotupgradeunprocesseddata'] = '<h1>Cannot upgrade to this version of the plugin due to existing unprocessed data, please revert to an earlier version of this plugin and clear old events.</h1><p>This version of the plugin relies on the new events API in Moodle but your installation contains un-processed events related to the old API.</p>
 You should revert to an older version of the URKUND plugin, put the site into maintenance mode, run the Moodle Cron process and make sure all old events are cleared. Then try upgrading to this version of the URKUND plugin again.</p>
 <p>For more information see: <a href="https://docs.moodle.org/en/Plagiarism_Prevention_URKUND_Settings#Installation_failed_due_to_unprocessed_data">URKUND Installation failed due to unprocessed data</a></p>';
$string['confirmresetall'] = 'This will reset all files in the state: {$a}';
$string['cronwarning'] = 'The <a href="../../admin/cron.php">cron.php</a> maintenance script has not been run for at least 30 min - Cron must be configured to allow URKUND to function correctly.';
$string['debugfilter'] = 'Filter files by';
$string['deletedwarning'] = 'This file could not be found - it may have been deleted by the user';
$string['explainerrors'] = 'This page lists any files that are currently in an error state. <br/>When files are deleted on this page they will not be able to be resubmitted and errors will no longer display to teachers or students';
$string['file'] = 'File';
$string['filedeleted'] = 'File deleted from queue';
$string['fileresubmitted'] = 'File Queued for resubmission';
$string['filesresubmitted'] = '{$a} files resubmitted';
$string['filter30'] = 'Exclude older than 30 days';
$string['filter7'] = 'Exclude older than 7 days';
$string['filter90'] = 'Exclude older than 90 days';
$string['getallscores'] = 'Get all scores';
$string['getscore'] = 'Get score';
$string['getscores'] = 'Get scores';
$string['heldevents'] = 'Held events';
$string['heldeventsdescription'] = 'These are events that did not complete on the first attempt and were queued for resubmission - these prevent subsequent events from completing and may need further investigation. Some of these events may not be relevant to URKUND.';
$string['id'] = 'ID';
$string['identifier'] = 'Identifier';
$string['module'] = 'Module';
$string['name'] = 'Name';
$string['nofilter'] = 'No filter';
$string['noreceiver'] = 'No receiver address was specified';
$string['receivernotvalid'] = 'This is not a valid receiver address.';
$string['report'] = 'report';
$string['restrictcontent'] = 'Submit attached files and in-line text';
$string['restrictcontentfiles'] = 'Only submit attached files';
$string['restrictcontent_help'] = 'URKUND can process uploaded files but can also process in-line text from forum posts and text from the online text assignment submission type. You can decide which components to send to URKUND.';
$string['restrictcontentno'] = 'Submit everything';
$string['restrictcontenttext'] = 'Only submit in-line text';
$string['restrictfiles'] = 'File types to submit';
$string['resubmit'] = 'Resubmit';
$string['resubmitall'] = 'Resubmit all with status: {$a}';
$string['scoreavailable'] = 'This file has been processed by URKUND and a report is now available.';
$string['scorenotavailableyet'] = 'This file has not been processed by URKUND yet.';
$string['sendfiles'] = 'Send queued files';
$string['showall'] = 'Show all errors';
$string['status'] = 'Status';
$string['studentemailcontentnoopt'] = 'The file you submitted to {$a->modulename} in {$a->coursename} has now been processed by the Plagiarism tool URKUND.
{$a->modulelink}';
$string['timesubmitted'] = 'Time submitted';
$string['updateallowedfiletypes'] = 'Update allowed file types and delete urkund records associated with deleted activities.';
$string['urkunddebug'] = 'Debugging';
$string['urkund:enable'] = 'Allow the teacher to enable/disable URKUND inside an activity';
$string['urkund_enableoptout'] = 'Show opt-out link';
$string['urkund_enableoptoutdesc'] = 'Disabling this will remove the option for students to unhide or hide (depending on the default setting) the content of their texts should they be found as a match in other clients’ students’ papers (“opt-in” and “opt-out”). By deactivating this feature, you certify that you will take responsibility for managing the copyright of your students’ submissions and that this does not contravene laws applicable in your country.';
$string['urkund_enableplugin'] = 'Enable URKUND for {$a}';
$string['urkundfiles'] = 'Urkund Files';
$string['urkund:resetfile'] = 'Allow the teacher to resubmit the file to URKUND after an error';
$string['urkund:viewreport'] = 'Allow the teacher to view the full report from URKUND';
$string['waitingevents'] = 'There are {$a->countallevents} events waiting for cron and {$a->countheld} events are being held for resubmission';
$string['wordcount'] = 'Minimum word count';
$string['wordcount_help'] = 'This sets a minimum limit on the number of words that are required for in-line text (forum posts and online assignment type) before the content will be sent to URKUND.';