<?php
/**
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
 */

namespace MediaWiki\Languages\Data;

/**
 * Language names in their own languages (known as "language autonyms").
 *
 * These determine things like interwikis, language selectors, and so on.
 * Safe to change without running scripts on the respective sites.
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
	/** @phpcs-require-sorted-array */
	public static $names = [
		'en' => 'English', # English
		'it' => 'italiano', # Italian
		'ja' => '日本語', # Japanese
		// 'ko' => '한국어', # Korean
		// 'pt' => 'português', # Portuguese
		// 'ru' => 'русский', # Russian
		'zh' => '中文', # (Zhōng Wén) - Chinese
	];
}
