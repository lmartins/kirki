<?php

namespace Kirki\Scripts;

use Kirki\Scripts\Customizer\Dependencies;
use Kirki\Scripts\Customizer\Branding;
use Kirki\Scripts\Customizer\PostMessage;
use Kirki\Scripts\Customizer\Required;
use Kirki\Scripts\Customizer\Tooltips;
use Kirki\Scripts\Frontend\GoogleFonts;

class ScriptRegistry {

	public function __construct() {

		$dependencies = new Dependencies();
		$branding     = new Branding();
		$postmessage  = new PostMessage();
		$required     = new Required();
		$tooltips     = new Tooltips();
		$googlefonts  = new GoogleFonts();

	}

}
