<?php 

                        
/**
 * Strings for component 'allocationform', language 'pt_br', branch 'MOODLE_29_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['currentstate'] = 'Current state:';
$string['editingmode'] = 'Editing';
$string['modulename_help'] = 'The allocation form can be used to assign students to between one and ten options (for example modules, assignments, placements...)

The teacher defines:

* The list of options available to students.
* The number of students who can be assigned to an option.
* How many options students are assigned to (between one and ten)
* How many options a student can rank (between one and ten)
* If students are able to select an option that they do not wish to be allocated to.
* The last point at which students can submit a choice.

Warning: When switching the activity from active mode back into editing mode, any choices made by students will be deleted.

After the close date the form will attempt to do a \'best fit\' allocation of the students so that:

* As many students get assigned to options as high on their ranking as possible.
* Students will never be assigned to a choice they select as \'Do not want\'.
* Students will not be assigned to options that they have been restricted from selecting.
* Students who do not make a choice will be allocated last.

After the allocations have been processed teachers may:

* Review the result and ammend the number of students allocated to options before they release the results to students.
* Get a csv of the student choices.
* Get a csv of the allocations.';
$string['noformdatapassed'] = 'No form data was passed.  No update performed.';
$string['notwant_help'] = 'If selected a user will be given the oportunity to specify an option they do not wish to be allocated to';
$string['processedmode'] = 'Processed';
$string['processmode'] = 'Processing';
$string['readymode'] = 'Active';
$string['restrictionsexceeded'] = 'You have exceeded the number of workable restrictions for {$a->users} user(s).  At least {$a->numberofchoices} available options are required per user.';
$string['reviewmode'] = 'Review';