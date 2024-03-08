<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.

wfLoadExtension('Cite');

wfLoadExtension('CiteThisPage');

wfLoadExtensions(['ConfirmEdit', 'ConfirmEdit/QuestyCaptcha']);
$wgCaptchaClass = 'QuestyCaptcha';
require_once "$IP/settings/secrets/QuestyCaptcha.php";
$wgCaptchaTriggers['edit'] = false;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension('Gadgets');
wfLoadExtension('ImageMap');
wfLoadExtension('InputBox');

wfLoadExtension('Interwiki');
$wgEnableInterwikiTranscluding = true;
$wgEnableInterwikiTemplatesTracking = true;
$wgInterwikiViewOnly = false;

wfLoadExtension('Nuke');

wfLoadExtension('ParserFunctions');
$wgPFEnableStringFunctions = true; // 字符串函数

wfLoadExtension('PdfHandler');
$wgPdfProcessor = 'gs';
$wgPdfPostProcessor = $wgImageMagickConvertCommand;
$wgPdfInfo = 'pdfinfo';

wfLoadExtension('Poem');

//wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension('SyntaxHighlight_GeSHi');

wfLoadExtension('TitleBlacklist');
$wgTitleBlacklistSources = [
	[
		'type' => 'localpage',
		'src' => 'MediaWiki:Titleblacklist',
	],
];

wfLoadExtension('WikiEditor');
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

wfLoadExtension('VipsScaler');
$wgVipsOptions = [
	// Sharpen jpeg files which are shrunk more than 1.2
	[
		'conditions' => [
			'mimeType' => 'image/jpeg',
			'minShrinkFactor' => 1.5,
		],
		'sharpen' => ['radius' => 0, 'sigma' => 0.4],
		'bilinear' => false,
	],
	// Other jpeg files
	[
		'conditions' => [
			'mimeType' => 'image/jpeg',
		],
		'sharpen' => false,
		'bilinear' => false,
	],
	// Do a simple shrink for PNGs
	[
		'conditions' => [
			'mimeType' => 'image/png',
		],
		'sharpen' => false,
		'bilinear' => false,
	],
	[
		'conditions' => [
			'mimeType' => 'image/webp',
		],
		'sharpen' => false,
		'bilinear' => false,
	],
];

require_once "$IP/extensions/Achievements/Achievements.php";

wfLoadExtension('AnalyzePage');
$wgCustomRedirectNamespaces = [0, 4, 6, 8, 10, 12, 506, 508, 512];
$wgRegexRedirectNamespaces = [0];

wfLoadExtension('Arrays');
$egArraysCompatibilityMode = true;

wfLoadExtension('AskTrack');

wfLoadExtension('CategorySortHeaders');

wfLoadExtension('CategoryTree');
$wgUseAjax = true;
$wgEnableMWSuggest = true;
$wgCategoryTreeCategoryPageOptions['mode'] = 'all';
$wgCategoryTreeDefaultOptions['namespaces'] = false;

wfLoadExtension('CharInsert');

wfLoadExtension('CheckUser');

wfLoadExtension('ChineseNumerals');

wfLoadExtension('CollisionManager');
$wgCollisionRank = [
	'官方游戏' => 1,
	'官方书籍' => 2,
	'官方专辑' => 3,
	'旧作游戏' => 4,
	'官方角色' => 5,
	'旧作角色' => 6,
	'西方' => 7,
	'曲目' => 7,
	'符卡' => 8,
	'场景' => 9,
	'物品' => 9,
	'相关作品' => 10,
	'商业游戏' => 10,
	'活动' => 10,
	'同人角色' => 11,
	'公司会社' => 12,
	'同人社团' => 12,
	'人物' => 13,
	'同人软件' => 14,
	'同人游戏' => 14,
	'同人专辑' => 15,
	'同人志' => 15,
	'同人视频' => 15,
	'模型周边' => 15,
	'周边' => 16,
	'其他同人作品' => 17,
	'列表外词条' => 18,
];

wfLoadExtension('ContributionScores');
$wgContribScoreIgnoreBots = false; // Exclude Bots from the reporting - Can be omitted.
$wgContribScoreIgnoreBlockedUsers = true; // Exclude Blocked Users from the reporting - Can be omitted.
$wgContribScoresUseRealName = true; // Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later.
$wgContribScoreDisableCache = false; // Set to true to disable cache for parser function and inclusion of table.
// Each array defines a report - 7,50 is "past 7 days" and "LIMIT 50" - Can be omitted.
$wgContribScoreReports = [[7, 15], [30, 25], [0, 50]];

wfLoadExtension('Disambiguator');

wfLoadExtension('DurationExtension');

wfLoadExtension('Echo');
$wgEchoShowFullNotificationsLink = true;
$wgEchoUseJobQueue = true;
$wgEchoEmailFooterAddress = 'TBSGroup';

