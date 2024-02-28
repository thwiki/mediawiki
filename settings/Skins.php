<?php

# Protect against web entry

if (!defined('MEDIAWIKI')) {
	exit;
}

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "unicorn";
//$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
//wfLoadSkin('Vector');
wfLoadSkin('Unicorn');
wfLoadSkin('Vampire');
//wfLoadSkin('MonoBook');
