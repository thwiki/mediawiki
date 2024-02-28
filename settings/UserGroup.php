<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

# 自动确认时间
$wgAutoConfirmAge = 86400 * 5; //3days
$wgAutoConfirmCount = 10;

$wgRestrictionLevels = ['', 'autoconfirmed', 'confirmed', 'textop', 'sysop', 'bot-only', 'edit-mainpage', 'extensive'];

# 用户组权限
## 全部
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['skipcaptcha'] = false;
$wgGroupPermissions['*']['comment'] = false;

## 机器人
$wgGroupPermissions['bot']['skipcaptcha'] = true;
$wgGroupPermissions['bot']['usermerge'] = true;
$wgGroupPermissions['bot']['editsemiprotected'] = true;
$wgGroupPermissions['bot']['editprotected'] = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;
$wgGroupPermissions['bot']['bot-only'] = true;
$wgGroupPermissions['bot']['forcepreviewexempt'] = true;
$wgGroupPermissions['bot']['maintenance-api'] = true;

## 用户
$wgGroupPermissions['user']['upload_by_url'] = true;
$wgGroupPermissions['user']['skipcaptcha'] = false;
$wgGroupPermissions['user']['suppressredirect'] = false;
$wgGroupPermissions['user']['avatarupload'] = true;
$wgGroupPermissions['user']['purge'] = true;
$wgGroupPermissions['user']['comment'] = true;
//$wgRevokePermissions['user']['edit'] = true; // 暂时禁止普通用户编辑

## 自动确认用户
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = false;
$wgGroupPermissions['autoconfirmed']['editsemiprotected'] = false;

## 观察期用户
$wgGroupPermissions['preconfirm']['noratelimit'] = true; //没有使用频率限制
$wgGroupPermissions['preconfirm']['skipcaptcha'] = true; //免除验证码
$wgGroupPermissions['preconfirm']['freepurge'] = true;
$wgRevokePermissions['preconfirm']['delete'] = true;
$wgRevokePermissions['preconfirm']['deleteself'] = true;
$wgRevokePermissions['preconfirm']['deletebatch'] = true;
$wgRevokePermissions['preconfirm']['editHELP'] = true;
$wgRevokePermissions['preconfirm']['editTEMPLATE'] = true;
$wgRevokePermissions['preconfirm']['editPROPERTY'] = true;
$wgRevokePermissions['preconfirm']['editsemiprotected'] = true;
$wgRevokePermissions['preconfirm']['editprotected'] = true;

## 确认用户（免除巡查、验证码限制）
$wgGroupPermissions['confirm']['noratelimit'] = true; //没有使用频率限制
$wgGroupPermissions['confirm']['autopatrol'] = true; //自动标示为已巡查
$wgGroupPermissions['confirm']['suppressredirect'] = true; //移动页面时不在源页面创建重定向
$wgGroupPermissions['confirm']['autoconfirmed'] = true; //不受基于IP的速率限制
$wgGroupPermissions['confirm']['editsemiprotected'] = true;
$wgGroupPermissions['confirm']['skipcaptcha'] = true; //免除验证码
$wgGroupPermissions['confirm']['freepurge'] = true;
$wgGroupPermissions['confirm']['deleteself'] = true;
$wgGroupPermissions['confirm']['confirmed'] = true;
$wgGroupPermissions['confirm']['forcepreviewexempt'] = true;
$wgGroupPermissions['confirm']['mwoauthproposeconsumer'] = true;

## 词条管理（赋予部分词条管理权限）
$wgGroupPermissions['textop'] = $wgGroupPermissions['confirm'];
$wgGroupPermissions['textop']['suppressredirect'] = true; //移动页面时不在源页面创建重定向
$wgGroupPermissions['textop']['autoconfirmed'] = true; //不受基于IP的速率限制
$wgGroupPermissions['textop']['autopatrol'] = true; //自动标示为已巡查
$wgGroupPermissions['textop']['patrol'] = true;
$wgGroupPermissions['textop']['delete'] = true;
$wgGroupPermissions['textop']['undelete'] = true;
$wgGroupPermissions['textop']['deletedhistory'] = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['textop']['deletedtext'] = true; // can view deleted revision text
$wgGroupPermissions['textop']['ipblock-exempt'] = true;
$wgGroupPermissions['textop']['skipcaptcha'] = true;
$wgGroupPermissions['textop']['protect'] = true;
$wgGroupPermissions['textop']['proxyunbannable'] = true;
$wgGroupPermissions['textop']['unwatchedpages'] = true;
$wgGroupPermissions['textop']['freepurge'] = true;
$wgGroupPermissions['textop']['commentadmin-restricted'] = true;
$wgGroupPermissions['textop']['editinterface'] = true;
$wgGroupPermissions['textop']['textop'] = true;
$wgGroupPermissions['textop']['titleblacklistlog'] = true;
$wgGroupPermissions['textop']['mwoauthupdateownconsumer'] = true;
$wgAddGroups['sysop'][] = 'preconfirm';
$wgRemoveGroups['sysop'][] = 'preconfirm';

