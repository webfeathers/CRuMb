<?php
	class AdminController extends AppController {
	var $uses = array('User');
	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('add'); // Letting users register themselves
	}
	public $helpers = array('Html', 'Form');

	public function index(){

	}
	
	/* Employee functions */
	public function employees() {
		
		$this->loadModel('User');
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());

	}
	
	public function viewEmployee($id = null) {
		$this->loadModel('User');
		$thisUser = $this->User->find('all', array('conditions' => array('User.id' => $id)));		
		$this->set('user', $thisUser['0']['User']);

	}
	
	public function editEmployee($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array(
					'controller' => '/admin',
					'action' => 'viewEmployee', $id
				));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

	/* END Employee functions */
	
	
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