wfLoadExtension('Editcount');

wfLoadExtension('Elastica');
wfLoadExtension('CirrusSearch');
$wgCirrusSearchClusters = [
	'default' => ['localhost'],
];
#$wgCirrusSearchIndexBaseName = 'thwikicc_wiki';
$wgDisableSearchUpdate = false;
/*$wgDebugLogGroups['CirrusSearch'] = [
'destination' => "$IP/error_log",
'level' => 'warning',
];*/
$wgSearchType = 'CirrusSearch';
$wgCirrusSearchServers = [
	[
		'transport' => [
			"type" => \CirrusSearch\Elastica\ES6CompatTransportWrapper::class,
			'wrapped_transport' => 'Http'
		],
		"port" => 9200,
		"host" => "localhost"
	]
];
$wgSearchTypeAlternatives = [SearchMySQL::class];
$wgCirrusSearchClientSideUpdateTimeout = 60;
$wgCirrusSearchMoreLikeThisTTL = 86400 * 7; // Cache more like results for 7 days

wfLoadExtension('ExtraMagicWords');

require_once "$IP/extensions/FixedHeader/FixedHeader.php";

wfLoadExtension('Flow');
$wgFlowContentFormat = 'html';

wfLoadExtension('FlowThread');
$wgFlowThreadConfig['AnonymousAvatar'] = 'https://avatar.thwiki.cc/default_ml.jpg';
$wgFlowThreadConfig['Avatar'] = 'https://avatar.thwiki.cc/thwikicc_wiki_${userid}_ml.jpg';
$wgFlowThreadConfig['MaxNestLevel'] = 3;
$wgFlowThreadConfig['PopularPostCount'] = 3;
$wgFlowThreadConfig['PopularPostThreshold'] = 3;

wfLoadExtension('ForcePreview');

require_once "$IP/extensions/FormEdit/FormEdit.php";

require_once "$IP/extensions/HtmlMedia/HtmlMedia.php";

wfLoadExtension('LabeledSectionTransclusion');

wfLoadExtension('LanguageSelector');
$wgLanguageSelectorShowAll = false;
$wgLanguageSelectorDetectLanguage = 0; // LANGUAGE_SELECTOR_USE_CONTENT_LANG;
$wgLanguageSelectorLocation = 3; // LANGUAGE_SELECTOR_AS_PORTLET;

wfLoadExtension('SimpleMathJax');

wfLoadExtension('MaintenanceApi');

wfLoadExtension('MediaContentRating');
$wgMediaContentRatingWarningImage = '限制图片.jpg';

wfLoadExtension('MenuSidebar');

require_once "$IP/extensions/MultiArrayMap/MultiArrayMap.php";

wfLoadExtension('MultiBoilerplate');
$wgMultiBoilerplateOverwrite = false;
$wgMultiBoilerplateDiplaySpecialPage = true;
$wgMultiBoilerplateOptions["同人社团"] = "模板:页面模板/同人社团";
$wgMultiBoilerplateOptions["现实人物"] = "模板:页面模板/现实人物";
$wgMultiBoilerplateOptions["同人专辑"] = "模板:页面模板/同人专辑";
$wgMultiBoilerplateOptions["同人游戏/软件"] = "模板:页面模板/同人游戏";
$wgMultiBoilerplateOptions["同人志"] = "模板:页面模板/同人志";
$wgMultiBoilerplateOptions["同人视频"] = "模板:页面模板/同人视频";
$wgMultiBoilerplateOptions["曲目歌词"] = "模板:页面模板/曲目歌词";
$wgMultiBoilerplateOptions["周边"] = "模板:页面模板/周边";
$wgMultiBoilerplateOptions["模型周边"] = "模板:页面模板/模型周边";
$wgMultiBoilerplateOptions["同人展会"] = "模板:页面模板/同人展会";
$wgMultiBoilerplateOptions["同人活动"] = "模板:页面模板/同人活动";
$wgMultiBoilerplateOptions["官方原曲"] = "模板:页面模板/原曲页面";
$wgMultiBoilerplateOptions["官方场景"] = "模板:页面模板/官方场景";
$wgMultiBoilerplateOptions["符卡页面"] = "模板:页面模板/符卡页面";
$wgMultiBoilerplateOptions["东方关联人物"] = "模板:页面模板/东方关联人物";
//$wgMultiBoilerplateOptions["同人曲目评分"] = "模板:页面模板/同人曲目评分";
$wgMultiBoilerplateOptions["游戏对话"] = "模板:页面模板/游戏对话";
$wgMultiBoilerplateOptions["活动摊位列表"] = "模板:页面模板/活动摊位列表";

wfLoadExtension('MultimediaViewer');
$wgMediaViewerEnableByDefault = true;
$wgMediaViewerEnableByDefaultForAnonymous = true;
//$wgMediaViewerUseThumbnailGuessing = true;

