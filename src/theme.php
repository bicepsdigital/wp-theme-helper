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

	public static function set_background( $background ) {
		self::$background = $background;
	}

	public static function get_background() {
		return self::$background;
	}

	public static function get_body_background_modifier( $block ) {
		if ( ! self::$background ) {
			return '';
		}

		return $block . '--' . self::$background;
	}

}