## DOWN站管理员
$wgGroupPermissions['downop']['freepurge'] = true;

## TohoMoe用户
$wgGroupPermissions['tohomoeuser']['freepurge'] = true;

## TohoMoe管理员
$wgGroupPermissions['tohomoeop']['freepurge'] = true;
$wgAddGroups['tohomoeop'][] = 'tohomoeuser';
$wgRemoveGroups['tohomoeop'][] = 'tohomoeuser';

## test用户
$wgGroupPermissions['testuser']['freepurge'] = true;

## test管理员
$wgGroupPermissions['testop']['freepurge'] = true;
$wgAddGroups['testop'][] = 'testuser';
$wgRemoveGroups['testop'][] = 'testuser';

##
$wgGroupPermissions['interface-admin']['edit-mainpage'] = true;

## 系统管理员
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgGroupPermissions['sysop']['editusercss'] = true;
$wgGroupPermissions['sysop']['edituserjs'] = true;
$wgGroupPermissions['sysop']['editothersprofiles'] = true;
$wgGroupPermissions['sysop']['generatetopusersreport'] = true;
$wgGroupPermissions['sysop']['updatepoints'] = true;
$wgGroupPermissions['sysop']['userboard-delete'] = true;
$wgGroupPermissions['sysop']['deletebatch'] = true;
$wgGroupPermissions['sysop']['skipcaptcha'] = true;
$wgGroupPermissions['sysop']['replacetext'] = true;
$wgGroupPermissions['sysop']['php_editor'] = true;
$wgGroupPermissions['sysop']['lqt-admin'] = true;
$wgGroupPermissions['sysop']['suppressredirect'] = true;
$wgGroupPermissions['sysop']['maintenance'] = true;
$wgGroupPermissions['sysop']['avataradmin'] = true;
$wgGroupPermissions['sysop']['commentadmin'] = true;
$wgGroupPermissions['sysop']['freepurge'] = true;
$wgGroupPermissions['sysop']['userrights'] = false;
$wgGroupPermissions['sysop']['editwidgets'] = false;
$wgGroupPermissions['sysop']['tboverride'] = false;
$wgGroupPermissions['sysop']['titleblacklistlog'] = true;
$wgGroupPermissions['sysop']['textop'] = true;
$wgGroupPermissions['sysop']['mwoauthproposeconsumer'] = true;
$wgGroupPermissions['sysop']['mwoauthupdateownconsumer'] = true;
$wgGroupPermissions['sysop']['mwoauthmanageconsumer'] = true;
$wgGroupPermissions['sysop']['mwoauthsuppress'] = true;
$wgGroupPermissions['sysop']['mwoauthviewsuppressed'] = true;
$wgGroupPermissions['sysop']['mwoauthviewprivate'] = true;
$wgGroupPermissions['sysop']['mwoauthmanagemygrants'] = true;
$wgGroupPermissions['sysop']['editsitecss'] = true;
$wgGroupPermissions['sysop']['editsitejs'] = true;
$wgGroupPermissions['sysop']['editsitejson'] = true;
$wgGroupPermissions['sysop']['forcepreviewexempt'] = true;
$wgGroupPermissions['sysop']['edit-mainpage'] = true;
$wgAddGroups['sysop'][] = 'preconfirm';
$wgAddGroups['sysop'][] = 'confirm';
$wgAddGroups['sysop'][] = 'textop';
$wgRemoveGroups['sysop'][] = 'preconfirm';
$wgRemoveGroups['sysop'][] = 'confirm';
$wgRemoveGroups['sysop'][] = 'textop';

