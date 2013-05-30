<?php
/**
 * Item Class
 *
 * A PHP framework for web content
 *
 * @package		Lister
 * @author		Shanon Scully <shanon@shamooly.com>
 * @since		Version 0.1
 */
class Item {

	var $db;
	var $id;
	var $name;
	var $status;
	var $parent;
	var $type;

	function __construct($id=FALSE) {
		$dsn	  = 'mysql:host=' . Config::read('db.host') .
					 ';dbname='    . Config::read('db.dbname');
		$user     = Config::read('db.user');
		$pass	  = Config::read('db.pass');
		$this->db = new PDO($dsn, $user, $pass);

		$this->set_name('');
		$this->set_status('');
		$this->set_parent('');
		$this->set_type('');

		if ($id) {
			$this->set_id($id);
			$this->load();
		}
	}

	function get_id() {
		return $this->id;
	}

	function get_name() {
		return $this->name;
	}

	function get_status() {
		return $this->status;
	}

	function get_parent() {
		return $this->parent;
	}

	function get_type() {
		return $this->type;
	}

	function set_id($id) {
		$this->id = $id;
	}

	function set_name($name) {
		$this->name = $name;
	}

	function set_status($status) {
		$this->status = $status;
	}

	function set_parent($parent) {
		$this->parent = $parent;
	}

	function set_type($type) {
		$this->type = $type;
	}

	function load() {
		if (isset($this->id)) {
			$db_query = $this->db->query('SELECT * FROM items WHERE ID = ' . $this->id);
			$db_query->setFetchMode(PDO::FETCH_OBJ);
			$item = $db_query->fetch();

			$this->set_name($item->name);
			$this->set_status($item->status);
			$this->set_parent($item->parent);
			$this->set_type($item->type);
		}
	}

	function save() {
		$id     = $this->get_id();
		$name   = $this->get_name();
		$status = $this->get_status();
		$parent = $this->get_parent();
		$type   = $this->get_type();

		$db_update = $this->db->prepare('UPDATE items SET name=?, status=?, parent=?, type=? WHERE id=?');
		$db_update->execute(array($name,$status,$parent,$type,$id));
	}
}