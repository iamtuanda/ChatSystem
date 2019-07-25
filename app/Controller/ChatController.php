<?php
App::uses('AppController', 'Controller');
class ChatController extends AppController
{
	public $uses = array("tFeed");
	function feed() {
		if ($this->request->is('post')) {
			$image_file_name = '';
			$file = $_FILES['image_file_name'];
			if ($file['tmp_name']) {
				move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/' . $file['name']);
				$image_file_name = $file['name'];
			}

			$this->tFeed->set(array(
				'name' => $this->request->data('name'),
				'message' => $this->request->data('message'),
				'image_file_name' => $image_file_name,
				'create_at' => date('Y-m-d H:i:sa') 
			));

			$this->tFeed->save($this->request->data);
		}

		$feeds = $this->tFeed->find('all');
		$this->set('t_feeds', $feeds);
	}

	function edit($id) {
		if($this->request->is('post')){
			$this->tFeed->read(null, $id);
			$this->tFeed->set(array(
				'name' => $this->request->data('name'),
				'message' => $this->request->data('message'),
				'update_at'=> date('Y-m-d H:i:sa')
			));

			$this->tFeed->save();
			$this->redirect('feed');
		}

		$feeds = $this->tFeed->findById($id);
		$this->set('feeds', $feeds);
	}

	function delete($id) {
		$this->autoRender = false;
		$this->tFeed->delete($id);
		$this->redirect('feed');
	}
}