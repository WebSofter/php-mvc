<?php

namespace application\models;

use application\core\Model;
use application\core\Security;

class Account extends Model {
	
	public function addAccount($login, $name, $password) {
		$password = $this->encrypt($password);
		$result = $this->db->row("INSERT INTO users (login, name, password) VALUES('{$login}', '{$name}', '{$password}')");
		return $result;
	}
	public function getAccount($login, $password) {
		$password = $this->encrypt($password);
		$result = $this->db->row("SELECT * FROM users WHERE login LIKE '{$login}' AND password LIKE '{$password}'");
		return $result;
	}
	private function encrypt($password){
		$secure = require 'application/config/settings.php';
		$secure = $secure['encrypt'];
		return Security::encrypt($password, $secure['key'], $secure['iv']);
	}
}