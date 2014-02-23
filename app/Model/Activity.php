<?php
class Activity extends AppModel {
	public $name = "Activity";

	public $belongsTo = array("ActivityType","User");

}