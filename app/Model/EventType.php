<?php
class EventType extends AppModel{
	public $name="EventType";

	public $hasMany = array("Event");
}