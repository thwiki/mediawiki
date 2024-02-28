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

/**
 * Chinese converter routine.
 *
 * @ingroup Languages
 */
class ZhConverter extends LanguageConverter {

	/**
	 * Get Main language code.
	 * @since 1.36
	 *
	 * @return string
	 */
	public function getMainCode(): string {
		return 'zh';
	}

	/**
	 * Get supported variants of the language.
	 * @since 1.36
	 *
	 * @return array
	 */
	public function getLanguageVariants(): array {
		return [
			'zh'
		];
	}

	/**
	 * Get language variants fallbacks.
	 * @since 1.36
	 *
	 * @return array
	 */
	public function getVariantsFallbacks(): array {
		return [
			'zh' => [
				'zh-hans',
				'zh-hant'
			]
		];
	}

	/**
	 * Get manual level limits for variants supported by converter.
	 * @since 1.36
	 *
	 * @return array
	 */
	public function getAdditionalManualLevel(): array {
		return [
			'zh' => 'disable'
		];
	}

	/**
	 * Get desc. code separator.
	 * @since 1.36
	 *
	 * @return string
	 */
	public function getDescCodeSeparator(): string {
		return '：';
	}

	/**
	 * Get desc. var separator.
	 * @since 1.36
	 *
	 * @return string
	 */
	public function getDescVarSeparator(): string {
		return '；';
	}

	/**
	 * Get variant names.
	 * @since 1.36
	 *
	 * @return array
	 */
	public function getVariantNames(): array {
		$names = [
			'zh' => '原文'
		];
		return array_merge( parent::getVariantNames(), $names );
	}

	protected function loadDefaultTables() {
		$this->mTables = [
			'zh' => new ReplacementArray,
			'zh-hans' => new ReplacementArray( MediaWiki\Languages\Data\ZhConversion::$zh2Hans ),
			'zh-hant' => new ReplacementArray( MediaWiki\Languages\Data\ZhConversion::$zh2Hant )
		];
	}
}
