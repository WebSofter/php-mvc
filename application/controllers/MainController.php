<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$result = $this->model->getTasks($page);
		$vars = [
			'tasks' => $result['tasks'],
			'nav' => $result['nav'],
		];
		$this->view->render('Главная страница', $vars);
	}
}