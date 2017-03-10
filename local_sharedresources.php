<?php 

                        
/**
 * Strings for component 'local_sharedresources', language 'pt_br', branch 'MOODLE_30_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['adminrepository'] = 'Admin Repository';
$string['clinonexistingcontext'] = 'Error: Non existing context';
$string['clinonexistingpath'] = 'Error: Path does not exist';
$string['configdefaulttaxonomypurposeonimport'] = 'The taxonomy purpose tells why the taxonomy is used for. some metadata schema allows multiple taxonomies to be used at once for distinct purposes.';
$string['confignotfound'] = 'Config file not found';
$string['config_private_catalog'] = 'If checked, the sharedresource library is not accessible to unlogged users. sharedresources indexs will NOT be harveastable by OAI endpoint';
$string['confirm'] = 'Confirm';
$string['deducetaxonomyfrompath'] = 'Guess taxonomy from path';
$string['deducetaxonomyfrompath_help'] = 'If enabled, the relative path of the resource denotes the taxonomy. The discipline taxonomy will be automatically be filled with taxonomy entries.';
$string['defaulttaxonomypurposeonimport'] = 'Taxonomy purpose for import';
$string['doresetvolume'] = 'Reset';
$string['errorinvalidresource'] = 'Invalid resource';
$string['errorinvalidresourceid'] = 'Invalid resource ID';
$string['errormnetpeer'] = 'MNET client initialisation error';
$string['errornotadir'] = 'The import directory does not exist or is not accessible';
$string['exclusionpattern'] = 'Exclusion pattern';
$string['exclusionpattern_help'] = 'Filenames matching this pattern will NOT be indexed. The pattern admits wildcards (e.g. "*.jpg" will ignore all JPEG images)';
$string['filestoimport'] = 'Files to import from {$a}';
$string['importpath'] = 'Import path';
$string['importpath_help'] = 'This path can point any location in the local server\'s filesystem.
Files should have been uploaded by an administrator in this location, and the location must be readable by the web server.
The whole directory will be scanned and all physical files will be indexed. MEtadata might be initialized from an optional "metadata.csv" in each directory. This file will of course
NOT be indexed itself.';
$string['installltitool'] = 'Install the LTI Tool';
$string['keywords'] = 'Mots clefs';
$string['massimport'] = 'Mass import';
$string['newresource'] = 'Add a new resource';
$string['private_catalog'] = 'Private catalog';
$string['publish_sharedresource'] = 'Publish Sharedresource';
$string['reinitialized'] = '{$a} files unmarked';
$string['resetvolume'] = 'Reset volume';
$string['resetvolume_help'] = 'When processing, files are marked with a "__" prefix to allow respawn of the import if memory or processing limits failure. You can reset the initial state of files using this option.';
$string['resourceimport'] = 'Resource Import';
$string['resourcespushout'] = 'Exporting to a provider library';
$string['rpcsharedresourceerror'] = 'RPC mod/sharedresource/get_list:<br/>{$a}';
$string['topkeywords'] = 'Top keywords';