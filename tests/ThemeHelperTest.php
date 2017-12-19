<?php

use PHPUnit\Framework\TestCase;

class ThemeHelperTest extends TestCase {

	protected function setUp() {
		parent::setUp();
		WP_Theme_Helper::reset_body_classes();
		WP_Theme_Helper::reset_background();
	}

	public function testGetBodyClassesEmpty() {
		self::assertEquals( '', WP_Theme_Helper::get_body_classes() );
	}

	public function testGetBodyClassesWithOneClass() {
		WP_Theme_Helper::add_body_class( 'first_class' );
		self::assertEquals( 'first_class', WP_Theme_Helper::get_body_classes() );
	}

	public function testGetBodyClassesWithMoreClasses() {
		WP_Theme_Helper::add_body_class( 'first_class' );
		WP_Theme_Helper::add_body_class( 'second_class' );
		WP_Theme_Helper::add_body_class( 'third_class' );
		self::assertEquals( 'first_class second_class third_class', WP_Theme_Helper::get_body_classes() );
	}

	public function testGetBackground() {
		self::assertEquals( null, WP_Theme_Helper::get_background() );
	}

	public function testSetBackground() {
		WP_Theme_Helper::set_background( 'blue' );
		self::assertEquals( 'blue', WP_Theme_Helper::get_background() );
	}

	public function testGetBodyBackgroundModifier() {
		self::assertEquals( '', WP_Theme_Helper::get_block_modifier_by_body_background( 'block' ) );
	}

	public function testGetBodyBackgroundModifierSetted() {
		WP_Theme_Helper::set_background( 'blue' );
		self::assertEquals( 'block--blue', WP_Theme_Helper::get_block_modifier_by_body_background( 'block' ) );
	}

}