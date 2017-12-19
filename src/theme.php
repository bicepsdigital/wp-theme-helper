<?php

class WP_Theme_Helper {

	protected static $body_classes = array();
	protected static $background = null;

	public static function add_body_class( $class ) {
		self::$body_classes[ $class ] = $class;
	}

	public static function get_body_classes() {
		return implode( ' ', self::$body_classes );
	}

	public static function reset_body_classes() {
		self::$body_classes = array();
	}

	public static function reset_background() {
		self::$background = null;
	}

	public static function set_background( $background ) {
		self::$background = $background;
	}

	public static function get_background() {
		return self::$background;
	}

	public static function get_block_modifier_by_body_background( $block ) {
		if ( ! self::$background ) {
			return '';
		}

		return $block . '--' . self::$background;
	}

}
