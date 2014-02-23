<?php
class Activity extends AppModel {
	public $name = "Activity";

	public $primaryKey = "id_activity";

	public $belongsTo = array("ActivityType","User");

}