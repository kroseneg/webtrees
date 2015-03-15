<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnBm
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnBm extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBm;
	}
}