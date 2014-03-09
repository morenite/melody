<?php
class EventsController extends AppController{
    
    public $components = array(
		'Paginator'
	);
    
    public $paginate = array(
        'limit' => 10
    );
    
	public function index() {
        $this->Event->recursive = 2;
        
        $this->Paginator->settings = $this->paginate;
        $events = $this->Paginator->paginate('Event');
        
        $this->set("events", $events);
	}

	public function add() {
        if ($this->request->is("post")) {
            if($this->Event->save($this->request->data)) {
                $this->Session->setFlash("Your new events has been added succesfully.", "flash_success");
                $this->redirect(array("controller" => "events", "action" => "index"));
            }
            else {
                $this->Session->setFlash("There is something wrong with your input data!", "flash_dangerous");
            }
        }

        $this->loadModel("EventType");
        $this->set("eventTypes", $this->EventType->find("list"));
	}

	public function edit($id) {

	}

	public function delete($id) {

	}
    
    public function detail($id) {
        
    }
}