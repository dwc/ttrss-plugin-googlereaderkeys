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
		 $hotkey_overrides = array(
			"j" => "next_article_noscroll",
			"k" => "prev_article_noscroll",
			"n" => "next_article_noexpand",
			"p" => "prev_article_noexpand",
			"N" => "next_feed",
			"P" => "prev_feed",
			"V" => "open_in_new_window",
			"r" => "feed_refresh",
			"M" => "feed_catchup",
			"m" => "toggle_unread",
			"o" => "toggle_expand",
			"(13)|enter" => "toggle_expand",
			"*(191)|?" => "help_dialog",
			"(32)|space" => "article_scroll_down",
			"(38)|up" => "article_scroll_up",
			"(40)|down" => "article_scroll_down",
		);

		$hotkeys = array_merge($hotkeys, $hotkey_overrides);

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
?>
