<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );



require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");
require_once("$IP/extensions/Nuke/SpecialNuke.php");
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/DeleteBatch/DeleteBatch.php" );
#require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
require_once( "$IP/extensions/NukeDPL/NukeDPL.php" );
# Enables use of WikiEditor by default but still allow users to disable it in preferences
#$wgDefaultUserOptions['usebetatoolbar'] = 1;
#$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
 
# Displays the Preview and Changes tabs
#$wgDefaultUserOptions['wikieditor-preview'] = 1;
 
# Displays the Publish and Cancel buttons on the top right side
#$wgDefaultUserOptions['wikieditor-publish'] = 1;

# $wgPFEnableStringFunctions = true;

# Assign the usermerge right to a usergroup, i.e. to the bureaucrats:
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
$wgGroupPermissions['sysop']['usermerge'] = true;
$wgUserMergeUnmergeable = array( 'sysop', 'bureaucrat' );
$wgShowExceptionDetails = true;

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename         = "STAB Resources";

#To enable different types of files to be uploaded
$wgFileExtensions = array('gif','png','jpg','jpeg','svg','xls','doc', 'pdf', 'ppt');

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/resources";
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgScriptPath/wiki_logo.gif";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "sysad@stab-iitb.org";
$wgPasswordSender = "sysad@stab-iitb.org";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "stabwiki";
$wgDBuser           = "stab";
$wgDBpassword       = "STABDatabase";

# MySQL specific settings
$wgDBprefix         = "mwiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "TYPE=MyISAM";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgUseImageMagick = false;
$wgImageMagickConvertCommand = "/usr/bin/convert";

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgLocalInterwiki   = strtolower( $wgSitename );

$wgLanguageCode = "en";

$wgSecretKey = "b4b23853419e338607d8e6f72f7d31b43590735cba148f5f5c1f6d45b805c7a3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = 'vector';
##$wgDefaultSkin = 'gumax';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://creativecommons.org/licenses/publicdomain/";
$wgRightsText = "Public Domain";
$wgRightsIcon = "${wgScriptPath}/skins/common/images/public-domain.png";
# $wgRightsCode = "pd"; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

#Restrictions!

#No more accounts
$wgGroupPermissions['*']['createaccount']    = false;

#no anonymous edits
$wgGroupPermissions['*']['read']             = true;
$wgGroupPermissions['*']['edit']             = false;
$wgGroupPermissions['*']['createpage']       = false;
$wgGroupPermissions['*']['createtalk']       = false;
$wgGroupPermissions['*']['writeapi']         = false;

$wgGroupPermissions['user']['move']             = true;
$wgGroupPermissions['user']['move-subpages']    = true;
$wgGroupPermissions['user']['move-rootuserpages'] = true; // can move root userpages
//$wgGroupPermissions['user']['movefile']         = false;     // Disabled for now due to possible bugs and security concerns
$wgGroupPermissions['user']['read']             = true;
$wgGroupPermissions['user']['edit']             = false;
$wgGroupPermissions['user']['createpage']       = false;
$wgGroupPermissions['user']['createtalk']       = false;
$wgGroupPermissions['user']['writeapi']         = true;
$wgGroupPermissions['user']['upload']           = true;
$wgGroupPermissions['user']['reupload']         = true;
$wgGroupPermissions['user']['reupload-shared']  = true;
$wgGroupPermissions['user']['minoredit']        = true;
$wgGroupPermissions['user']['purge']            = false; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['user']['sendemail']        = false;

#Confirm Account permissions
$wgGroupPermissions['sysop']['confirmaccount'] = true;
$wgGroupPermissions['sysop']['requestips'] = true;
$wgGroupPermissions['sysop']['lookupcredentials'] = true;

