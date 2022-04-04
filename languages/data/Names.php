<?php
/**
 * Language names.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Language
 */

namespace MediaWiki\Languages\Data;

/**
 * Language names in their own languages (language autonyms).
 *
 * These determine things like interwikis, language selectors, and so on.
 * Safe to change without running scripts on the respective sites.
 *
 * \u{200E} is the left-to-right marker and
 * \u{200F} is the right-to-left marker.
 * They are required for ensuring the correct display of brackets in
 * mixed rtl/ltr environment.
 *
 * Some writing systems require some line-height fixes. This includes
 * most Indic scripts, like Devanagari.
 * If you are adding support for such a language, add it also to
 * the relevant section in shared.css.
 *
 * Do not use this class directly. Use LanguageNameUtils::getLanguageNames(), which
 * includes support for the CLDR extension.
 *
 * @ingroup Language
 */
class Names {
	public static $names = [
		// 'de' => 'Deutsch', # German ("Du")
		'en' => 'English', # English
		// 'es' => 'español', # Spanish
		'it' => 'italiano', # Italian
		'ja' => '日本語', # Japanese
		// 'ko' => '한국어', # Korean
		// 'pt' => 'português', # Portuguese
		// 'ru' => 'русский', # Russian
		'zh' => '中文', # (Zhōng Wén) - Chinese
	];
}
