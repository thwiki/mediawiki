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
$wgRestPath = "$wgScriptPath/rest";

// [THBWiki] Citizen 命令面板等前端代码需要 REST 基路径；1.46 默认不把 RestPath 导出到 mw.config。
// 用 MakeGlobalVariablesScript（逐请求）而不是 ResourceLoaderGetConfigVars（startup 模块会被缓存 5 小时）。
$wgHooks['MakeGlobalVariablesScript'][] = static function ( array &$vars, $out ) {
	$vars['wgRestPath'] = $out->getConfig()->get( 'RestPath' );
};

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";
$wgArticlePath = "/$1";
$wgUsePathInfo = true;
$wgCanonicalRedirect = true;