<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getTasks($page, $sort = false) {
		$sort = $sort ? $sort : 'id';
        $limit = 3;
		$offset = (empty($page) || $page == 1 ? 0 : $page * $limit);
		//
		$tasks = $this->db->row("SELECT * FROM tasks ORDER BY {$sort} DESC LIMIT {$limit} OFFSET {$offset}");
		$rows = $this->db->row("SELECT * FROM tasks");
		$result = ['tasks' => $tasks, 'nav' => ['rows' => count($rows), 'limit'=>$limit, 'page' => $page]];
		return $result;
	}

}