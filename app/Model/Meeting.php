<?php
class Meeting extends AppModel{
	public $name = "Meeting";
	public $primaryKey = "id_meeting";

	public $belongsTo = array("User");
}