<?php 

                        
/**
 * Strings for component 'cache_mongodb', language 'pt_br', branch 'MOODLE_25_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['database_help'] = 'The name of the database to make use of.';
$string['extendedmode'] = 'Use extended keys';
$string['extendedmode_help'] = 'If enabled full key sets will be used when working with the plugin. This isn\'t used internally yet but would allow you to easily search and investigate the MongoDB plugin manually if you so choose. Turning this on will add an small overhead so should only be done if you require it.';
$string['password_help'] = 'The password of the user being used for the connection.';
$string['pluginname'] = 'MongoDB';
$string['replicaset_help'] = 'The name of the replica set to connect to. If this is given the master will be determined by using the ismaster database command on the seeds, so the driver may end up connecting to a server that was not even listed.';
$string['server'] = 'Server';
$string['server_help'] = 'This is the connection string for the server you want to use. Multiple servers can be specified by separating them with comma\'s';
$string['testserver'] = 'Test server';
$string['testserver_desc'] = 'This is the connection string for the test server you want to use. Test servers are entirely optional, by specifiying a test server you can run PHPunit tests for this store and can run the performance tests.';
$string['usesafe_help'] = 'If enabled the usesafe option will be used during insert, get, and remove operations. If you\'ve specified a replica set this will be forced on anyway.';
$string['usesafevalue'] = 'Use safe value';
$string['usesafevalue_help'] = 'You can choose to provide a specific value for use safe. This will determine the number of servers that operations must be completed on before they are deemed to have been completed.';