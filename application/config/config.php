<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(empty($_SESSION['tire_details']))
$_SESSION['tire_details'] = array(
			"L1" => array(
				"tireidset" => "tire_1",
				"sidewall" => "side_L1",
				"brand" => "brand_L1",
				"type" => "type_L1",
				"size" => "size_L1",
				"dot" => "dot_L1",
				"category" => "category_L1",
				"pressureset[]" => "pressureset_L1",
				"tdset[]" => "tdset_L1",
				"td2set[]" => "td2set_L1",
				"td3set[]" => "td3set_L1",
				"td4set[]" => "td4set_L1",
				"tubeset[]" => "tubeset_L1",
				"flapset[]" => "flapset_L1",
				"rimset[]" => "rimset_L1",
				"reasonset[]" => "reasonset_L1",
			),
			"R1"=> array(
				"tireidset" => "tire_2",
				"sidewall" => "side_R1",
				"brand" => "brand_R1",
				"type" => "type_R1",
				"size" => "size_R1",
				"dot" => "dot_R1",
				"category" => "category_R1",
				"pressureset[]" => "pressureset_R1",
				"tdset[]" => "tdset_R1",
				"td2set[]" => "td2set_R1",
				"td3set[]" => "td3set_R1",
				"td4set[]" => "td4set_R1",
				"tubeset[]" => "tubeset_R1",
				"flapset[]" => "flapset_R1",
				"rimset[]" => "rimset_R1",
				"reasonset[]" => "reasonset_R1",
			),
			"S1"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_S1",
				"brand" => "brand_S1",
				"type" => "type_S1",
				"size" => "size_S1",
				"dot" => "dot_S1",
				"category" => "category_S1",
				"pressureset[]" => "pressureset_S1",
				"tdset[]" => "tdset_S1",
				"td2set[]" => "td2set_S1",
				"td3set[]" => "td3set_S1",
				"td4set[]" => "td4set_S1",
				"tubeset[]" => "tubeset_S1",
				"flapset[]" => "flapset_S1",
				"rimset[]" => "rimset_S1",
				"reasonset[]" => "reasonset_S1",
			),
			"L21"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_L21",
				"brand" => "brand_L21",
				"type" => "type_L21",
				"size" => "size_L21",
				"dot" => "dot_L21",
				"category" => "category_L21",
				"pressureset[]" => "pressureset_L21",
				"tdset[]" => "tdset_L21",
				"td2set[]" => "td2set_L21",
				"td3set[]" => "td3set_L21",
				"td4set[]" => "td4set_L21",
				"tubeset[]" => "tubeset_L21",
				"flapset[]" => "flapset_L21",
				"rimset[]" => "rimset_L21",
				"reasonset[]" => "reasonset_L21",
			)/*,
			"L20"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_L20",
				"brand" => "brand_L20",
				"type" => "type_L20",
				"size" => "size_L20",
				"dot" => "dot_L20",
				"category" => "category_L20",
				"pressureset[]" => "pressureset_L20",
				"tdset[]" => "tdset_L20",
				"td2set[]" => "td2set_L20",
				"td3set[]" => "td3set_L20",
				"td4set[]" => "td4set_L20",
				"tubeset[]" => "tubeset_L20",
				"flapset[]" => "flapset_L20",
				"rimset[]" => "rimset_L20",
				"reasonset[]" => "reasonset_L20",
			),
			"R21"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_R21",
				"brand" => "brand_R21",
				"type" => "type_R21",
				"size" => "size_R21",
				"dot" => "dot_R21",
				"category" => "category_R21",
				"pressureset[]" => "pressureset_R21",
				"tdset[]" => "tdset_R21",
				"td2set[]" => "td2set_R21",
				"td3set[]" => "td3set_R21",
				"td4set[]" => "td4set_R21",
				"tubeset[]" => "tubeset_R21",
				"flapset[]" => "flapset_R21",
				"rimset[]" => "rimset_R21",
				"reasonset[]" => "reasonset_R21",
			),
			"R20"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_R20",
				"brand" => "brand_R20",
				"type" => "type_R20",
				"size" => "size_R20",
				"dot" => "dot_R20",
				"category" => "category_R20",
				"pressureset[]" => "pressureset_R20",
				"tdset[]" => "tdset_R20",
				"td2set[]" => "td2set_R20",
				"td3set[]" => "td3set_R20",
				"td4set[]" => "td4set_R20",
				"tubeset[]" => "tubeset_R20",
				"flapset[]" => "flapset_R20",
				"rimset[]" => "rimset_R20",
				"reasonset[]" => "reasonset_R20",
			),
			"L31"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_L31",
				"brand" => "brand_L31",
				"type" => "type_L31",
				"size" => "size_L31",
				"dot" => "dot_L31",
				"category" => "category_L31",
				"pressureset[]" => "pressureset_L31",
				"tdset[]" => "tdset_L31",
				"td2set[]" => "td2set_L31",
				"td3set[]" => "td3set_L31",
				"td4set[]" => "td4set_L31",
				"tubeset[]" => "tubeset_L31",
				"flapset[]" => "flapset_L31",
				"rimset[]" => "rimset_L31",
				"reasonset[]" => "reasonset_L31",
			),
			"L30"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_L30",
				"brand" => "brand_L30",
				"type" => "type_L30",
				"size" => "size_L30",
				"dot" => "dot_L30",
				"category" => "category_L30",
				"pressureset[]" => "pressureset_L30",
				"tdset[]" => "tdset_L30",
				"td2set[]" => "td2set_L30",
				"td3set[]" => "td3set_L30",
				"td4set[]" => "td4set_L30",
				"tubeset[]" => "tubeset_L30",
				"flapset[]" => "flapset_L30",
				"rimset[]" => "rimset_L30",
				"reasonset[]" => "reasonset_L30",
			),
			"R31"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_R31",
				"brand" => "brand_R31",
				"type" => "type_R31",
				"size" => "size_R31",
				"dot" => "dot_R31",
				"category" => "category_R31",
				"pressureset[]" => "pressureset_R31",
				"tdset[]" => "tdset_R31",
				"td2set[]" => "td2set_R31",
				"td3set[]" => "td3set_R31",
				"td4set[]" => "td4set_R31",
				"tubeset[]" => "tubeset_R31",
				"flapset[]" => "flapset_R31",
				"rimset[]" => "rimset_R31",
				"reasonset[]" => "reasonset_R31",
			),
			"R30"=> array(
				"tireidset" => "tire_1",
				"sidewall" => "side_R30",
				"brand" => "brand_R30",
				"type" => "type_R30",
				"size" => "size_R30",
				"dot" => "dot_R30",
				"category" => "category_R30",
				"pressureset[]" => "pressureset_R30",
				"tdset[]" => "tdset_R30",
				"td2set[]" => "td2set_R30",
				"td3set[]" => "td3set_R30",
				"td4set[]" => "td4set_R30",
				"tubeset[]" => "tubeset_R30",
				"flapset[]" => "flapset_R30",
				"rimset[]" => "rimset_R30",
				"reasonset[]" => "reasonset_R30",
			)*/
		);
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= '';

