<?php

namespace application\controllers;

use application\core\Controller;

class TaskController extends Controller {

	public function indexAction() {
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$result = $this->model->getTasks($page);
		$vars = [
			'tasks' => $result['tasks'],
			'nav' => $result['nav'],
		];
		$this->view->render('Все задачи', $vars);
	}
	public function newAction() {
        $vars = [];
        if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['date'])){
            $this->model->addTask($_POST['title'], $_POST['description'], $_POST['date']);
            unset($_POST['title']);
            unset($_POST['description']);
            unset($_POST['date']);
            $this->view->render('Задача добавлена', $vars);
        }else{
            $this->view->render('Новая задача', $vars);
        }
	}
	public function deleteAction() {
        $vars = [];
        if(isset($_GET['task'])){
            $this->model->deleteTask($_GET['task']);
        }
		$this->view->render('Удаление задачи', $vars);
	}
	public function editAction() {
        if(isset($_POST['task']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['date'])){
            
            unset($_POST['title']);
            unset($_POST['description']);
            unset($_POST['date']);
            $vars = $this->model->updateTask($_POST['task'], $_POST['title'], $_POST['description'], $_POST['date']);
            $task = $this->model->getTask($_POST['task']);
            $vars = [
                'title' => $task[0]['title'],
                'description' => $task[0]['description'],
                'date' => $task[0]['time'],
            ];
            $this->view->render('Задача обновлена', $vars);
        }else{
            $task = $this->model->getTask($_GET['task']);
            $vars = [
                'title' => $task[0]['title'],
                'description' => $task[0]['description'],
                'date' => $task[0]['time'],
            ];
            //debug($vars);
            $this->view->render('Обновление задачи', $vars);
        }
	}
}