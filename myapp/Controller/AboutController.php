<?php
	class AboutController extends AppController {
	public $helpers = array('Html');

	public function index(){

	}
	
	public function beforeFilter() {
        $this->Auth->allow('index', 'view');
		$role="";
		if($this->Auth->user('role')=='admin'){
			$role="admin";
		}
		$this->set('role',$role);
    }

}

