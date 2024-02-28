<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

#时区
$wgLocaltimezone = 'Asia/Shanghai';
putenv("TZ=$wgLocaltimezone");
$wgLocalTZoffset = date("Z") / 60;
$wgDefaultUserOptions['timecorrection'] = "+08:00";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "zh";
