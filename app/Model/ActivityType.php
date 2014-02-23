<?php
class ActivityType extends AppModel{
	public $name = "ActivityType";
	public $primaryKey = "id_activity_type";

	public $hasMany = array("Activity");
}

