<?php 

                        
/**
 * Strings for component 'availability_dataformcontent', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['cmid'] = 'CM id';
$string['configactivityref'] = 'Activity reference by';
$string['configactivityref_desc'] = 'This setting determines the activity property that is used for referencing from the Dataform content. By default the activity name is used as it is easy to reference from statnard Dataform fields such as select and text. You may need to use id or cmid if for instance you may have multiple multiple activities with the same name that need to be referenced from the same target Dataform.';
$string['configreservedfield'] = 'Reserved field name';
$string['configreservedfield_desc'] = 'This settings specifies a reserved name for a Dataform field in the target Dataform that will be used for storing a reference to the restricted activity. The designated field should be able to store the activity reference item (the activity name, id or cmid) as its content.';
$string['configreservedfilter'] = 'Reserved filter name';
$string['configreservedfilter_desc'] = 'This settings specifies a reserved name for a Dataform filter in the target Dataform that will be applied by the condition if exists. Such a filter can be used for adding further restrictions based on the Dataform content (e.g. start and end time).';
$string['description'] = 'Require students to have (or not have) entries with reference to this activity in the specified dataform.';
$string['error_selectdataform'] = 'You must select a dataform for the condition.';
$string['id'] = 'Id';
$string['missing'] = '(Missing activity)';
$string['pluginname'] = 'Restriction by dataform content';
$string['requires_dataformcontent'] = 'this activity is listed in <strong>{$a}</strong>';
$string['requires_notdataformcontent'] = 'this activity is not listed in <strong>{$a}</strong>';
$string['title'] = 'Dataform content';