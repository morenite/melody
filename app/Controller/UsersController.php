<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class UsersController extends AppController{
    
    public $paginate = array(
        'limit' => 10
    );
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
    
    public function dashboard() {
        $this->set('title_for_layout', "Dashboard");
    }
    
	public function index() {
        $this->Paginator->settings = $this->paginate;
        $users = $this->Paginator->paginate('User');
	}

	public function add() {
        if ($this->request->is('post')) {
            $password = $this->request->data['User']['password'];
            $confirmedPassword = $this->request->data['User']['password'];
            
            if (strcmp($password, $confirmedPassword) == 0) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash("", 'flash_success');
                    $this->redirect(array('controller' => 'users', 'action' => 'index'));
                }
                else {
                    $this->Session->setFlash('', '');
                }
            }
            else {
                $this->Session->setFlash("Your confirmed password didn't match!", "flash_danger");
            }
        }
        
        $this->set('title_for_layout', "Add New User");
	}

	public function edit($userId) {
        
	}

	public function delete($userId) {

	}
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
        
        $this->set('title_for_layout', 'Sign In');
    }
    
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}