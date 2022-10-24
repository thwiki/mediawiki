<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

// set to 0 to stop jobs running
$wgJobRunRate = 1;
$wgRunJobsAsync = true;

$wgJobTypeConf = [
	'default' => ['class' => 'JobQueueDB', 'order' => 'random', 'claimTTL' => 600, 'maxTries' => 10],
];

$wgJobTypesExcludedFromDefaultQueue = [
	//'SMW\RefreshJob', 'cirrusSearchMassIndex', //'cirrusSearchElasticaWrite',
];
