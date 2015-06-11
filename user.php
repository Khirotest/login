<?php

class Controller_User extends Controller {
	public function action_add_user() {
		//viewをセット
		$view = View::forge('user/add_user');

		if($_POST) {
			//POSTデータのセット
			$username = Input::post('username');
			$password = Input::post('password');
			$email = Input::post('email');

			//Authのインスタンスを生成
			$auth = Auth::instance();

			//ユーザー登録
			$auth->create_user($username, $password, $email);
		}
		//登録用フォームの表示
		return $view;
	}
	public function action_login() {
		//viewをセット
		$view = View::forge('user/login');

		$data = array();

		if($_POST) {
			//Authのインスタンスを生成
			$auth = Auth::instance();

			//登録情報の確認
			if($auth->login($_POST['username'],$_POST['password'],)) {
				//認証出来た場合トップページへリダイレクト
				Response::redirect('index');
			}else {
				//認証エラーの場合は、エラーメッセージを表示
				$view->set("username", $_POST['username']);
				$view->set("login_error",'ユーザー名かパスワードが間違っています。')
			}
		}

		//登録用フォームの表示
		return $view;
	}
}