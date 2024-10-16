<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

## 允许系统发送邮件
$wgEnableEmail = true;

## 允许用户之间通过系统发送邮件
$wgEnableUserEmail = true;

## 紧急联络邮箱
$wgEmergencyContact = "tech@thwiki.cc";

## 找回密码发送邮箱
$wgPasswordSender = "admin@mail.thwiki.cc";

## 创建用户讨论时通知用户
$wgEnotifUserTalk = false; # 用户自行设定

## 监视页面更改时通知用户
$wgEnotifWatchlist = false; # 用户自行设定

## 验证用户邮箱
$wgEmailAuthentication = true;

## 编辑页面需要验证邮箱
$wgEmailConfirmToEdit = true;
