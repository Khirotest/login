<?php

class Controller_User extends Controller {
	public function action_add_user {
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
}