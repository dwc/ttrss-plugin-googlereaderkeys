<?php
class GoogleReaderKeysDWC extends Plugin {
	private $host;

	function about() {
		return array(1.0,
			"Keyboard hotkeys emulate Google Reader",
			"dwc");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	/*
	 * See get_hotkeys_info in include/functions.php
	 */
	function hook_hotkey_map($hotkeys) {

		$hotkeys["j"]		= "next_article_noscroll";
		$hotkeys["k"]		= "prev_article_noscroll";
		$hotkeys["n"]		= "next_article_noexpand";
		$hotkeys["p"]		= "prev_article_noexpand";
		$hotkeys["*n"]		= "next_feed";
		$hotkeys["*p"]		= "prev_feed";
		$hotkeys["*v"]		= "open_in_new_window";
		$hotkeys["r"]		= "feed_refresh";
		$hotkeys["*m"]		= "feed_catchup";
		$hotkeys["m"]		= "toggle_unread";
		$hotkeys["o"]		= "toggle_expand";
		$hotkeys["(13)|enter"]	= "toggle_expand";
		$hotkeys["*(191)|?"]    = "help_dialog";
		$hotkeys["(32)|space"]	= "article_scroll_down";
		$hotkeys["(38)|up"]	= "article_scroll_up";
		$hotkeys["(40)|down"]	= "article_scroll_down";

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
?>
