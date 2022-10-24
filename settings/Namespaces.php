<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

#名字空间
#附带文档
define("NS_OMAKE", 506);
define("NS_OMAKE_TALK", 507);
$wgExtraNamespaces[NS_OMAKE] = "附带文档";
$wgExtraNamespaces[NS_OMAKE_TALK] = "附带文档讨论";
#游戏对话
define("NS_GDIALOGUE", 508);
define("NS_GDIALOGUE_TALK", 509);
$wgExtraNamespaces[NS_GDIALOGUE] = "游戏对话";
$wgExtraNamespaces[NS_GDIALOGUE_TALK] = "游戏对话讨论";
#歌词
define("NS_LYRICS", 512);
define("NS_LYRICS_TALK", 513);
$wgExtraNamespaces[NS_LYRICS] = "歌词";
$wgExtraNamespaces[NS_LYRICS_TALK] = "歌词讨论";

# 保护名字空间
$wgNamespaceProtection[NS_OMAKE] = ["editOmake"];
$wgNamespaceProtection[NS_GDIALOGUE] = ["editGDialogue"];
$wgNamespaceProtection[NS_LYRICS] = ["editLyrics"];
$wgNamespaceProtection[NS_PROJECT] = ["editPROJECT"];
$wgNamespaceProtection[NS_HELP] = ["editHELP"];
$wgNamespaceProtection[NS_TEMPLATE] = ["editTEMPLATE"];

$wgNamespaceProtection[102] = ["editPROPERTY"];
$wgNamespaceProtection[108] = ["editPROPERTY"];

$wgNamespaceContentModels[NS_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_USER_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_PROJECT_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_FILE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_MEDIAWIKI_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_TEMPLATE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_HELP_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_CATEGORY_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_OMAKE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_GDIALOGUE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_LYRICS_TALK] = 'flow-board';

//子页面
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgNamespacesWithSubpages[NS_OMAKE] = true;
$wgNamespacesWithSubpages[NS_GDIALOGUE] = true;
$wgNamespacesWithSubpages[NS_LYRICS] = false;
$wgNamespacesWithSubpages[NS_PROJECT] = true;
$wgNamespacesWithSubpages[NS_HELP] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;

$wgContentNamespaces = [NS_MAIN, NS_OMAKE, NS_GDIALOGUE, NS_LYRICS];
$wgSitemapNamespaces = [NS_MAIN, NS_USER, NS_PROJECT, NS_FILE, NS_HELP, NS_OMAKE, NS_GDIALOGUE, NS_LYRICS];

#Set default searching
$wgNamespacesToBeSearchedDefault = [
	NS_MAIN => true,
	NS_TALK => false,
	NS_USER => false,
	NS_USER_TALK => false,
	NS_PROJECT => true,
	NS_PROJECT_TALK => false,
	NS_FILE => false,
	NS_FILE_TALK => false,
	NS_MEDIAWIKI => false,
	NS_MEDIAWIKI_TALK => false,
	NS_TEMPLATE => false,
	NS_TEMPLATE_TALK => false,
	NS_HELP => true,
	NS_HELP_TALK => false,
	NS_CATEGORY => false,
	NS_CATEGORY_TALK => false,
	NS_OMAKE => true,
	NS_OMAKE_TALK => false,
	NS_GDIALOGUE => true,
	NS_GDIALOGUE_TALK => false,
	NS_LYRICS => true,
	NS_LYRICS_TALK => false,
];
