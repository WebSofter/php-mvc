<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		$login = isset($_POST['login']) ? $_POST['login'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		$vars = [
			'login' => $login,
			'password' => $password,
			'user' => []
		];

		if(!empty($login) && !empty($password)){
			$user = $this->model->getAccount($login, $password);
			if(count($user) > 0){
				$vars['user'] = $user[0];
				$this->view->render('Вы вошли', $vars);
			} else{
				$this->view->render('Неправильный логин или пароль', $vars);
			}
		}else if($login || $password){
			$this->view->render('Не введен логин или пароль', $vars);
		}else{
			$this->view->render('Вход');
		}
		
	}
	public function logoutAction() {
		session_destroy ();
		session_unset ();
		header('Location: /');
	}
	public function registerAction() {
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$login = isset($_POST['login']) ? $_POST['login'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		$passwordRet = isset($_POST['passwordRet']) ? $_POST['passwordRet'] : '';
		//
		$vars = [
			'name' => $name,
			'login' => $login,
			'password' => $password,
			'passwordRet' => $passwordRet,
		];
		//
		if($name && $login && $password && $passwordRet){
			if($password == $passwordRet){
				$this->model->addAccount($login, $name, $password);
				$this->view->render('Регистрация успешна', [
					'name' => '',
					'login' => '',
					'password' => '',
					'passwordRet' => '',
				]);
			}else{
				$this->view->render('Пароли не совпадают', $vars);
			}
		}elseif($name || $login || $password || $passwordRet){
			$this->view->render('Не все поля заполнены', $vars);
		}else{
			$this->view->render('Регистрация', $vars);
		}
		
	}

}