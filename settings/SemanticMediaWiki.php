<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

# Semantic MediaWiki
# [1.46 迁移] Variables 的 #var_final 占位符必须在 SMW 解析注释之前替换，
# 因此提前注册钩子（Variables 本体仍由 settings/Extensions.php 加载）。
$wgHooks['InternalParseBeforeLinks'][] = [ 'VariablesHooks', 'onInternalParseBeforeLinks' ];
wfLoadExtension('SemanticMediaWiki');
enableSemantics('thwiki.cc');
#$smwgCacheType = CACHE_MEMCACHED;
#$smwgMainCacheType = CACHE_MEMCACHED;
#$smwgValueLookupCacheType = CACHE_MEMCACHED;
#$smwgValueLookupCacheLifetime = 60 * 60 * 24 * 7; // 7 days

#$smwgQueryResultCacheType = CACHE_MEMCACHED;
#$smwgQueryResultCacheLifetime = 60 * 60 * 24 * 14; // 14 days
#$smwgQueryResultNonEmbeddedCacheLifetime = 60 * 10;
#$smwgQueryResultCacheRefreshOnPurge = true;
//$smwgEnabledQueryDependencyLinksStore = true;

wfLoadExtension('SemanticResultFormats');

$smwgCheckForConstraintErrors = false;
// [1.46 迁移] $smwgNamespaceIndex 在 SMW 7.0 已移除；默认值即 100，无需设置
// $smwgNamespaceIndex = 100;
$smwgEnabledEditPageHelp = false;
// [1.46 迁移] $smwgQMaxSize 已移除（SMW 7）
// $smwgQMaxSize = 16;
$smwgQMaxLimit = 20000; // Max Rows
$smwgQDefaultLimit = 50; // Default Number of Rows
$smwgQMaxInlineLimit = 10000; // Max Inline Rows
// [1.46 迁移] $smwgQUpperbound 已移除（SMW 7）
// $smwgQUpperbound = 20000; // Max Offset
$smwgQPrintoutLimit = 100; // Max Printouts
$smwgBrowseFeatures = ( $smwgBrowseFeatures ?? 0 ) | SMW_BROWSE_SHOW_INVERSE | SMW_BROWSE_TLINK;

$smwgChangePropagationProtection = false;

$smwgNamespacesWithSemanticLinks = [
	NS_MAIN => true,
	NS_TALK => true,
	NS_USER => true,
	NS_USER_TALK => false,
	NS_PROJECT => true,
	NS_PROJECT_TALK => false,
	NS_FILE => true,
	NS_FILE_TALK => false,
	NS_MEDIAWIKI => false,
	NS_MEDIAWIKI_TALK => false,
	NS_TEMPLATE => false,
	NS_TEMPLATE_TALK => false,
	NS_HELP => true,
	NS_HELP_TALK => false,
	NS_CATEGORY => true,
	NS_CATEGORY_TALK => false,
	90 => true,
	NS_OMAKE => true,
	NS_OMAKE_TALK => false,
	NS_GDIALOGUE => true,
	NS_GDIALOGUE_TALK => false,
	NS_LYRICS => true,
	NS_LYRICS_TALK => false,
	NS_MODULE => false,
	NS_MODULE_TALK => false,
];

wfLoadExtension( 'SemanticScribunto' );