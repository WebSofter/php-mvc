<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getTasks($page) {
        $limit = 5;
		$offset = (empty($page) || $page == 1 ? 0 : $page * $limit);
		//
		$tasks = $this->db->row("SELECT id, title, description, time, status FROM tasks ORDER BY id DESC LIMIT {$limit} OFFSET {$offset}");
		$rows = $this->db->row("SELECT * FROM tasks");
		$result = ['tasks' => $tasks, 'nav' => ['rows' => count($rows), 'limit'=>$limit, 'page' => $page]];
		return $result;
	}

}