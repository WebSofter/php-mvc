<?php

namespace application\controllers;

use application\core\Controller;

class TaskController extends Controller {

	public function indexAction() {
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$sort = isset($_GET['sort']) ? $_GET['sort'] : false;

		$result = $this->model->getTasks($page, $sort);
		$vars = [
			'tasks' => $result['tasks'],
			'nav' => $result['nav'],
		];
		$this->view->render('Все задачи', $vars);
	}
	public function newAction() {
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $date = isset($_POST['date']) ? $_POST['date'] : null;
        $vars = [
            'title' => $title,
            'email' => $email,
            'description' => $description,
            'date' => $date
        ];
        if($title && $email && $description && $date){
            $this->model->addTask($title, $email, $description, $date);
            $this->view->render('Задача добавлена', $vars);
        }else if($title || $email || $description || $date){
            $this->view->render('Новая задача', $vars);
        }else{
            $this->view->render('Новая задача');
        }
	}
	public function deleteAction() {
        $vars = [];
        if(isset($_GET['id'])){
            $this->model->deleteTask($_GET['id']);
        }
		$this->view->render('Удаление задачи', $vars);
	}
	public function editAction() {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $date = isset($_POST['date']) ? $_POST['date'] : null;
        $status = isset($_POST['status']) ? 1 : 0;
        //debug($_POST);
        //
        if($id && $title && $email && $description && $date){
            //&& isset($_POST['status'])
            $vars = $this->model->updateTask($id, $title, $email, $description, $date, $status);
            $task = $this->model->getTask($id);
            $vars = [
                'title' => $task[0]['title'],
                'email' => $task[0]['email'],
                'description' => $task[0]['description'],
                'date' => $task[0]['time'],
                'status' => $task[0]['status'],
            ];
            $this->view->render('Задача обновлена', $vars);
        }else{
            $task = $this->model->getTask($_GET['id']);
            $vars = [
                'title' => $task[0]['title'],
                'email' => $task[0]['email'],
                'description' => $task[0]['description'],
                'date' => $task[0]['time'],
                'status' => $task[0]['status'],
            ];
            //debug($vars);
            $this->view->render('Обновление задачи', $vars);
        }
	}
}