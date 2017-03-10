<?php 

                        
/**
 * Strings for component 'vpl', language 'pt_br', branch 'MOODLE_32_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['acceptcertificatesnote'] = '<p>You are using an encrypted connection.<p/>
<p>To use an encrypted connection with the execution servers it is required you accept its certificates.</p>
<p>If you have problems with this process, you can try to use a http (unencrypted) connection or other browser.</p>
<p>Please, click on the following links (server #) and accept the offered certificate.</p>';
$string['always_use_ws'] = 'Always use unencrypted (ws) websocket protocol';
$string['always_use_wss'] = 'Always use encrypted (wss) websocket protocol';
$string['binaryfile'] = 'Binary File';
$string['check_jail_servers_help'] = '<p>This page check and show the status of execution servers used
for this activity.</p>';
$string['clipboard'] = 'Clipboard';
$string['depends_on_https'] = 'Use ws or wss depending on if using http or https';
$string['executionfiles_help'] = '<h2>Introduction</h2>
<p>Here you set the files that are needed to prepare the execution,
debug or assessment of a submission. This includes scripting files,
program test files and data files.</p>
<h2>Default script to run or debug</h2>
<p>If you don\'t set script files for run or  debug submissions, the system
will resolve the language you use (based on file name extensions) and use a
predefined script.
<h2>Automatic evaluation</h2>
<p>The incorporates features to facilitate the evaluation of student\'s submissions.
This feature allows to run the student program and check its output for a given input.
To set up the evaluation cases you must populate the file &quot;vpl_evaluate.cases&quot;.
<p>The file "vpl_evaluate.cases" has the following format:
<ul>
<li> "<strong>case </strong>= Description of case": Optional. Set an start of test case definition.</li>
<li> "<strong>input </strong>= text": can use several lines. Ends with other instruction.</li>
<li> "<strong>output </strong>= text": can use several lines. Ends with other instruction. A case can have differents correct output. There are three types of output: numbers, text and exact test:
<ul>
<li> <strong>number</strong>: defined as sequence of numbers (integers and floats). Only numbers in the output are checked, other text are ignored. Floats are checked with tolerance</li>
<li> <strong>text</strong>: defined as text without double quote. Only words are checked and the rest of chars are ignored, the comparation is case-insensitive </li>
<li> <strong>exact text</strong>: defined as text into double quote. The exact match is used to test the output.</li>
</ul>
</li>
<li> "<strong>grade reduction</strong> = [value|percentage%]" : By default an error reduces student\'s grade
(starts with maxgrade) by (grade_range/number of cases) but with this instruction you can change
the reduction value or percentage.</li>
</ul>
</p>
<h2>General use</h2>
<p>A new file can be added by writing its name in the box  &quot;<b>Add file</b>&quot;
and then clicking on the button &quot;<b>Add file</b>&quot;.</p>
<p>An existing file can be uploaded by means of the  &quot;<b>Upload file</b>&quot;.<p>All the added  or uploaded files can
be edited, and all of them, except the three scripting files mentioned
below, can be renamed or deleted.</p>
<h2>Manual run, execute or evaluation</h2>
<p>Three scripting files to prepare each of the actions may be set.
These files have predefined names: <b>vpl_run.sh</b> (execution),
<b>vpl_debug.sh</b>  (debug) and <b>vpl_evaluate.sh</b> (assessment).</p>
<p>The execution of any of those scripting files should generate a
file named <b>vpl_execution</b>.
This file must be a binary executable or a script beginning with &quot;#!/bin/sh &quot;.
The non-generation of this file impedes to run the selected action.</p>
<p>If the activity that you are configuring is "based on" other activity,
the files of the base activity are added automatically.
The contents of the vpl_run.sh, vpl_debug.sh and vpl_evaluate.sh files
are concatenated from the deepest level of "based on" to the current.</P>
<p>Finally, the file <b>vpl_environment.sh</b> is automatically added.
This scripting file contain information about the submission.
The information come as environment variables: </p>
<ul> <li> LANG:  used language. </li>
<li> LC_ALL: same value as LANG. </li>
<li> VPL_MAXTIME: maximum execution time in seconds. </li>
<li> VPL_FILEBASEURL: URL to access the files of the course. </li>
<li> VPL_SUBFILE#:  each name of the files submitted by the student. # Ranges from 0 to number of submitted files. </Li>
<li> VPL_SUBFILES: list of all submitted files. </li>
<li> VPL_VARIATION + id: where id is the variation order starting with 0 and the value is the value of the variation. </li>
</ul>
If the action requested is evaluation, then the following vars are added too.
<ul>
	<li>VPL_MAXTIME: max time of execution in seconds.</li>
	<li>VPL_MAXMEMORY: max memmory usable</li>
	<li>VPL_MAXFILESIZE: max file size in byte that can be create.</li>
	<li>VPL_MAXPROCESSES: max number of procceses that can be run simultaneous.</li>
	<Li>VPL_FILEBASEURL: URL to the course files.</Li>
	<li>VPL_GRADEMIN: Min grade for this activity</li>
	<li>VPL_GRADEMAX: Max grade for this activity</li>
</ul>
<h2>Assessment result</h2>
<p>Evaluation output is processed to extract, if possible, comments and a proposed grade for the assessment.
Comments can be set in two ways: with a line comment defined by a line beginning with \'Comment :=&gt;&gt;\' or
with block comments starting with a line containing only \'&lt;|--\' and ending with a line containing only \'--|&gt;\'.
The grade is taken from the last line that begins with \'Grade :=&gt;&gt;\'.
</p>';
$string['executionoptions_help'] = '<p>Various execution options are set in this page</p>
<ul>
<li><b>Based on</b>: sets other VPL instance from which some features are imported:
<ul><li>Execution files (concatenating the predefined scripting files)</li>
<li>Limits for the execution resources.</li>
<li>Variations, that are concatenating to generate multivariations.</li>
<li>Maximun length for each file to be uploaded with the submission</li>
</ul>
</li>
<li><b>Run</b>, <b>Debug</b> and <b>Evalaute</b>: must be set to \'Yes\' if the corresponding action can be executed when editing the submission. This affects to the students only, users with  capability of grading can always execute these actions.</li>
<li><b>Evaluate just on submission</b>: the submission is evaluated automatically when it is uploaded.</li>
<li><b>Automatic grading</b>: if the evaluation result includes grading codes, they are used to set the grade automatically.</li>
</ul>';
$string['filelist'] = 'File list';
$string['fulldescription_help'] = '<p>You must write here a full description for the activity.</p>
<p>If you don\'t write anything here, the short description is shown instead.</p>
<p>If you want to evaluate automatically, the interfaces for the assignments must be detailed and non-ambiguous.</p>';
$string['keepfiles_help'] = '<p>Due to security issues, the files added as &quot;Execution files&quot; are deleted before running the file vpl_execution.</p>
If any of those files is needed during the execution (by example, to be used as test data), it must be marked here.';
$string['keyboard'] = 'Keyboard';
$string['load'] = 'Load';
$string['loading'] = 'Loading';
$string['local_jail_servers_help'] = '<p>Here you can set the local execution servers added for this activity and those
that are based on it.</p>
<p>Enter the full URL of a server on each line. You can use blank lines
and comments starting the line with "#".</p>
<p>This activity will use as execution server list: the servers sets here
plus the server list set in the "based on" activity
plus the list of common execution servers.
If you want to prevent this activity and derived ones
from using other servers, then you have to add a line
containing "end_of_jails" at the end of the server list.
</p>';
$string['modulename_help'] = '<p>VPL is a activity module for Moodle that manage programming assignments and whose salient features are:
</p>
<ul>
<li>Enable to edit the programs source code in the browser</li>
<li>Students can run interactively programs in the browser</li>
<li>You can run tests to review the programs.</li>
<li>Allows searching for similarity between files.</li>
<li>Allows setting editing restrictions and avoiding external text pasting.</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Virtual Programming lab Home Page</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['print'] = 'Print';
$string['proxy'] = 'proxy';
$string['proxy_description'] = 'Proxy from Moodle to execution servers';
$string['requestedfiles_help'] = '<p>Here you set names and its initial content up for the requested files to the max number of files that was set in the basic description of the activity.</p>
<p>If you don\'t set names for whole number of files, the unnamed files are optional and can have any name.</p>
<p>You also can add contents to the requested files, so these contents will be available the first time that they will be opened with the editor, if no previous submission exists.</p>';
$string['resourcelimits_help'] = '<p>You can set limits for the execution time, the memory used, the execution files sizes and the number of processes to be executed simultaneously.</p>
<p>These limits are used when running the scripting files vpl_run.sh, vpl_debug.sh and vpl_evaluate.sh and the file vpl_execution built by them.</p>
<p>If this activity is based on other activity, the limits can be affected by those set in the base activity and its ancestors or in the global configuration of the module.</p>';
$string['shortcuts'] = 'Keyboard shortcuts';
$string['testcases_help'] = '<p>This feature allows to run the student program and check its output for a given input.  To set up the evaluation cases you must populate the file &quot;vpl_evaluate.cases&quot;.</p>
<p>The file "vpl_evaluate.cases" has the following format:
<ul>
<li> "<strong>case </strong>= Description of case": Optional. Set an start of test case definition.</li>
<li> "<strong>input </strong>= text": can use several lines. Ends with other instruction.</li>
<li> "<strong>output </strong>= text": can use several lines. Ends with other instruction. A case can have differents correct output. There are three types of output: numbers, text and exact test:
<ul>
<li> <strong>number</strong>: defined as sequence of numbers (integers and floats). Only numbers in the output are checked, other text are ignored. Floats are checked with tolerance</li>
<li> <strong>text</strong>: defined as text without double quote. Only words are checked and the rest of chars are ignored, the comparation is case-insensitive </li>
<li> <strong>exact text</strong>: defined as text into double quote. The exact match is used to test the output.</li>
</ul>
</li>
<li> "<strong>grade reduction</strong> = [value|percentage%]" : By default an error reduces student\'s grade (starts with maxgrade) by (grade_range/number of cases) but with this instruction
you can change the reduction value or percentage.</li>
</ul>';
$string['timeleft'] = 'Time left';
$string['usewatermarks'] = 'Use watermarks';
$string['usewatermarks_description'] = 'Adds watermarks to student\'s files (only to supported languages)';
$string['variations_help'] = '<p>A set of variations can be defined for an activity. These variations are randomly assigned to the students.</p>
<p>Here you can indicate if this activity has variations, put a title for the set of variations, and to add the desired variations.</p>
<p>Each variation has an identification code and a description. The identification code is used by the <b>vpl_enviroment.sh</b> file to pass
the variation assigned to each student to the script files. The description, formatted in HTML, is shown to the students that have assigned
the corresponding variation.</p>';
$string['websocket_protocol'] = 'WebSocket protocol';
$string['websocket_protocol_description'] = 'Type of WebSocket protocol (ws:// or wss://) used by the browser to connect to execution servers.';