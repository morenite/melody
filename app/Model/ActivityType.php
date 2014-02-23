<?php
class ActivityType extends AppModel{
	public $name = "ActivityType";

	public $hasMany = array("Activity");
}

