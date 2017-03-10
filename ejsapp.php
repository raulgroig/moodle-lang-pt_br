<?php 

                        
/**
 * Strings for component 'ejsapp', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['applet'] = 'Embed application in the web browser?';
$string['applet_display'] = 'Display options for a Java application';
$string['appletfile'] = 'Easy Java(script) Simulation';
$string['appletfile_help'] = 'Select the .jar or .zip file that encapsulates the Easy Java(script) Simulation (EJsS) application. The official website of EJsS is http://fem.um.es/Ejs/';
$string['applet_help'] = 'Select \'yes\' to run this application embedded in the web browser as an applet; \'no\' to launch it as a Java Web Start application';
$string['applet_size_conf'] = 'Size the applet';
$string['applet_size_conf_help'] = 'Three options: 1) "Preserve original size" will preserve the original size of the EJS applet, 2) "Let Moodle set the size" will resize the applet to take up all the possible space while mantaining the original aspect ratio, 3) "Let the user set the size" will let the user to set the size of the applet and select whether to preserve its original aspect ratio or not.';
$string['certificate_alias'] = 'Trust certificate alias';
$string['certificate_alias_description'] = 'The alias given to the trust certificate';
$string['certificate_password'] = 'Trust certificate password';
$string['certificate_password_description'] = 'The password required for using the trust certificate';
$string['certificate_path'] = 'Trust certificate file path';
$string['certificate_path_description'] = 'The path in the Moodle server to the trust certificate file to be used for signing the Java applets';
$string['check_activity'] = 'Check activity';
$string['check_activity_description'] = 'How often the users\' activity in EJSApp is checked (s)';
$string['check_bookings'] = 'Check your active bookings with the booking system.';
$string['collab_access'] = 'This is a collaborative session.';
$string['controller_fail_msg'] = 'Error while trying to load the controller';
$string['controllerfile'] = 'Easy Java(script) Simulation Controller';
$string['controller_file'] = '.cnt file with the controller to be load when the EJS is initialized';
$string['controllerfile_help'] = 'Select the .cnt file with the code of the controller to be load when the the EJS application is initialized.';
$string['controller_load_msg'] = 'A controller for this lab is going to be loaded';
$string['css_rules'] = 'Create your own css rules to change the visual aspect of the javascript application';
$string['css_rules_help'] = 'Important! Write each selector and the beginning of its declaration (the opening curly bracket) in the same line.';
$string['css_style'] = 'CSS stylesheet for a Javascript application';
$string['custom_height'] = 'Applet height (px)';
$string['custom_height_required'] = 'WARNING: Applet height was not set. You must provide a different value.';
$string['custom_width'] = 'Applet width (px)';
$string['custom_width_required'] = 'WARNING: Applet width was not set. You must provide a different value.';
$string['default_certificate_set'] = 'Trust certificate settings. (Only important if you want to automatically sign the applets uploaded with EJSApp)';
$string['default_general_set'] = 'General settings';
$string['ejsapp'] = 'EJSApp';
$string['ejsapp:accessremotelabs'] = 'Access to all the remote laboratories';
$string['ejsapp_activity_selection'] = 'EJSApp activity selection';
$string['ejsapp:addinstance'] = 'Add a new EJSApp activity';
$string['ejsapp_error'] = 'The EJSApp activity you are trying to access does not exist.';
$string['ejsappfieldset'] = 'Custom example fieldset';
$string['ejsappname'] = 'Lab name';
$string['ejsapp:requestinformation'] = 'Request information for third parties plugins';
$string['ejsapp:view'] = 'View an EJSApp activity';
$string['EJS_codebase'] = 'WARNING: The manifest in the applet you uploaded does not specified this Moodle server in the \'codebase\' parameter, so it has not been signed.';
$string['EJS_version'] = 'WARNING: The applet file was not generated with EJS 4.37 (build 121201), or higher. Recompile it with a newer version of EJS.';
$string['end_message'] = 'End of reproduction';
$string['event_booked'] = 'Lab is booked in a different course';
$string['event_collab'] = 'Working with the EJSApp activity in collaborative mode';
$string['event_inactive'] = 'Lab is inactive';
$string['event_viewed'] = 'EJSApp activity viewed';
$string['event_wait'] = 'Waiting for the lab to be free';
$string['event_working'] = 'Working with the EJSApp activity';
$string['export_all_data'] = 'Export data for all EJSApp activities in this course';
$string['export_this_data'] = 'Export data for this EJSAppp activity';
$string['is_rem_lab'] = 'Remote experimental system?';
$string['is_rem_lab_help'] = 'If this EJSApp connects to real remote resources AND you want the EJSApp Booking System to manage their access, select "yes". Otherwise, select "no". NOTE: You need the Remlab Manager block for this option to be available.';
$string['jar_file'] = '.jar or .zip file that encapsulates the  EJsS lab';
$string['mail_content1_lab_down'] = 'One of your previously operative remote labs (';
$string['mail_content1_lab_not_checkable'] = 'The state of one of your remote labs (';
$string['mail_content1_lab_up'] = 'One of your previously not accessible remote labs (';
$string['mail_content2_lab_down'] = '- IP:';
$string['mail_content2_lab_not_checkable'] = '- IP:';
$string['mail_content2_lab_up'] = '- IP:';
$string['mail_content3_lab_down'] = ') has ceased to be accessible. \r\n';
$string['mail_content3_lab_not_checkable'] = ') could not be checked.';
$string['mail_content3_lab_up'] = ') is operative once again.';
$string['mail_content4_lab_down'] = 'A list of the inaccessible or inoperative devices is given below: \r\n';
$string['mail_subject_lab_down'] = 'Lab Down Alert';
$string['mail_subject_lab_not_checkable'] = 'Not Checkable Lab State Alert';
$string['mail_subject_lab_up'] = 'Lab Up Notice';
$string['manifest_error'] = '> Can\'t find or open manifest .mf. Check the file you uploaded.';
$string['modulename'] = 'EJSApp';
$string['modulename_help'] = 'The EJSApp activity module enables teachers to add a java applets created with Easy Java Simulations (EJS) into their Moodle courses.

EJS applets will be embedded into Moodle courses. The teacher can select to keep the orginal applet size or let Moodle to resize it according to the available space. If the EJS applet was compiled using the "Add language facilities" option in EJS, the applet embedded into Moodle with the EJSApp activity will automatically set its language to the one selected by the user in Moodle, if possible. This activity supports configuring conditional access restrictions.

When used along with the EJSApp File Browser block, students can save the state of the EJS applet, when it is running, by just right-clicking on it and selecting the proper option in the menu. The information of these states is saved into an .xml (for Java) or .json (for Javascript) file which is stored in the private files area (EJSApp File Browser). These states can be recovered by an EJS applet in two different ways: clicking on the .xml or .json files in the EJSApp File Browser block or right-clicking on the EJS applet and selecting the proper option in the menu. If the EJS applet is prepared to do so, it can also save text or image files and store them in the private files area.

When used along with the EJSApp Collab Sessions block, Moodle users can work with the same EJS applet in a synchronous way, meaning the applet will show the same state for all the users in the collaborative session. Thanks to this block, users can create sessions, invite other users and work together with the same EJSApp activity.';
$string['modulenameplural'] = 'EJSApps';
$string['moodle_resize'] = 'Let Moodle set the size';
$string['more_text'] = 'Optional text after the EJsS lab';
$string['no_booking'] = 'You do not have an active booking for this lab.';
$string['noejsapps'] = 'There are no EJSApp activities in this course';
$string['no_ejsapps'] = 'The selected EJSApp activity doesn\'t have personalized variables';
$string['personalized_values'] = 'personalized_values_';
$string['personalize_vars'] = 'Personalize variables of the EJS lab';
$string['pluginadministration'] = 'EJSApp administration';
$string['pluginname'] = 'EJSApp';
$string['practiceintro'] = 'Practice identifier';
$string['practiceintro_help'] = 'The identifier of the practice you want to use with this experimental system. NOTE: You need the Remlab Manager block for this option to be available.';
$string['practiceintro_required'] = 'WARNING: If you want to configure this activity as a remote lab, you need to specify a practice identifier previously defined in the Remlab Manager block.';
$string['recording_fail_msg'] = 'Error while trying to run the recording';
$string['recordingfile'] = 'Easy Java(script) Simulations Recording';
$string['recording_file'] = '.rec file with the recording to be run when this EJS lab loads';
$string['recordingfile_help'] = 'Select the .rec file with the interaction recording the EJS application should run.';
$string['recording_load_msg'] = 'A recording with this lab is going to be run';
$string['refresh'] = 'Try refreshing your window now.';
$string['seconds'] = 'seconds left.';
$string['state_fail_msg'] = 'Error while trying to load the state';
$string['statefile'] = 'Easy Java(script) Simulation State';
$string['state_file'] = '.xml or .json file with the state to be read when this EJsS lab loads';
$string['statefile_help'] = 'Select the .xml (for Java) or .json (for Javascript) file with the state the EJsS application should load.';
$string['state_load_msg'] = 'The lab state is going to be updated';
$string['time_is_up'] = 'Your time with the remote lab has ended. If you want to keep working with it, make a new booking and/or refresh this page.';
$string['use_personalized_vars'] = 'Personalize variables for each user?';
$string['use_personalized_vars_help'] = 'Select yes if you know the name of some of the variables in the EJS model and you want them to adquire different values for each of the users accessing this application.';
$string['user_resize'] = 'Let the user set the size';
$string['users_ejsapp_selection'] = 'Select the users and the EJSApp activity';
$string['variable_name'] = 'Variable';
$string['variable_value'] = 'Value';
$string['var_name'] = 'Name {no}';
$string['var_name_help'] = 'Name of the variable in the EJS model.';
$string['vars_incorrect_type'] = 'WARNING: The specified type and values for this variable does not correspond to each other.';
$string['vars_required'] = 'WARNING: If you want to use personalized variables, you must specify at least one.';
$string['var_type'] = 'Type {no}';
$string['var_type_help'] = 'Type of the variable in the EJS model.';