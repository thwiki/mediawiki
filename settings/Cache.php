<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

# memcached设定
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = ['127.0.0.1:11211'];
$wgMsgCacheExpiry = 3600 * 24;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgUseLocalMessageCache = false;
$wgCacheDirectory = "$IP/cache";

$wgSessionsInObjectCache = true; # optional
$wgSessionCacheType = CACHE_MEMCACHED; # optional

$wgEnableSidebarCache = true; // 缓存侧边栏
$wgSidebarCacheExpiry = 3600; // 缓存1小时

#资源缓存过期时间
$wgResourceLoaderMaxage = [
	'versioned' => 3600 * 24 * 30, // 30 days
	'unversioned' => 3600 * 5, // 5 hours
];

# File Cache设定
$wgUseFileCache = true;
$wgUseGzip = false;
$wgFileCacheDirectory = "${IP}_static/filecache";
# When you make changes to this configuration file, this will make sure that cached pages are cleared.
$wgInvalidateCacheOnLocalSettingsChange = false;