## 账户核查
$wgGroupPermissions['checkuser']['unblockself'] = true;
$wgGroupPermissions['checkuser']['block'] = true;
$wgGroupPermissions['checkuser']['createaccount'] = true;
$wgGroupPermissions['checkuser']['ipblock-exempt'] = true;
$wgGroupPermissions['checkuser']['blockemail'] = true;
$wgGroupPermissions['checkuser']['proxyunbannable'] = true;
$wgGroupPermissions['checkuser']['avataradmin'] = true;
$wgGroupPermissions['checkuser']['commentadmin'] = true;
$wgGroupPermissions['checkuser']['userrights'] = true;
$wgGroupPermissions['checkuser']['manageachievements'] = true;
$wgGroupPermissions['checkuser']['bot-only'] = true;
$wgAddGroups['checkuser'][] = 'tohomoeop';
$wgRemoveGroups['checkuser'][] = 'tohomoeop';

## 权限姬
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
$wgGroupPermissions['bureaucrat']['deletebatch'] = false;
$wgGroupPermissions['bureaucrat']['commentadmin'] = true;
$wgGroupPermissions['bureaucrat']['freepurge'] = true;
$wgGroupPermissions['bureaucrat']['giftadmin'] = true;
$wgGroupPermissions['bureaucrat']['generatetopusersreport'] = true;
$wgGroupPermissions['bureaucrat']['updatepoints'] = true;
$wgGroupPermissions['bureaucrat']['userboard-delete'] = true;
$wgGroupPermissions['bureaucrat']['manageachievements'] = true;
$wgGroupPermissions['bureaucrat']['userrights'] = true;

## 命名空间权限
$wgGroupPermissions['*']['editOmake'] = false;
$wgGroupPermissions['user']['editOmake'] = true;
$wgGroupPermissions['confirm']['editOmake'] = true;
$wgGroupPermissions['sysop']['editOmake'] = true;
$wgGroupPermissions['bot']['editOmake'] = true;

$wgGroupPermissions['*']['editGDialogue'] = false;
$wgGroupPermissions['user']['editGDialogue'] = true;
$wgGroupPermissions['confirm']['editGDialogue'] = true;
$wgGroupPermissions['sysop']['editGDialogue'] = true;
$wgGroupPermissions['bot']['editGDialogue'] = true;

$wgGroupPermissions['*']['editLyrics'] = false;
$wgGroupPermissions['user']['editLyrics'] = true;
$wgGroupPermissions['confirm']['editLyrics'] = true;
$wgGroupPermissions['sysop']['editLyrics'] = true;
$wgGroupPermissions['bot']['editLyrics'] = true;

$wgGroupPermissions['*']['editPROJECT'] = false;
$wgGroupPermissions['user']['editPROJECT'] = false;
$wgGroupPermissions['confirm']['editPROJECT'] = false;
$wgGroupPermissions['sysop']['editPROJECT'] = true;
$wgGroupPermissions['bot']['editPROJECT'] = true;

$wgGroupPermissions['*']['editHELP'] = false;
$wgGroupPermissions['user']['editHELP'] = false;
$wgGroupPermissions['confirm']['editHELP'] = true;
$wgGroupPermissions['sysop']['editHELP'] = true;
$wgGroupPermissions['bot']['editHELP'] = true;

$wgGroupPermissions['*']['editTEMPLATE'] = false;
$wgGroupPermissions['user']['editTEMPLATE'] = false;
$wgGroupPermissions['confirm']['editTEMPLATE'] = true;
$wgGroupPermissions['sysop']['editTEMPLATE'] = true;
$wgGroupPermissions['bot']['editTEMPLATE'] = true;

$wgGroupPermissions['*']['editPROPERTY'] = false;
$wgGroupPermissions['user']['editPROPERTY'] = false;
$wgGroupPermissions['confirm']['editPROPERTY'] = false;
$wgGroupPermissions['sysop']['editPROPERTY'] = true;
$wgGroupPermissions['bot']['editPROPERTY'] = true;
$wgGroupPermissions['smwadministrator']['editPROPERTY'] = true;

$wgGrantPermissions['editprotected']['editOmake'] = true;
$wgGrantPermissions['editprotected']['editGDialogue'] = true;
$wgGrantPermissions['editprotected']['editLyrics'] = true;
$wgGrantPermissions['editprotected']['editPROJECT'] = true;
$wgGrantPermissions['editprotected']['editHELP'] = true;
$wgGrantPermissions['editprotected']['editTEMPLATE'] = true;
$wgGrantPermissions['editprotected']['editPROPERTY'] = true;
$wgGrantPermissions['editprotected']['maintenance-api'] = true;