wfLoadExtension('OAuth');
require_once "$IP/settings/secrets/OAuth.php";
$wgMWOAuthCentralWiki = false;
$wgMWOAuthSharedUserIDs = false;
$wgMWOAuthSharedUserSource = false;
$wgMWOAuthRequestExpirationAge = 30 * 86400;
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuthGroupsToNotify = ['user'];

wfLoadExtension('PageImages');
$wgPageImagesOpenGraph = false;
$wgPageImagesLeadSectionOnly = false;
$wgPageImagesAPIDefaultLicense = 'any';
$wgPageImagesNamespaces = $wgContentNamespaces;
$wgPageImagesScores['ratio'] = [
	"3" => -100,
	"4" => 0,
	"20" => 5,
	"30" => 0,
	"31" => -100,
];

wfLoadExtension('PageNotice');

wfLoadExtension('QRLite');

//wfLoadExtension( 'RegexFun' );
require_once "$IP/extensions/RegexFun/RegexFun.php";

wfLoadExtension('RelatedArticles');
$wgRelatedArticlesUseCirrusSearchApiUrl = '/api.php';
$wgRelatedArticlesShowInSidebar = false;
$wgRelatedArticlesShowInFooter = true;
$wgRelatedArticlesUseCirrusSearch = true;
$wgRelatedArticlesOnlyUseCirrusSearch = false;
$wgRelatedArticlesCardLimit = 6;
$wgRelatedArticlesFooterWhitelistedSkins = ['vector', 'unicorn'];

wfLoadExtension('ReplaceSet');
$egReplaceSetCallLimit = 200;
$egReplaceSetPregLimit = 200;

wfLoadExtension('ReplaceText');
//$wgReplaceTextUser = '替换文字';

// Disable Score for security reasons https://www.mediawiki.org/wiki/Extension:Score/2021_security_advisory
//wfLoadExtension( 'Score' );
//$wgScoreLilyPond = '/usr/local/bin/lilypond'; // required
//$wgScoreAbc2Ly = '/usr/local/bin/abc2ly'; // if you want ABC to LilyPond conversion
//$wgScoreTimidity = '/usr/local/bin/timidity'; // if you want MIDI to Vorbis conversion
//$wgScoreLame = '/usr/local/bin/lame'; // if you want MIDI to mp3 conversion
//$wgScoreTrim = false; //true Set to false if you don't want score trimming

require_once "$IP/extensions/SocialProfile/SocialProfile.php";
//Avatar
$wgAvatarPath = 'https://avatar.thwiki.cc/';
//Friends/Foes
$wgUserProfileDisplay['friends'] = true;
$wgUserProfileDisplay['foes'] = true;
$wgUserProfileDisplay['activity'] = true;
$wgUserProfileDisplay['achiev'] = true;
//$wgFriendingEnabled = false;
//Board
$wgUserBoard = false;
$wgUserProfileDisplay['board'] = false;
//User-specific statistics
$wgUserProfileDisplay['stats'] = false;
$wgUserProfileDisplay['gifts'] = false;
$wgUserProfileDisplay['awards'] = false;
$wgUserProfileDisplay['games'] = false;
$wgUserProfileDisplay['gifts'] = false;
//StatsTrackWeekly
$wgUserStatsTrackWeekly = false;
#Logging
$wgUploadAvatarInRecentChanges = true;
$wgUpdateProfileInRecentChanges = true;
//$wgUserProfileThresholds = ['edits' => 2];

$wgAvatarKey = 'thwikicc_wiki';

$wgNamespacesWithSubpages[NS_USER_WIKI] = true;

wfLoadExtension('TabberNeue');

require_once "$IP/extensions/TableMapping/TableMapping.php";

//wfLoadExtension('TailwindCSS');
$wgTailwindCSSStyleBuilderServer = 'localhost:8067';

wfLoadExtension('TemplateData');

wfLoadExtension('TemplateFunctions');

wfLoadExtension('TemplateStyles');

$wgTemplateStylesAllowedUrls = [
	"audio" => [
		"<^https://upload\\.thwiki\\.cc/>"
	],
	"image" => [
		"<^https://upload\\.thwiki\\.cc/>"
	],
	"svg" => [
		"<^https://upload\\.thwiki\\.cc/[^?#]*\\.svg(?:[?#]|$)>"
	],
	"font" => [],
	"namespace" => [
		"<.>"
	],
	"css" => []
];

$wgTemplateStylesNamespaces = [
	NS_TEMPLATE => true
];

wfLoadExtension('TextExtracts');
wfLoadExtension('TitleKey');

wfLoadExtension('UrlGetParameters');

wfLoadExtension('Variables');

wfLoadExtension('Widgets');

wfLoadExtension('YouTube');
