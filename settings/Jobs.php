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
	//'refreshLinks',
	//'cirrusSearchLinksUpdatePrioritized',
	//'htmlCacheUpdate',
	//'recentChangesUpdate',
	//'smw.changePropagationClassUpdate',
	//'SMW\RefreshJob',
	//'cirrusSearchLinksUpdate',
	//'cirrusSearchMassIndex',
	//'cirrusSearchElasticaWrite',
	//'cirrusSearchIncomingLinkCount',
];
