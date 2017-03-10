<?php 

                        
/**
 * Strings for component 'local_amos', language 'pt_br', branch 'MOODLE_27_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['amos:changecontriblang'] = 'Change language of contributed strings';
$string['amos:importstrings'] = 'Import strings (including the English ones) directly into the main repository';
$string['commitkeepstaged'] = 'Keep strings staged';
$string['commitmessageempty'] = 'Please fill the commit message';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contriblanguagebutton'] = 'Convert';
$string['contriblanguagechange'] = 'Fixing wrong contribution language';
$string['contriblanguagechange_help'] = 'If the contribution has been submitted to the wrong language pack by mistake, select the correct language in the dropdown menu below then click the Convert button.';
$string['contriblanguagereport'] = 'Reporting wrong contribution language';
$string['contriblanguagereport_help'] = 'If this contribution has been submitted to the wrong language pack by mistake, please copy and paste the contribution URL into an email to `translation@moodle.org`. The contribution will then be moved to the correct language.';
$string['contriblanguagewrong'] = 'Wrong language?';
$string['contribnotif'] = '[AMOS] Contribution notification (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} has accepted your contributed translation
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Contribution page: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} has commented on the contributed translation
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Contribution page: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} has converted your contributed translation
#{$a->id} {$a->subject}

Thanks for your contribution. However, it seems it was submitted to the wrong
language pack by mistake. Thus your contribution has been rejected from the
wrong language pack and moved to the correct language pack for review by the
language pack maintainer. No action from you is required.

In future, please double-check that you have selected your own language before
you start translating strings.

---------------------------------------------------------------------
Original contribution page: {$a->contriborigurl}
New contribution page: {$a->contribnewurl}';
$string['contribnotifpending'] = 'There is a pending contributed translation requiring your action
#{$a->id} {$a->subject}

As the language pack maintainer, you are supposed to review and eventually
commit all submitted contributions. When done, please mark them as accepted or
rejected.

See {$a->docsurl} for more details.
---------------------------------------------------------------------
Contribution page: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} has rejected your contributed translation
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Contribution page: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} has submitted a new contributed translation
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

* Language: {$a->language}
* Components: {$a->components}
* Strings: {$a->strings}

---------------------------------------------------------------------
Contribution page: {$a->contriburl}';
$string['contribstaged'] = 'Staged contribution <a href="contrib.php?id={$a->id}">#{$a->id}</a> by {$a->author}';
$string['contribstagedinfo'] = 'Staged contribution';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstringsnone'] = '{$a->orig} (all of them are already translated in the lang pack)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} of them already have more recent translation)';
$string['contribute'] = 'Contribute';
$string['contributenow'] = 'Contribute now!';
$string['contributestats'] = 'Total of <strong>{$a->count}</strong> strings translated by community members have been submitted into AMOS so far.';
$string['contributethanks'] = 'Many thanks to {$a->listcontributors} for their recent contributions!';
$string['creditsaddcontributor'] = 'Add contributor';
$string['creditsaddmaintainer'] = 'Add maintainer';
$string['creditsdelcontributor'] = 'Remove contributor';
$string['creditsdelmaintainer'] = 'Remove maintainer';
$string['creditsnomaintainer'] = 'No maintainer at the moment. <a href="{$a->url}">Become one!</a>';
$string['creditsthanks'] = 'On this page, we wish to thank everyone who has contributed to Moodle translations. Their work has made the spread of Moodle across the world  possible.';
$string['creditstitlelong'] = 'Language pack maintainers and contributors';
$string['diffaction1'] = 'Stage both translations on their branches';
$string['diffaction2'] = 'Stage the more recent translation on both branches';
$string['diffmode'] = 'Stage strings if';
$string['diffmode1'] = 'English strings have changed but translated ones have not';
$string['diffmode2'] = 'English strings have not changed but translated ones have';
$string['diffmode3'] = 'Either English or translated strings have changed (but not both)';
$string['diffmode4'] = 'Both English and translated strings have changed';
$string['diffprogress'] = 'Comparing selected branches';
$string['diffprogressdone'] = 'Total of {$a} differences found';
$string['diffstringmode'] = 'Switch diff mode';
$string['diffstrings'] = 'Compare strings at two branches';
$string['filtercmp_desc'] = 'Show strings of these components';
$string['filtercmpnothingselected'] = 'Please select some component';
$string['filterlng_desc'] = 'Display translations in these languages';
$string['filtermis_desc'] = 'Additional conditions on strings to display';
$string['filtermisfglo'] = 'greylisted strings only';
$string['filtermisfhas'] = 'translated strings only';
$string['filtermisfhlp'] = 'help strings only';
$string['filtermisfmis'] = 'missing and outdated strings only';
$string['filtermisfout'] = 'outdated strings only';
$string['filtermisfstg'] = 'staged strings only';
$string['filtermisfwog'] = 'without greylisted strings';
$string['filtersid'] = 'String identifier';
$string['filtersid_desc'] = 'The key in the array of strings';
$string['filtersidpartial'] = 'partial match';
$string['filtertxtcasesensitive'] = 'case-sensitive';
$string['filtertxt_desc'] = 'String must contain given text';
$string['filtertxtregex'] = 'regex';
$string['filterver_desc'] = 'Show strings from these Moodle versions';
$string['filtervernothingselected'] = 'Please select some version';
$string['found'] = 'Found: {$a->found} &nbsp;&nbsp;&nbsp; Missing: {$a->missing} ({$a->missingonpage})';
$string['googletranslate'] = 'ask google';
$string['greylisted'] = 'Greylisted strings';
$string['greylisted_help'] = 'For legacy reasons, a Moodle language pack may contain strings that are no longer used but have not yet been deleted. These strings are \'greylisted\'. Once it has been confirmed that a greylisted string is no longer used, it is removed from the language pack.

If you notice a greylisted string which is still being used in Moodle, please inform us by a forum post in Translating Moodle course at this site. Otherwise, you can save valuable time by translating strings which are most likely used in Moodle and ignoring greylisted strings.';
$string['greylistedwarning'] = 'greylisted';
$string['importfile'] = 'Import translated strings from file';
$string['importfile_help'] = 'If you have your strings translated offline, you can stage them via this form.

* The file must be valid Moodle PHP strings definition file. Look at `/lang/en/` directory of your Moodle installation for examples.
* Name of the file must match the one with English strings definitons for the given component (like `moodle.php`, `assignment.php` or `enrol_manual.php`).

All strings found in the file will be staged for the selected version and language.

Multiple PHP files can be processed at once if you put them into a ZIP file.';
$string['importfile_link'] = 'local/amos/importfile';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Commit message contains';
$string['logfiltercommits'] = 'Commit filter';
$string['logfiltercommittedafter'] = 'Committed after';
$string['logfiltercommittedbefore'] = 'Committer before';
$string['logfiltershow'] = 'Show filtered commits and strings';
$string['logfiltersource'] = 'Source';
$string['logfiltersourceamos'] = 'amos (web based translator)';
$string['logfiltersourceautomerge'] = 'automerge (translation copied from another branch)';
$string['logfiltersourcebot'] = 'bot (bulk operations executed by a script)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript in the commit message)';
$string['logfiltersourcefixdrift'] = 'fixdrift (fixed AMOS-git drift)';
$string['logfiltersourcegit'] = 'git (git mirror of Moodle source code and 1.x packs)';
$string['logfiltersourceimport'] = 'import (imported strings for a contributed plugin)';
$string['logfiltersourcerevclean'] = 'revclean (reverse clean-up process)';
$string['logfilterstringid'] = 'String identifier';
$string['logfilterstrings'] = 'String filter';
$string['logfilterusergrp'] = 'Committer';
$string['logfilterusergrpor'] = 'or';
$string['maintainers'] = 'Maintainers';
$string['markuptodate'] = 'Marking the translation as up-to-date';
$string['markuptodatelabel'] = 'Mark as up-to-date';
$string['markuptodate_link'] = 'local/amos/outdatedstrings';
$string['merge'] = 'Merge';
$string['mergestrings'] = 'Merge strings from another branch';
$string['mergestrings_help'] = 'This will pick and stage all strings from the source branch that are not translated yet in the target branch and are used there. You can use this tool to copy a translated string into all other versions of the pack. Only language pack maintainers can use this tool.';
$string['mergestrings_link'] = 'local/amos/merge';
$string['messageprovider:checker'] = 'Language pack checker results';
$string['messageprovider:contribution'] = 'Contributed translations';
$string['morefilteringoptions'] = 'More options';
$string['newlanguage'] = 'New language';
$string['nodiffs'] = 'No differences found';
$string['nofiletoimport'] = 'Please provide a file to import from.';
$string['nologsfound'] = 'No strings found, please modify filters';
$string['nostringsfound'] = 'No strings found';
$string['nostringsfoundonpage'] = 'No strings found on page {$a}';
$string['nostringtoimport'] = 'No valid string found in the file. Make sure the file has correct filename and is properly formatted.';
$string['nothingtomerge'] = 'The source branch does not contain any new strings that would be missing at the target branch. Nothing to merge.';
$string['nothingtostage'] = 'The operation did not return any string that could be staged.';
$string['novalidzip'] = 'Unable to extract the ZIP file.';
$string['numofcommitsabovelimit'] = 'Found {$a->found} commits matching the commit filter, using {$a->limit} most recent';
$string['numofcommitsunderlimit'] = 'Found {$a->found} commits matching the commit filter';
$string['numofmatchingstrings'] = 'Within that, {$a->strings} modifications in {$a->commits} commits match the string filter';
$string['outdatednotcommitted'] = 'Outdated string';
$string['outdatednotcommitted_help'] = 'AMOS detected that the string may be outdated as the English version was modified after it had been translated. Please review the translation.';
$string['outdatednotcommittedwarning'] = 'Outdated';
$string['ownstashactions'] = 'Stash actions';
$string['ownstashactions_help'] = '* Apply - copy the translated strings from the stash into the stage and keep the stash unmodified. If the string is already in the stage, it is overwritten with the stashed one.
* Pop - move the translated strings from the stash into the stage and drop the stash (that is Apply and Drop).
* Drop - throw away the stashed strings.
* Submit - opens a form for submitting the stash to the official language maintainers so they can include your contribution in the official language pack.';
$string['ownstashes'] = 'Your stashes';
$string['ownstashes_help'] = 'This is a list of all your stashes.';
$string['ownstashesnone'] = 'No own stashes found';
$string['permalink'] = 'Permalink';
$string['placeholder'] = 'Placeholders';
$string['placeholder_help'] = 'Placeholders are special statements like `{$a}` or `{$a->something}` within the string. They are replaced with a value when the string is actually printed.

It is important to copy them exactly as they are in the original string. Do not translate them nor change their left-to-right orientation.';
$string['placeholderwarning'] = 'placeholders';
$string['pluginclasscore'] = 'Core subsystems';
$string['pluginclassnonstandard'] = 'Non-standard plugins';
$string['pluginclassstandard'] = 'Standard plugins';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Contributed translation #{$a->id} by {$a->author}';
$string['presetcommitmessage2'] = 'Merged missing strings from {$a->source} to {$a->target} branch';
$string['presetcommitmessage3'] = 'Fixing differences between {$a->versiona} and {$a->versionb}';
$string['privileges'] = 'Your privileges';
$string['privilegesnone'] = 'You have read-only access to public information.';
$string['processing'] = 'Processing ...';
$string['propagate'] = 'Propagate translations';
$string['propagatednone'] = 'No translations propagated';
$string['propagatedsome'] = '{$a} staged translations propagated';
$string['propagate_help'] = 'Staged translations can be propagated to selected branches. AMOS iterates over the list of staged translations and tries to apply them to each selected target branch. Propagation is not possible if:

* the English originals of the string are different on the source and target branches,
* the string is staged several times with different translation';
$string['propagaterun'] = 'Propagate';
$string['quicklinks'] = 'Quick links';
$string['quicklinks_amos'] = 'AMOS translator';
$string['quicklinks_forum'] = 'Translation forum';
$string['quicklinks_manual'] = 'User manual';
$string['quicklinks_newcomers'] = 'Help for newcomers';
$string['requestactions'] = 'Action';
$string['requestactions_help'] = '* Apply - copy the translated strings from the pull request into your stage. If the string is already in the stage, it is overwritten with the stashed one.
* Hide - blocks the pull request so that it is not displayed to you any more.';
$string['savefilter'] = 'Save filter settings';
$string['script'] = 'AMOScript';
$string['scriptexecute'] = 'Execute and stage result';
$string['script_help'] = 'AMOScript is a set of instructions to execute over the strings repository.';
$string['sourceversion'] = 'Source version';
$string['stage'] = 'Stage';
$string['stageactions'] = 'Stage actions';
$string['stageactions_help'] = '* Edit staged strings - modifies the translator filter settings so that only staged translations are displayed.
* Prune non-committable strings - unstage all translations that you are not allowed to commit. Stage is pruned automatically before it is committed.
* Rebase - unstage all translations that either do not modify the current translation or are older than the most recent translation in the repository. Stage is rebased automatically before it is committed.
* Unstage all - clears the stage, all staged translations are lost.';
$string['stageedit'] = 'Edit staged strings';
$string['stageprune'] = 'Prune non-committable';
$string['stagerebase'] = 'Rebase';
$string['stagestringsnocommit'] = 'There are {$a->staged} staged strings';
$string['stagestringsnone'] = 'There are no staged strings';
$string['stagestringssome'] = 'There are {$a->staged} staged strings, {$a->committable} of them can be committed';
$string['stagesubmit'] = 'Send strings to language pack maintainers';
$string['stagetoolopen'] = 'Go to the stage';
$string['stagetranslation'] = 'Translation';
$string['stagetranslation_help'] = 'Displays the staged translation to be committed. The background color of the cell means:

* Green - you have added a missing translation and you are allowed to commit it.
* Yellow - you have modified a string and you are allowed to commit the change.
* Blue - you have modified the translation or added a missing translation but you are not allowed to commit it into the given language.
* No color - the staged translation is the same as the current one and therefore will not be committed.';
$string['stageunstageall'] = 'Unstage all';
$string['stashactions'] = 'Save work in progress';
$string['stashactions_help'] = 'Stash is a snapshot of the current stage. Stashes can be submitted to the official language pack maintainers for inclusion into the language pack.';
$string['stashapply'] = 'Apply';
$string['stashautosave'] = 'Automatically saved backup stash';
$string['stashautosave_help'] = 'This stash contains the most recent snapshot of your stage. You can use it as a backup for cases when all strings are unstaged by accident, for example. Use \'Apply\' action to copy all stashed strings back into the stage (will overwrite the string if it is already staged).';
$string['stashcomponents'] = '<span>Components:</span> {$a}';
$string['stashdrop'] = 'Drop';
$string['stashes'] = 'Stashes';
$string['stashlanguages'] = '<span>Languages:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Push all staged strings into a new stash';
$string['stashstrings'] = '<span>Number of strings:</span> {$a}';
$string['stashsubmit'] = 'Submit to maintainers';
$string['stashsubmitdetails'] = 'Submitting details';
$string['stashsubmitmessage'] = 'Message';
$string['stashsubmitsubject'] = 'Subject';
$string['stashtitle'] = 'Stash title';
$string['stashtitledefault'] = 'Work in progress - {$a->time}';
$string['stringhistory'] = 'History';
$string['strings'] = 'Strings';
$string['submitting'] = 'Submitting a contribution';
$string['submitting_help'] = 'This will send translated strings to official language maintainers. They will be able to apply your work into their stage, review it and eventually commit. Please provide a message for them describing your work and why you would like to see your contribution included.';
$string['targetversion'] = 'Target version';
$string['timeline'] = 'timeline';
$string['translatortool'] = 'Translator';
$string['translatortoolopen'] = 'Open AMOS translator';
$string['translatortranslation'] = 'Translation';
$string['translatortranslation_help'] = 'Click the cell to turn it into the input editor. Insert the translation and click outside the cell to stage the translation. The background color of the cell means:

* Green - the string is already translated, you can eventually modify the translation.
* Yellow - the string may be out-dated. The English original was probably modified after the string had been translated.
* Red - the string is not translated yet.
* Blue - you have modified the translation and it is now staged.
* Grey - AMOS can\'t be used to translate this string. For example strings for Moodle 1.9 must be edited via the legacy CVS access only.

Language pack maintainers can see a small red symbol in the corner of the cells they are allowed to commit.';
$string['typecontrib'] = 'Non-standard plugins';
$string['typecore'] = 'Core subsystems';
$string['typestandard'] = 'Standard plugins';
$string['unableenfixaddon'] = 'English fixes allowed for standard plugins only';
$string['unableenfixcountries'] = 'Country names are copied from ISO 3166-1';
$string['unstage'] = 'Unstage';
$string['unstageconfirm'] = 'Really?';
$string['unstaging'] = 'Unstaging';
$string['untranslate'] = 'untranslate';
$string['untranslateconfirm'] = '<p>You are going to remove existing translation of the string <code>{$a->stringid}</code>, component <code>{$a->component}</code>, from all the versions of the language pack <code>{$a->language}</code>.</p><p>Are you sure?</p>';
$string['untranslatetitle'] = 'Removing translation from the language pack';
$string['untranslating'] = 'Untranslating';
$string['version'] = 'Version';