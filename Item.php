<?php
/**
 * Item Class
 *
 * A PHP framework for web content
 *
 * @package		Lister
 * @author		Shanon Scully
 * @since		Version 0.1
 */
class Item {

	var $id;
	var $name;
	var $type;
	var $meta;
	var $children = array();

	public function __construct($id) {
		$this->id = $id;
	}

	public function get_id() {
		return $this->id;
	}

	public function get_name() {
		$this->name = $name;
		return $this->name;
	}

	public function get_type() {
		$this->type = $type;
		return $this->type;
	}

	public function get_meta($slug) {
		$this->meta = $meta;
		return $this->meta;
	}

	public function get_children() {
		$this->children = $children;
		return $this->children;
	}

	public function set_name($name) {

	}

	public function set_type($type) {

	}

	public function set_meta($meta_type) {

	}

	public function set_parent($parent) {

	}
}