/*
|--------------------------------------------------------------------------
| Content Delivery Network URL
|--------------------------------------------------------------------------
|
| Loading content like .js, .png, .css files on a CDN is much better. 
| This allows you to support CDNs.
|
|	http://example.com/
|
| Use the normal base_url() function and upload your /assets and /content
| to the CDN. 
|
*/
$config['cdn_url']	= '';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = '';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'AUTO' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol'] = "REQUEST_URI";
//$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
*/

$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = FALSE;


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';


/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify with a regular expression which characters are permitted
| within your URLs.  When someone tries to submit a URL with disallowed
| characters they will get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ folder. Use a full server path with trailing slash.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/cache/ folder.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Session class you
| MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = 'KMZWA8AWAA';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_cookie_name'		= the name you want for the cookie
| 'sess_expiration'			= the number of SECONDS you want the session to last.
|   by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'sess_expire_on_close'	= Whether to cause the session to expire automatically
|   when the browser window is closed
| 'sess_encrypt_cookie'		= Whether to encrypt the cookie
| 'sess_use_database'		= Whether to save the session data to a database
| 'sess_table_name'			= The name of the session database table
| 'sess_match_ip'			= Whether to match the user's IP address when reading the session data
| 'sess_match_useragent'	= Whether to match the User Agent when reading the session data
| 'sess_time_to_update'		= how many seconds between CI refreshing Session Information
|
*/
$config['sess_cookie_name']		= 'ci_session';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= FALSE;
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'ci_sessions';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or 'gmt'.  This pref tells the system whether to use
| your server's local time as the master 'now' reference, or convert it to
| GMT.  See the 'date helper' page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference'] = 'local';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = FALSE;


/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';

/*
| -------------------------------------------------------------------
|  Native Auto-load
| -------------------------------------------------------------------
| 
| Nothing to do with config/autoload.php, this allows PHP autoload to work
| for base controllers and some third-party libraries.
|
*/
function __autoload($class)
{
	if(strpos($class, 'CI_') !== 0)
 	{
  		@include_once( APPPATH . 'core/'. $class . EXT );
 	}
}

/* End of file config.php */
/* Location: ./application/config/config.php */
