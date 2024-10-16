<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgMaxShellMemory = 150 * 1024 * 1024; //为svg生成png增加（150M）
$wgMaxShellFileSize = 120 * 1024 * 1024; //（120M）
$wgMaxArticleSize = 4096;

# 外链加上target="_blank"
//$wgExternalLinkTarget = '_blank';
# 不强制首字母大写
$wgCapitalLinks = false;
# 在所有页面（包括有特殊原因不应启用定义CSS的页面）启用定义CSS/JS
$wgAllowSiteCSSOnRestrictedPages = true;
# 允许用户自定CSS功能（例如链接有无底线，编辑框字体）
$wgAllowUserCssPrefs = true;
# 允许使用{{DISPLAYTITLE:}}
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;
$wgDisableTitleConversion = true;

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = 1024;

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
## 图片上传设定，注意images目录是否可写
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgGenerateThumbnailOnParse = true;
$wgUploadSizeWarning = 20 * 1024 * 1024;
$wgMaxUploadSize = 20 * 1024 * 1024;
$wgMaxImageArea = 6000 * 6000;
$wgMaxAnimatedGifArea = 60 * 1024 * 1024;
$wgImageMagickConvertCommand = "/usr/local/bin/magick";
$wgAllowExternalImages = true;
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;
$wgAllowImageTag = false; //Allow <img> tag to be used in wikitext
$wgFileExtensions = ['png', 'gif', 'jpg', 'jpeg', 'pdf', 'mid', 'midi', 'mp3', 'svg', 'webp', 'apng']; // 'ico'存在跨站攻击风险
$wgAllowTitlesInSVG = false;
#将图片与wiki源程序分开，并使用不同的域名
$wgUploadDirectory = "${IP}_upload"; //图片被上传到的绝对路径
$wgImageMagickTempDir = "${wgUploadDirectory}/imtemp";
$wgUploadPath = "https://upload.thbwiki.cc"; //图片相对URL路径
# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = true;
$wgCommonsMetadataForceRecalculate = true;
$wgNativeImageLazyLoading = true;

$wgSVGConverter = 'vips';
$wgSVGConverters = [
	'vips' => '/usr/bin/vipsthumbnail --size=$widthx$height --output=$output $input',
];

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh";
$wgRightsText = "";
$wgRightsIcon = "https://static.thbwiki.cc/common/CC-BY-NC-SA88x31.png";

#底部图标
$wgFooterIcons['poweredby']['myicon'] = [
	"src" => "https://static.thbwiki.cc/banner/banner_b0.png",
	"srcset" => "https://static.thbwiki.cc/banner/banner_b0@2x.png 2x",
	"url" => "https://thwiki.cc/",
	"alt" => "由TBSGroup建立的专业性东方Project维基百科",
];

$wgShowExceptionDetails = false;
$wgAjaxEditStash = false;
