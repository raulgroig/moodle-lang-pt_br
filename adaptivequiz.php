<?php 

                        
/**
 * Strings for component 'adaptivequiz', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['answerdistgraph_numrightwrong'] = 'Num wrong (-)  /  Num right (+)';
$string['attemptquestion_ability'] = 'Ability Measure';
$string['attemptquestion_abilitylogits'] = 'Measured Ability (logits)';
$string['attemptquestion_difficulty'] = 'Question Difficulty (logits)';
$string['attemptquestion_diffsum'] = 'Difficulty Sum';
$string['browsersecurity_help'] = 'If "Full screen pop-up with some JavaScript security" is selected the quiz will only start if the student has a JavaScript-enabled web-browser, the quiz appears in a full screen popup window that covers all the other windows and has no navigation controls and students are prevented, as far as is possible, from using facilities like copy and paste';
$string['calcerrorwithinlimits'] = 'Calculated standard error of {$a->calerror} is within the limits imposed by the activity {$a->definederror}';
$string['completeattempterror'] = 'Error trying to complete attempt record';
$string['confirmdeleteattempt'] = 'Confirming the deletion of attempt from {$a->name} submitted on {$a->timecompleted}';
$string['discrimination_display_name'] = 'Discrimination';
$string['errorattemptstate'] = 'There was an error in determining the state of the attempt';
$string['errorclosingattempt_alreadycomplete'] = 'This attempt is already complete, it cannot be manually closed.';
$string['errorfetchingquest'] = 'Unable to fetch a questions for level {$a->level}';
$string['errorlastattpquest'] = 'Error checking the response value for the last attempted question';
$string['errornumattpzero'] = 'Error with number of questions attempted equals zero, but user submitted an answer to previous question';
$string['errorsumrightwrong'] = 'Sum of correct and incorrect answers does not equal the total number of questions attempted';
$string['formelementdecimal'] = 'Input a decimal number.  Maximum 10 digits long and maximum 5 digits to the right of the decimal point';
$string['formstartleveloutofbounds'] = 'The starting level must be a number that is inbetween the lowest and highest level';
$string['graphlegend_target'] = 'Target Level';
$string['highestlevel_help'] = 'The highest or most difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['highlevelusers'] = 'Users above the question-level';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Individual user attempts report for {$a}';
$string['leveloutofbounds'] = 'Requested level {$a->level} out of bounds for the attempt';
$string['lowestlevel'] = 'Lowest level of difficulty';
$string['lowestlevel_help'] = 'The lowest or least difficult level the assessment can select questions from.  During an attempt the activity will not go beyond this level of difficulty';
$string['lowlevelusers'] = 'Users below the question-level';
$string['maximumquestions'] = 'Maximum number of questions';
$string['maximumquestions_help'] = 'The maximum number of questions the student can attempt';
$string['maxquestattempted'] = 'Maximum number of questions attempted';
$string['midlevelusers'] = 'Users near the question-level';
$string['minimumquestions'] = 'Minimum number of questions';
$string['minimumquestions_help'] = 'The minimum number of questions the student must attempt';
$string['missingtagprefix'] = 'Missing tag prefix';
$string['modulename'] = 'Adaptive Quiz';
$string['modulename_help'] = 'The Adaptive Quiz activity enables a teacher to create quizes that efficiently measure the takers\' abilities. Adaptive quizes are comprised  of questions selected from the question bank that are tagged with a score of their difficulty. The questions are chosen to match the estimated ability level of the  current test-taker. If the test-taker succeeds on a question, a more challenging question is presented next. If the test-taker answers a question incorrectly, a less-challenging question is presented next. This technique will develop into a sequence of questions converging on the test-taker\'s effective ability level. The quiz stops when the test-taker\'s ability is determined to the required accuracy.

This activity is best suited to determining an ability measure along a unidimensional scale. While the scale can be very broad, the questions must all provide a measure of ability or aptitude on the same scale. In a placement test for example, questions low on the scale that novices are able to answer correctly should also be answerable by experts, while questions higher on the scale should only be answerable by experts or a lucky guess. Questions that do not discriminate between takers of different abilities on will make the test ineffective and may provide inconclusive results.

Questions used in the Adaptive Quiz must

 * be automatically scored as correct/incorrect
 * be tagged with their difficulty using \'adpq_\' followed by a positive integer that is within the range for the quiz

The Adaptive Quiz can be configured to

 * define the range of question-difficulties/user-abilities to be measured. 1-10, 1-16, and 1-100 are examples of valid ranges.
 * define the precision required before the quiz is stopped. Often an error of 5% in the ability measure is an appropriate stopping rule
 * require a minimum number of questions to be answered
 * require a maximum number of questions that can be answered

This description and the testing process in this activity are based on <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Adaptive Quiz';
$string['na'] = 'n/a';
$string['name'] = 'Name';
$string['noattemptrecords'] = 'No attempt records for this student';
$string['noattemptsallowed'] = 'No more attempts allowed at this activity';
$string['nonewmodules'] = 'No Adaptive Quiz instances found';
$string['nopermission'] = 'You don\t have permission to view this resource';
$string['notinprogress'] = 'This attempt is not in progress.';
$string['notyourattempt'] = 'This is not your attempt at the activity';
$string['numofattemptshdr'] = 'Number of attempts';
$string['numright'] = 'Num right';
$string['numwrong'] = 'Num wrong';
$string['percent_correct_display_name'] = '% Correct';
$string['pluginadministration'] = 'Adaptive Quiz';
$string['pluginname'] = 'Adaptive Quiz';
$string['questionanalysisbtn'] = 'Question Analysis';
$string['questionnumber'] = 'Question #';
$string['questionpool'] = 'Question pool';
$string['questionpool_help'] = 'Select the question category(ies) where the activity will pull questions from during an attempt.';
$string['question_report'] = 'Question Analysis';
$string['questionsattempted'] = 'Sum of questions attempted';
$string['questions_report'] = 'Questions Report';
$string['recentactquestionsattempted'] = 'Questions attempted: {$a}';
$string['recentattemptstate'] = 'State of attempt:';
$string['recentcomplete'] = 'Completed';
$string['recentinprogress'] = 'In progress';
$string['requirepassword'] = 'Required password';
$string['requirepassword_help'] = 'Students are required to enter a password before beginning their attempt';
$string['requirepasswordmessage'] = 'To attempt this quiz you need to know the quiz password';
$string['resetadaptivequizsall'] = 'Delete all Adaptive Quiz attempts';
$string['result'] = 'Result';
$string['reviewattempt'] = 'Review attempt';
$string['reviewattemptreport'] = 'Reviewing attempt by {$a->fullname} submitted on {$a->finished}';
$string['score'] = 'Score';
$string['scoring_table'] = 'Scoring Tables';
$string['standarderror'] = 'Standard Error to stop';
$string['standarderrorhdr'] = 'Standard error';
$string['standarderror_help'] = 'When the amount of error in the measure of the user\'s ability drops below this amount, the quiz will stop. Tune this value from the default of 5% to require more or less precision in the ability measure';
$string['startattemptbtn'] = 'Start attempt';
$string['startinglevel'] = 'Starting level of difficulty';
$string['startinglevel_help'] = 'The the student begins an attempt, the activity will randomly select a question matching the level of difficulty';
$string['statistic'] = 'Statistic';
$string['stopingconditionshdr'] = 'Stopping conditions';