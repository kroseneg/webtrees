<?php namespace Fisharebest\Localization;

/**
 * Class LocaleRuMd
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleRuMd extends LocaleRu {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMd;
	}
}