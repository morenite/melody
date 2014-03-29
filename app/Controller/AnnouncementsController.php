<?php
class AnnouncementsController extends AppController{
    
        public $components = array(
		'Paginator'
	);

	public $paginate = array(
		'limit' => 3
	);
        
	public function index() {
            
        $this->set('title_for_layout', 'Announcement Index');

        $this->Announcement->recursive = 0;
        
		$this->Paginator->settings = $this->paginate;
		$announcements = $this->Paginator->paginate('Announcement');
        $this->set('announcements', $announcements);

	}

	public function add() {
        if ($this->request->is("post")) {
            if($this->Announcement->save($this->request->data)) {
                $this->Session->setFlash("Your new Announcement has been added succesfully.", "flash_success");
                $this->redirect(array("controller" => "announcements", "action" => "index"));
            }
            else {
                $this->Session->setFlash("There is something wrong with your input data!", "flash_dangerous");
            }
        }


	}

	public function edit() {

	}

	public function delete() {

	}
}