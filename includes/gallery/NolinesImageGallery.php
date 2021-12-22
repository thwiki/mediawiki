<?php
/**
 * Nolines image gallery. Like "traditional" but without borders and
 * less padding.
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
 */

class NolinesImageGallery extends TraditionalImageGallery {
	protected function getThumbPadding() {
		return 0;
	}

	protected function getGBBorders() {
		// This accounts for extra space between <li> elements.
		return 0;
	}

	protected function getVPad( $boxHeight, $thumbHeight ) {
		return 0;
	}

	protected function getGBPadding() {
		return 2;
	}
}
