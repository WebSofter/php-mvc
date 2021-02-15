<?php

namespace application\models;

use application\core\Model;

class Task extends Model {

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
	public function addTask($title, $email, $description, $date) {
		$result = $this->db->row("INSERT INTO tasks (title, email, description, time, status) VALUES('{$title}', '{$email}', '{$description}', '{$date}', '')");
		return $result;
	}
	public function deleteTask($id) {
		$result = $this->db->row("DELETE FROM tasks WHERE id={$id}");
		return $result;
	}
	public function getTask($id) {
		$result = $this->db->row("SELECT * FROM tasks WHERE id={$id}");
		return $result;
	}
	public function updateTask($id, $title, $email, $description, $date, $status) {
		$result = $this->db->row("UPDATE tasks SET title='{$title}', email='{$email}', description='{$description}', time='{$date}', status='{$status}' WHERE id={$id}");
		return $result;
	}
}