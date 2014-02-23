<?php
class Meeting extends AppModel{
	public $name = "Meeting";

	public $belongsTo = array("User");
}