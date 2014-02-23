<?php
class Event extends AppModel {
	public $name = "Event";

	public $belongsTo = array("User", "EventType");
	public $hasMany = array("Rehearsal", "EventSong", "Participation");
}