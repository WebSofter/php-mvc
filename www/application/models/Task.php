<?php

namespace application\models;

use application\core\Model;

class Task extends Model {

	public function getTasks($page) {
        $limit = 5;
		$offset = (empty($page) || $page == 1 ? 0 : $page * $limit);
		//
		$tasks = $this->db->row("SELECT id, title, description, time, status FROM tasks LIMIT {$limit} OFFSET {$offset}");
		$rows = $this->db->row("SELECT * FROM tasks");
		$result = ['tasks' => $tasks, 'nav' => ['rows' => count($rows), 'limit'=>$limit, 'page' => $page]];
		return $result;
	}
	public function addTask($title, $description, $date) {
		$result = $this->db->row("INSERT INTO tasks (title, description, time) VALUES('{$title}', '{$description}', '{$date}')");
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
	public function updateTask($id, $title, $description, $date) {
		$result = $this->db->row("UPDATE tasks SET title={$title}, description={$description}, time={$date} WHERE id={$id}");
		return $result;
	}
}