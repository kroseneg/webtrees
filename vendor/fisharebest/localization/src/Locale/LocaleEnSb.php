<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnSb
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnSb extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySb;
	}
}