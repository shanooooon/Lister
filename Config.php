<?php
/**
 * Config Class
 *
 * A PHP framework for web content
 *
 * @package		Lister
 * @author		Shanon Scully <shanon@shamooly.com>
 * @since		Version 0.1
 */
class Config {
	static $confArray;

	public static function read($name) {
		return self::$confArray[$name];
	}

	public static function write($name, $value) {
		self::$confArray[$name] = $value;
	}
}

Config::write('db.host', 'localhost');
Config::write('db.dbname', 'shamooly_lister');
Config::write('db.user', 'shamooly_user01');
Config::write('db.pass', 'OQ04e5koo2');