<?php 

                        
/**
 * Strings for component 'auth_enrolkey', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['description'] = 'This provides Enrolment key based self-registration';
$string['pluginname'] = 'Enrolment key based self-registration';
$string['recaptcha'] = 'Adds a visual/audio confirmation form element to the sign-up page for self-registering users. This protects your site against spammers and contributes to a worthwhile cause. See <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a> for more details.';
$string['recaptcha_key'] = 'Enable reCAPTCHA element';
$string['settings_content'] = '<p>Enrolment key based self-registration enables a user to create their own account via a \'Create new account\' button on the login page. The user then receives an email containing a secure link to a page where they can confirm their account. Future logins just check the username and password against the stored values in the Moodle database.</p><p>During self-registration if an enrolment key is entered in the enrolment key field then it will proceed to automatically enrol the new user into any course that it matches. The keys are enabled in (Course administration > Users > Enrolment methods > Add method > Self enrolment).</p><p>Note: In addition to enabling the plugin, Enrolment key based self-registration must also be selected from the self registration drop-down menu on the \'Manage authentication\' page.</p>';
$string['settings_visible_description'] = 'Adds a new form element to the sign-up page for self-registration users. This will be checked against available enrolment keys and enrol the user to the matching courses';
$string['signup_auth_instructions'] = 'Hi! For full access to courses you\'ll need to take
a minute to create a new account for yourself on this web site.
Each of the individual courses may also have a one-time
"enrolment key", which you can use during this sign up:
<ol>
<li>Fill out the <a href="{$a}">New Account</a> form with your details.</li>
<li>You will be prompted for an "enrolment key" - use the one
that your teacher has given you. This will "enrol" you in the
course.</li>
<li>Your account will be created and you will be logged in.</li>
<li>You can now access the full course for this session.</li>
<li>An email has also been immediately sent to your email address.</li>
<li>Read your email, and click on the web link it contains.</li>
<li>From now on you will only need to enter your personal
username and password (in the form on this page) to log in
and access any course you have enrolled in.</li>
</ol>';
$string['signup_failure'] = 'Opps! Something went wrong, and you may not have been enrolled properly. Go to <a href="{$a->href}">Home</a>';