<?php
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPAS_CF_Text_Field extends WPAS_Custom_Field {

	/**
	 * Return the field markup for the front-end.
	 *
	 * @return string Field markup
	 */
	public function display() {
		return sprintf( '<label {{label_atts}}>{{label}}</label><input type="text" value="%s" {{atts}}>', $this->get_field_value() );
	}

	/**
	 * Return the field markup for the admin.
	 *
	 * This method is only used if the current user
	 * has the capability to edit the field.
	 */
	public function display_admin() {
		return $this->display();
	}

	/**
	 * Return the field markup for the admin.
	 *
	 * This method is only used if the current user
	 * doesn't have the capability to edit the field.
	 */
	public function display_no_edit() {
		return sprintf( '<p id="%s">%s</p>', $this->get_field_id(), $this->get_field_value() );
	}

}