<?php 

                        
/**
 * Strings for component 'auth_googleoauth2', language 'pt_br', branch 'MOODLE_32_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['auth_battlenetclientid'] = 'Your Client ID/Secret can be generated in the <a href="https://dev.battle.net/apps/mykeys" target="_blank">Battle.net API site</a>.
Enter the following settings when creating an application (note that Battle.net only supports https url, so your Moodle site must support https):
<br/>Web site: {$a->siteurl}
<br/>Register callback url: {$a->callbackurl} [it MUST BE a HTTPS url otherwise Battle.net will refuse  to log you in]
<br/>Franchises: Starcraft II';
$string['auth_battlenetclientid_key'] = 'Battle.net key';
$string['auth_battlenetclientsecret'] = '';
$string['auth_battlenetclientsecret_key'] = 'Battle.net secret';
$string['auth_dropboxclientid'] = 'Your app Key/Secret are generated in the <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox app console</a>.
Enter the following settings when creating an application (note that Dropbox only supports https url, so your Moodle site must support https):
<br/>App website: {$a->siteurl}
<br/>Redirect URIs: {$a->callbackurl}';
$string['auth_dropboxclientsecret'] = '';
$string['auth_facebookclientid'] = 'Your App ID/Secret can be generated in your <a href="https://developers.facebook.com/apps/" target="_blank">Facebook developer page</a>:
<br/>Add a new app > Website > Enter your site name as app name > Create new facebook app ID > Enter the Site URL - no need to enter Mobile URL >
On the confirmation page, look for the "Skip to Developer Dashboard" link > on the app dashboard you should find the id/secret > Settings > Advanced > enter the Valid OAuth redirect URIs
<br/>Site URL: {$a->siteurl}
<br/>App domains: {$a->sitedomain}
<br/>Valid OAuth redirect URIs: {$a->callbackurl}
<br/><strong>WARNING: Facebook recently changed the API. It is not working for newly created API key. For example we know it is broken from Facebook API 2.8
and it is working up to Facebook API 2.2. We didn\'t test Facebook API 2.3, 2.4, 2.5, 2.6 and 2.7. To summarize if you don\'t have already an old Facebook API key,
then it is guarantee that Facebook won\'t work in this login. Please look at plugin alternatives or wait for the next plugin big update (not planned yet).</strong>';
$string['auth_facebookclientsecret'] = '';
$string['auth_githubclientid'] = 'Your client ID/Secret can be generated in your <a href="https://github.com/settings/applications/new" target="_blank">Github register application page</a>:
<br/>Homepage URL: {$a->siteurl}
<br/>Authorization callback URL: {$a->callbackurl}';
$string['auth_githubclientsecret'] = '';
$string['auth_googleclientid'] = 'Your client ID/Secret can be generated in the <a href="https://code.google.com/apis/console" target="_blank">Google console API</a>:
<br/>
Project > APIS & AUTH > Credentials > Create new Client ID > Web application
<br/>
Authorized Javascript origins: {$a->jsorigins}
<br/>
Authorized Redirect URI: {$a->redirecturls}
<br/>
You also need to <strong>enable the "Google+ API"</strong> in Project > APIS & AUTH > APIs';
$string['auth_googleclientsecret'] = '';
$string['auth_googleipinfodbkey'] = 'IPinfoDB is a service that let you find out what is the country and city of the visitor.
This setting is optional. You can subscribe to <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> to get a free key.<br/>
Website: {$a->website}';
$string['auth_linkedinclientid'] = 'Your API/Secret keys can be generated in your <a href="https://www.linkedin.com/secure/developer" target="_blank">Linkedin register application page</a>:
<br/>Website URL: {$a->siteurl}
<br/>OAuth 2.0 Accept Redirect URL: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Linkedin API Key';
$string['auth_linkedinclientsecret'] = '';
$string['auth_linkedinclientsecret_key'] = 'Linkedin Secret key';
$string['auth_messengerclientid'] = 'Your Client ID/Secret can be generated in your <a href="https://account.live.com/developers/applications" target="_blank">Windows Live apps page</a>:
<br/>Redirect domain: {$a->domain}';
$string['auth_messengerclientid_key'] = 'Messenger Client ID';
$string['auth_messengerclientsecret'] = '';
$string['auth_messengerclientsecret_key'] = 'Messenger Client secret';
$string['auth_microsoftclientid'] = 'Your Client ID/Secret can be generated at <a href="https://apps.dev.microsoft.com/" target="_blank">Microsoft Application Registration Portal</a>:
<br />Redirect URI: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'Microsoft v2 Application ID';
$string['auth_microsoftclientsecret'] = '';
$string['auth_microsoftclientsecret_key'] = 'Microsoft v2 Application secret';
$string['auth_vkclientid'] = 'Your app id and secret keys can be generated in <a href="https://vk.com/editapp?act=create" target="_blank">VK developer page</a>.<br/>
Base domain: {$a->siteurl} (without http://)<br/>
Site address: {$a->callbackurl}';
$string['auth_vkclientid_key'] = 'VK app id';
$string['auth_vkclientsecret'] = '';
$string['auth_vkclientsecret_key'] = 'VK app secret';
$string['microsoft_failure'] = 'Did not receive an authorization code from the Microsoft servers.';
$string['oauth2displaybuttonshelp'] = 'Display the Google/Facebook/... logo buttons on the top of the login page.
If you want to position the buttons yourself in your login page, you can keep this option disabled and add the following code: {$a}';