$wgGroupPermissions['sysop']['read']             = true;
$wgGroupPermissions['sysop']['edit']             = true;
$wgGroupPermissions['sysop']['createpage']       = true;
$wgGroupPermissions['sysop']['createtalk']       = true;
$wgGroupPermissions['sysop']['writeapi']         = true;
$wgGroupPermissions['sysop']['upload']           = true;
$wgGroupPermissions['sysop']['reupload']         = true;
$wgGroupPermissions['sysop']['reupload-shared']  = true;
$wgGroupPermissions['sysop']['minoredit']        = true;
$wgGroupPermissions['sysop']['purge']            = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['sysop']['sendemail']        = true;
$wgGroupPermissions['sysop']['block']            = true;
$wgGroupPermissions['sysop']['createaccount']    = false; // No more account creation by sysops
$wgGroupPermissions['sysop']['delete']           = true;
$wgGroupPermissions['sysop']['bigdelete']        = true; // can be separately configured for pages with > $wgDeleteRevisionsLimit revs
$wgGroupPermissions['sysop']['deletedhistory']   = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['sysop']['deletedtext']      = true; // can view deleted revision text
$wgGroupPermissions['sysop']['undelete']         = true;
$wgGroupPermissions['sysop']['editinterface']    = true;
$wgGroupPermissions['sysop']['editusercss']      = true;
$wgGroupPermissions['sysop']['edituserjs']       = true;
$wgGroupPermissions['sysop']['import']           = true;
$wgGroupPermissions['sysop']['importupload']     = true;
$wgGroupPermissions['sysop']['move']             = true;
$wgGroupPermissions['sysop']['move-subpages']    = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['patrol']           = true;
$wgGroupPermissions['sysop']['autopatrol']       = true;
$wgGroupPermissions['sysop']['protect']          = true;
$wgGroupPermissions['sysop']['proxyunbannable']  = true;
$wgGroupPermissions['sysop']['rollback']         = true;
$wgGroupPermissions['sysop']['trackback']        = true;
$wgGroupPermissions['sysop']['upload']           = true;
$wgGroupPermissions['sysop']['reupload']         = true;
$wgGroupPermissions['sysop']['reupload-shared']  = true;
$wgGroupPermissions['sysop']['unwatchedpages']   = true;
$wgGroupPermissions['sysop']['autoconfirmed']    = true;
$wgGroupPermissions['sysop']['upload_by_url']    = true;
$wgGroupPermissions['sysop']['ipblock-exempt']   = true;
$wgGroupPermissions['sysop']['blockemail']       = true;
$wgGroupPermissions['sysop']['markbotedits']     = true;
$wgGroupPermissions['sysop']['apihighlimits']    = true;
$wgGroupPermissions['sysop']['browsearchive']    = true;
$wgGroupPermissions['sysop']['noratelimit']      = true;
$wgGroupPermissions['sysop']['movefile']         = true;
$wgGroupPermissions['sysop']['unblockself']      = true;
$wgGroupPermissions['sysop']['suppressredirect'] = true;
#$wgGroupPermissions['sysop']['mergehistory']     = true;
#$wgGroupPermissions['sysop']['maintenanceshell'] = true;

$wgGroupPermissions['developer']['userrights']  = true;
$wgGroupPermissions['developer']['noratelimit'] = true;
$wgGroupPermissions['developer']['siteadmin'] = true;

#CategoryTree Extension settings
$wgUseAjax = true;
#require_once("{$IP}/extensions/CategoryTree/CategoryTree.php");

$wgCategoryTreeCategoryPageOptions['mode']='all';
$wgCategoryTreeSpecialPageOptions['mode']='all';
#$wgCategoryTreeSidebarRoot='Tutorials';

$wgArticlePath = "/wiki/$1";  # Virtual path (left part of first rewrite rule). MUST be DIFFERENT from the path set above ($wgScriptPath)!
$wgUsePathInfo = true;
$wgLogo = "/resources/wiki_logo.gif"; # You may need adjust that to point where your logo is. Without it your logo will disappear.

$wgAllowUserCss = true;
$wgUseTeX = true;
$wgTexvc = "/resources/math/texvc";

#require_once("$IP/extensions/MaintenanceShell/MaintenanceShell.php");

$wgShowSQLErrors = 1;

?>
