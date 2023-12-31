<?php

/**
 * @deprecated This file should be removed in WPML 3.8.0: it has been kept to allow error-less updates from pre 3.6.2.
 * @since 3.6.2
 * @author OnTheGo Systems
 */
class WPML_Notice_Action {
	private $dismiss;
	private $display_as_button;
	private $hide;
	private $text;
	private $url;
	private $group_to_dismiss;
	private $js_callback;

	/**
	 * WPML_Admin_Notice_Action constructor.
	 *
	 * @param string      $text
	 * @param string      $url
	 * @param bool        $dismiss
	 * @param bool        $hide
	 * @param bool|string $display_as_button
	 */
	public function __construct( $text, $url = '#', $dismiss = false, $hide = false, $display_as_button = false ) {
		$this->text              = $text;
		$this->url               = $url;
		$this->dismiss           = $dismiss;
		$this->hide              = $hide;
		$this->display_as_button = $display_as_button;
	}

	public function get_text() {
		return $this->text;
	}

	public function get_url() {
		return $this->url;
	}

	public function can_dismiss() {
		return $this->dismiss;
	}

	public function can_hide() {
		return $this->hide;
	}

	public function must_display_as_button() {
		return $this->display_as_button;
	}

	public function set_group_to_dismiss( $group_name ) {
		$this->group_to_dismiss = $group_name;
	}

	public function get_group_to_dismiss() {
		return $this->group_to_dismiss;
	}

	public function set_js_callback( $js_callback ) {
		$this->js_callback = $js_callback;
	}

	public function get_js_callback() {
		return $this->js_callback;
	}
}
