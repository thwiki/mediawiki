<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = true;

$wgActorTableSchemaMigrationStage = SCHEMA_COMPAT_WRITE_BOTH | SCHEMA_COMPAT_READ_NEW;
