<?php
/**
 * Chinese specific code.
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

/**
 * @ingroup Language
 */
class ZhConverter extends LanguageConverter {
	/**
	 * @param Language $langobj
	 */
	public function __construct( $langobj ) {
		$this->mDescCodeSep = '：';
		$this->mDescVarSep = '；';

		$variants = [
			'zh',
		];

		$variantfallbacks = [
			'zh' => [ 'zh-hans', 'zh-hant', 'zh-cn', 'zh-tw', 'zh-hk', 'zh-sg', 'zh-mo', 'zh-my' ],
		];
		$ml = [
			'zh' => 'disable',
		];

		parent::__construct( $langobj, 'zh',
			$variants,
			$variantfallbacks,
			[],
			$ml );
		$names = [
			'zh' => '原文',
		];
		$this->mVariantNames = array_merge( $this->mVariantNames, $names );
	}

	protected function loadDefaultTables() {
		$this->mTables = [
			'zh-hans' => new ReplacementArray( MediaWiki\Languages\Data\ZhConversion::$zh2Hans ),
			'zh-hant' => new ReplacementArray( MediaWiki\Languages\Data\ZhConversion::$zh2Hant ),
			'zh' => new ReplacementArray,
		];
	}
}
