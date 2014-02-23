<?php
class EventType extends AppModel{
	public $name="EventType";
	public $primaryKey = "id_event_type";

	public $hasMany = array("Event");
}