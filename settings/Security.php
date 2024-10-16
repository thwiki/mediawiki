<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

require_once "$IP/settings/secrets/Security.php";

## 强制使用HTTPS
$wgForceHTTPS = true;

## 只在HTTPS时传送Cookie
$wgCookieSecure = true;

## 只在同域名时传送Cookie
$wgCookieSameSite = 'Lax';

## 禁止在IFRAME中嵌入编辑页面
$wgEditPageFrameOptions = false;

## 关闭输出压缩，压缩改由NGINX完成
$wgDisableOutputCompression = true;

## 允许Schema更新
$wgAllowSchemaUpdates = true;

## 预防漏洞
$wgWhitelistRead = [];
$wgWhitelistReadRegexp = [];

# 跨站AJAX域名白名单
$wgCrossSiteAJAXdomains = ['test.thwiki.cc', 'tool.thwiki.cc', 'touhou.cd', 'cd.thwiki.cc', 'cdtest.thwiki.cc'];
