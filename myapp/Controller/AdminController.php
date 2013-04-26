<?php
	class AdminController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index(){

	}
	
	public function employees() {

	}
	
	public function checkins() {

	}

	public function distributors() {

	}
	
	public function addEmployee(){
		$this->loadModel('User');
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
	}


}

