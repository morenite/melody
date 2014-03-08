<?php
class EventsController extends AppController{
	public function index() {
            $this->Event->recursive = 2;
            $events = $this->Event->find('all');
            $this->set("events", $events);
            
	}

	public function add() {
            
            if ($this->request->is("post")) {
                if($this->Event->save($this->request->data)) {
                    $this->Session->setFlash("your events has been added succesfully", "flash_success");
                    $this->redirect(array("controller" => "events", "action" => "index"));
                }
                else {
                    $this->Session->setFlash("There is something wrong with your input data", "flash_dangerous");
                }
            }
            
            $this->loadModel("EventType");
            $this->set("eventTypes", $this->EventType->find("list"));

            

	}

	public function edit($eventId) {

	}

	public function delete($eventId) {

	}
}