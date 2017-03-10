<?php 

                        
/**
 * Strings for component 'report_customsql', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['automaticallydaily'] = 'Scheduled, daily';
$string['categorycontent'] = '({$a->manual} on-demand, {$a->daily} daily, {$a->weekly} weekly, {$a->monthly} monthly)';
$string['crontask'] = 'Ad-hoc database queries: run scheduled reports task';
$string['customdir'] = 'Export csv report to path / directory';
$string['customdir_help'] = 'Files are exported in the CSV format to the file path specified. If a directory is specified the filename format will be reportid-timecreated.csv.';
$string['customdirmustexist'] = 'The directory "{$a}" does not exist.';
$string['customdirnotadirectory'] = 'The path "{$a}" is not a directory.';
$string['customdirnotwritable'] = 'The directory "{$a}" is not writable.';
$string['dailyheader_help'] = 'These queries are automatically run every day at the specified time. These links let you view the results that has already been accumulated.';
$string['manualheader_help'] = 'These queries are run on-demand, when you click the link to view the results.';
$string['monthlyheader_help'] = 'These queries are automatically run on the first day of each month, to report on the previous month. These links let you view the results that has already been accumulated.';
$string['monthlynote_help'] = 'These queries are automatically run on the first day of each month, to report on the previous month. These links let you view the results that has already been accumulated.';
$string['weeklyheader_help'] = 'These queries are automatically run on the first day of each week, to report on the previous week. These links let you view the results that has already been accumulated.';