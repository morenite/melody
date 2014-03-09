<?php
class Event extends AppModel {
	public $name = "Event";
	public $primaryKey = "id_event";

	public $belongsTo = array(
        "User" => array(
            "foreignKey" => "person_in_charge"
        ),
        "EventType"
    );
    
	public $hasMany = array("Rehearsal", "EventSong", "Participation");
}