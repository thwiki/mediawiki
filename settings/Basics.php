<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgScriptExtension = ".php";
$wgPhpCli = "php";

# Enable Rest API
$wgEnableRestAPI = true;
$wgRestPath = "$wgScriptPath/rest";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";
$wgArticlePath = "/$1";
