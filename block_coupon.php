<?php 

                        
/**
 * Strings for component 'block_coupon', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['action:coupon:delete'] = 'Delete coupon';
$string['action:coupon:delete:confirm'] = 'Are you sure you wish to delete this coupon? This cannot be undone!';
$string['action:error:delete'] = 'Delete error';
$string['cohort'] = 'cohort';
$string['confirm_coupons_sent_body'] = 'Hello,<br /><br />

We\'d like to inform you that all the coupons created by you on {$a->timecreated} have been sent.<br /><br />

With kind regards,<br /><br />

Moodle administrator';
$string['coupon:deleted'] = 'Coupon has been deleted';
$string['coupon_mail_csv_content'] = 'Dear ##to_gender## ##to_name##,<br /><br />

You have recently been enrolled for our training ##course_fullnames##.
During the course you have access to our Online Learning Environment: ##site_name##.<br /><br />

In this environment, apart from the course materials, you will have the possibility to network with fellow students.
The course will start with a number of preparation assignments, we kindly request to take a look at them
at the latest 3 (work)days before the course starts.
Both you and the teacher can then decently prepare for the course.<br /><br />

All course materials will be accessible for you, at the very latest 4 days before the course starts.
It can always happen that the teacher requests extra materials to be added at a later time, for example
after a physical session. If this happens, you will be abe to see this in the learning environment
During meetings you will not receive any printed lesson materials, we advise you to bring a laptop and/or tablet.<br /><br />

You\'ll find the coupon to enter the course attached. This coupon os personal and unique, and gives access to the appropriate courses for your education.
Please read the instructions on the coupon carefully.<br /><br />

If you have any questions regarding creating an account or find any other problems, you can contact the helpdesk.
Information can be found on out Learning Environment.
When nobody is available to answer your question, please leave your name, e-mailaddress and phonenumber behind and we will get back to you as
soon as possible.<br /><br />

We wish you good luck on the course.<br /><br />

With kind regards,<br /><br />

##site_name##';
$string['coupon_mail_csv_content_cohorts'] = 'Dear ##to_gender## ##to_name##,<br /><br />

You have recently been enrolled for our training **PLEASE FILL IN MANUALLY**.
During the course you have access to our Online Learning Environment: ##site_name##.<br /><br />

In this environment, apart from the course materials, you will have the possibility to network with fellow students.
The course will start with a number of preparation assignments, we kindly request to take a look at them
at the latest 3 (work)days before the course starts.
Both you and the teacher can then decently prepare for the course.<br /><br />

All course materials will be accessible for you, at the very latest 4 days before the course starts.
It can always happen that the teacher requests extra materials to be added at a later time, for example
after a physical session. If this happens, you will be abe to see this in the learning environment
During meetings you will not receive any printed lesson materials, we advise you to bring a laptop and/or tablet.<br /><br />

You\'ll find the coupon to enter the course attached. This coupon os personal and unique, and gives access to the appropriate courses for your education.
Please read the instructions on the coupon carefully.<br /><br />

If you have any questions regarding creating an account or find any other problems, you can contact the helpdesk.
Information can be found on out Learning Environment.
When nobody is available to answer your question, please leave your name, e-mailaddress and phonenumber behind and we will get back to you as
soon as possible.<br /><br />

We wish you good luck on the course.<br /><br />

With kind regards,<br /><br />

##site_name##';
$string['coupon_recipients_desc'] = 'The following columns are required to be present in the uploaded CSV, regardless of order: E-mail, Gender, Name.<br/>
For every given person in the CSV, a coupon is generated and emailed to the user.<br/>
Please take note these coupons will be created a-synchronous by a background task; <i>not</i> instantly.
This is because the process of generating coupons may be quite lengthy, especially for a large amount of users.';
$string['coupons_ready_to_send'] = 'Your coupon(s) has/have been generated and will be send at the entered date.<br />
    You will receive a confirmation email message when all the coupons have been sent.';
$string['coupons_sent'] = 'Your coupon(s) have been generated. Within several minutes you will receive an email with the Coupons in the attachments.';
$string['coupon:viewallreports'] = 'View Coupon reports (for all coupons)';
$string['coupon:viewreports'] = 'View Coupon reports (for my owned coupons)';
$string['course'] = 'course';
$string['days_access'] = '{$a} days of';
$string['default-coupon-page-template-botleft'] = '<ol>
<li>Sign up at {site_url}</li>
<li>You will receive an email with the confirmation url. Click on the url to activate your account.</li>
<li>Enter your coupon code in the Moodle Coupon block</li>
<li>Happy learning!</li>
</ol>';
$string['default-coupon-page-template-botright'] = '<ol>
<li>Log in at {site_url}</li>
<li>Enter your coupon code in the Moodle Coupon block</li>
<li>Happy learning!</li>
</ol>';
$string['default-coupon-page-template-main'] = 'With this coupon you can activate access to the e-learning module. You have {accesstime} access to this module.

Please use the following coupon code to activate access.

{coupon_code}';
$string['download-sample-csv'] = 'Download sample CSV file';
$string['enrolperiod:indefinite'] = '<i>Indefinite</i>';
$string['error:alternative_email_invalid'] = 'If you have checked \'use alternative email\' this field should contain a valid email address.';
$string['error:alternative_email_required'] = 'If you have checked \'use alternative email\' this field is required.';
$string['error:cohort_sync'] = 'An error occured while trying to synchronize the cohorts. Please contact support.';
$string['error:coupon_already_used'] = 'The coupon with this code has already been used.';
$string['error:coupon_amount-recipients-both-set'] = 'Please specify a number of coupons to generate OR a csv list of recipients.';
$string['error:coupon_amount-recipients-both-unset'] = 'Either this field or the field Recipients must be set.';
$string['error:coupon_amount_too_high'] = 'Please enter an amonut between {$a->min} and {$a->max}.';
$string['error:coupon_reserved'] = 'The coupon with this code has been reserved for an other user.';
$string['error:course-coupons-not-copied'] = 'An error occured while trying to copy coupon-courses to the new coupon_courses table. Please contact support.';
$string['error:course-not-found'] = 'The course could not be found.';
$string['error:invalid_coupon_code'] = 'You have entered an invalid coupon code.';
$string['error:invalid_email'] = 'Please enter a valid email adress.';
$string['error:missing_cohort'] = 'The cohort(s) linked to this coupon does not exist anymore. Please contact support.';
$string['error:missing_course'] = 'The course linked to this coupon does not exist anymore. Please contact support.';
$string['error:missing_group'] = 'The group(s) linked to this coupon does not exist anymore. Please contact support.';
$string['error:moodledata_not_writable'] = 'Your moodledata/coupon_logos folder is not writable. Please fix your permissions.';
$string['error:no_coupons_submitted'] = 'None of your coupons have been used yet.';
$string['error:nopermission'] = 'You have no permission to do this';
$string['error:numeric_only'] = 'This field must be numeric.';
$string['error:plugin_disabled'] = 'The cohort_sync plugin has been disabled. Please contact support.';
$string['error:recipients-columns-missing'] = 'The file could not be validated. Are you sure you entered the right columns and seperator?';
$string['error:recipients-email-invalid'] = 'The email address {$a->email} is invalid. Please fix it in the csv file.';
$string['error:recipients-empty'] = 'Please enter at least one user.';
$string['error:recipients-extension'] = 'You can only upload .csv files.';
$string['error:recipients-invalid'] = 'The file could not be validated. Are you sure you entered the right columns and seperator?';
$string['error:recipients-max-exceeded'] = 'Your csv file has exceeded the maximum of 10.000 coupon users. Please limit it.';
$string['error:required'] = 'This field is required.';
$string['error:sessions-expired'] = 'Your session has been expired. Please try again.';
$string['error:unable_to_enrol'] = 'An error occured while trying to enrol you in the new course. Please contact support.';
$string['error:wrong_code_length'] = 'Please enter a number between 6 and 32.';
$string['error:wrong_doc_page'] = 'You are trying to access a page that does not exist.';
$string['error:wrong_image_size'] = 'The uploaded background does not have the required size. Please upload an image with a ratio of 210 mm by 297 mm.';
$string['heading:administration'] = 'Manage';
$string['heading:amountForm'] = 'Amount settings';
$string['heading:generatecoupons'] = 'Generate coupons';
$string['heading:imageupload'] = 'Upload image';
$string['heading:info'] = 'Info';
$string['heading:input_cohorts'] = 'Select cohorts';
$string['heading:input_coupon'] = 'Input coupon';
$string['heading:inputcoupons'] = 'Input Coupon';
$string['label:api_enabled_desc'] = 'The Coupon API grants the possibility to generate coupons from an external system.';
$string['label:api_password_desc'] = 'The password that can be used to generate a coupon using the API.';
$string['label:cohort'] = 'Cohort';
$string['label:coupon_amount_help'] = 'This is the the amount of coupons that will be generated. Please use this field OR the field recipients, not both.';
$string['label:coupon_code_length'] = 'Code length';
$string['label:coupon_code_length_desc'] = 'Amount of characters of the coupon code.';
$string['label:coupon_cohorts'] = 'Cohort(s)';
$string['label:coupon_cohorts_help'] = 'Select the one or more cohorts your users will be enrolled in.';
$string['label:coupon_connect_course'] = 'Add course(s)';
$string['label:coupon_connect_course_help'] = 'Select all courses you wish to add to the cohort.
    <br /><b><i>Note: </i></b>All users who are already enrolled in this cohort will also be enrolled in the selected courses!';
$string['label:coupon_courses'] = 'Course(s)';
$string['label:coupon_courses_help'] = 'Select the courses your users will be enrolled in.';
$string['label:coupon_email'] = 'Email address';
$string['label:coupon_email_help'] = 'This is the email address the generated coupons will be send to.';
$string['label:coupon_groups'] = 'Add group(s)';
$string['label:coupon_groups_help'] = 'Select the groups you wish your users to be enrolled in upon enrolment in the courses.';
$string['label:coupon_recipients'] = 'Recipients';
$string['label:coupon_recipients_help'] = 'With this field you can upload a csv file with users.';
$string['label:coupon_recipients_txt'] = 'Recipients';
$string['label:coupon_recipients_txt_help'] = 'In this field you can make your final changes to the uploaded csv file.';
$string['label:coupon_type'] = 'Generate based on';
$string['label:coupon_type_help'] = 'The Coupons will be generated based on either the course or one or more cohorts.';
$string['label:current_image'] = 'Current Coupon background';
$string['label:date_send_coupons'] = 'Send date';
$string['label:date_send_coupons_help'] = 'Date the coupons will be send to the recipient(s).';
$string['label:email_body'] = 'Email message';
$string['label:email_body_help'] = 'The email message that will be send to the recipients of the coupons.';
$string['label:enablecleanup'] = 'Enable cleaning up unused coupons?';
$string['label:enablecleanup_help'] = 'Check this option to automatically clean (remove) unused coupons';
$string['label:enrolment_period'] = 'Enrolment period';
$string['label:enrolment_period_help'] = 'Period (in days) the user will be enrolled in the courses. If set to 0 no end will be issued.';
$string['label:enter_coupon_code'] = 'Please enter your coupon code here';
$string['label:generate_pdfs'] = 'Generate seperate PDF\'s';
$string['label:generate_pdfs_help'] = 'You can select here if you want to receive your coupons in either a single file or each coupon in a separate PDF file.';
$string['label:image'] = 'Coupon background';
$string['label:image_desc'] = 'Background to be placed in the generated coupons';
$string['label:info_coupon_cohort_courses'] = 'Information on page: Cohort courses';
$string['label:info_coupon_cohorts'] = 'Information on page: Select cohorts';
$string['label:info_coupon_confirm'] = 'Information on page: Confirm coupon';
$string['label:info_coupon_course'] = 'Information on page: Select course';
$string['label:info_coupon_course_groups'] = 'Information on page: Select course groups';
$string['label:info_coupon_type'] = 'Information on page: Select coupon type';
$string['label:info_desc'] = 'The information shown above the form.';
$string['label:info_imageupload'] = 'Information on page: Upload image';
$string['label:max_coupons'] = 'Maximum coupons';
$string['label:max_coupons_desc'] = 'Amount of coupons that can be created in one time.';
$string['label:no_courses_connected'] = 'There are no courses connected to this cohort.';
$string['label:no_groups_selected'] = 'There are no groups connected to these courses yet.';
$string['label:redirect_url'] = 'Redirect URL';
$string['label:redirect_url_help'] = 'The destination users will be send to after entering their coupon code.';
$string['label:selected_cohort'] = 'Selected cohort(s)';
$string['label:selected_courses'] = 'Selected courses';
$string['label:selected_groups'] = 'Selected group(s)';
$string['label:showform'] = 'Generator options';
$string['label:type_cohorts'] = 'Cohort(s)';
$string['label:type_course'] = 'Course';
$string['label:use_alternative_email'] = 'Use alternative email';
$string['label:use_alternative_email_help'] = 'When checked it will by default use the email address provided in the Alternative email field.';
$string['missing_config_info'] = 'Put your extra information here - to be set up in the global configuration of the block.';
$string['page:generate_coupon.php:title'] = 'Generate coupons';
$string['page:generate_coupon_step_five.php:title'] = 'Generate coupons';
$string['page:generate_coupon_step_four.php:title'] = 'Generate coupons';
$string['page:generate_coupon_step_three.php:title'] = 'Generate coupons';
$string['page:generate_coupon_step_two.php:title'] = 'Generate coupons';
$string['page:unused_coupons.php:title'] = 'Unused coupons';
$string['pdf_generated'] = 'The coupons have been attached to this email in PDF files.<br /><br />';
$string['pdf-meta:keywords'] = 'Moodle Coupon';
$string['pdf-meta:subject'] = 'Moodle Coupon';
$string['pdf-meta:title'] = 'Moodle Coupon';
$string['pdf:titlename'] = 'Moodle Coupon';
$string['pluginname'] = 'Coupon';
$string['promo'] = 'Coupon plugin for Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['report:cohorts'] = 'Cohort';
$string['report:coupon_code'] = 'Subscription code';
$string['report:dateformat'] = '%d-%m-%Y %H:%M:%S';
$string['report:dateformatymd'] = '%d-%m-%Y';
$string['report:download-excel'] = 'Download unused coupons';
$string['report:enrolperiod'] = 'Owner';
$string['report:for_user_email'] = 'Planned for';
$string['report:heading:action'] = 'Action(s)';
$string['report:heading:coupon'] = 'Coupon';
$string['report:heading:coursename'] = 'Course name';
$string['report:heading:coursetype'] = 'Course type';
$string['report:heading:datecomplete'] = 'Date completed';
$string['report:heading:datestart'] = 'Startdate';
$string['report:heading:errormessage'] = 'Error';
$string['report:heading:errortype'] = 'Type';
$string['report:heading:grade'] = 'Grade';
$string['report:heading:status'] = 'Status';
$string['report:heading:timecreated'] = 'Date';
$string['report:heading:user'] = 'User';
$string['report:immediately'] = 'Immediately';
$string['report:issend'] = 'Is send';
$string['showform-amount'] = 'I want to create an arbitrary amount of coupons';
$string['showform-csv'] = 'I want to create coupons using a CSV with recipients';
$string['success:uploadimage'] = 'Your new coupon image has been uploaded.';
$string['tab:apidocs'] = 'API Docs';
$string['tab:errors'] = 'Error reports';
$string['task:cleanup'] = 'Cleaning up unused old coupons';
$string['tasksettings'] = 'Task settings';
$string['tasksettings_desc'] = '';
$string['textsettings'] = 'Text settings';
$string['textsettings_desc'] = 'Here you can configure custom texts to be displayed by various wizard screens for the coupon generator';
$string['th:action'] = 'Action(s)';
$string['unlimited_access'] = 'unlimited';
$string['url:api_docs'] = 'API Documentation';
$string['view:api_docs:heading'] = 'Coupon API Documentation';
$string['view:api_docs:title'] = 'Coupon API Documentation';
$string['view:api:heading'] = 'Coupon API';
$string['view:api:title'] = 'Coupon API';
$string['view:errorreport:heading'] = 'Report - Coupon errors';
$string['view:errorreport:title'] = 'Report - Coupon errors';