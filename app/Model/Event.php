<?php
class Event extends AppModel {
	public $name = "Event";
	public $primaryKey = "id_event";

	public $belongsTo = array("User", "EventType");
	public $hasMany = array("Rehearsal", "EventSong", "Participation");
}