<?php 

                        
/**
 * Strings for component 'cache_memcached', language 'pt_br', branch 'MOODLE_25_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['bufferwrites'] = 'Buffer writes';
$string['bufferwrites_help'] = 'Enables or disables buffered I/O. Enabling buffered I/O causes storage commands to "buffer" instead of being sent. Any action that retrieves data causes this buffer to be sent to the remote connection. Quitting the connection or closing down the connection will also cause the buffered data to be pushed to the remote connection.';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Default (one-at-a-time)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Specifies the hashing algorithm used for the item keys. Each hash algorithm has its advantages and its disadvantages. Go with the default if you don\'t know or don\'t care.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['pluginname'] = 'Memcached';
$string['prefix_help'] = 'This can be used to create a "domain" for your item keys allowing you to create multiple memcached stores on a single memcached installation. It cannot be longer than 16 characters in order to ensure key length issues are not encountered.';
$string['serialiser_igbinary'] = 'The igbinary serializer.';
$string['serialiser_json'] = 'The JSON serializer.';
$string['serialiser_php'] = 'The default PHP serializer.';
$string['servers'] = 'Servers';
$string['servers_help'] = 'This sets the servers that should be utilised by this memcached adapter.
Servers should be defined one per line and consist of a server address and optionally a port and weight.
If no port is provided then the default port (11211) is used.

For example:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers_desc'] = 'The test servers get used for unit tests and for performance tests. It is entirely optional to set up test servers. Servers should be defined one per line and consist of a server address and optionally a port and weight.
If no port is provided then the default port (11211) is used.';
$string['usecompression'] = 'Use compression';
$string['usecompression_help'] = 'Enables or disables payload compression. When enabled, item values longer than a certain threshold (currently 100 bytes) will be compressed during storage and decompressed during retrieval transparently.';
$string['useserialiser'] = 'Use serialiser';
$string['useserialiser_help'] = 'Specifies the serializer to use for serializing non-scalar values.
The valid serializers are Memcached::SERIALIZER_PHP or Memcached::SERIALIZER_IGBINARY.
The latter is supported only when memcached is configured with --enable-memcached-igbinary option and the igbinary extension is loaded.';