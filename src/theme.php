<?php

class WP_Theme_Helper {

	protected static $bodyClasses = array();
	protected static $background = null;

	public static function addBodyClass( $class ) {
		self::$bodyClasses[ $class ] = $class;
	}

	public static function getBodyClasses() {
		return implode( ' ', self::$bodyClasses );
	}

	public static function setBackground( $background ) {
		self::$background = $background;
	}

	public static function getBackground() {
		return self::$background;
	}

	public static function getBodyBackgroundModifier( $block ) {
		if ( ! self::$background ) {
			return '';
		}

		return $block . '--' . self::$background;
	}

}
