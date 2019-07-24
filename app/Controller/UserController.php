<?php
class UserController extends AppController {
	public $uses = array("tUser");
	var $helpers = array("Html");
	var $component = array("Session");

	function regist() {
		if ($this->request->is('post')) {
			$this->tUser->create();
			if ($this->tUser->save($this->request->data)) {
				$this->Session->setFlash(__('Regist complete'));
				$this->redirect("/User/login");
			} else {
				$this->Session->setFlash(__('Regist fail'));
			}
		}
	}

	function login() { 
		if ($this->request->is('post')) { 
			$Email = $this->request->data('email');
			$Password = $this->request->data('password');

			if ($this->checkLogin($Email, $Password)) {
				$user = $this->tUser->find("first",array(
					'conditions'=>array('tUser.email'=> $Email)
				));

				$name = $user['tUser']['name'];
				$this->Session->write("e-mail", $Email);
				$this->Session->write("name", $name);
				$this->redirect("/Chat/feed");//đăng nhập thành công chuyển sang chat
			} else {        
				$this->redirect("/User/login");
			}
		}
	}

	function checkLogin($email,$Password) {
		$is_user = $this->tUser->find('first', array(
			'conditions' => array(
				'tUser.email' => $email, 
				'tUser.password' => $Password
			)
		));

		if ($is_user == null) {
			return false;
		} else {
			return true;
		}
	}

	function logout() {
		$this->Session->destroy("name");
		$this->Session->destroy("e-mail");
		$this->redirect("/User/login"); //chuyển trang login
	}
}
