<?php
class Participation extends AppModel {
	public $name = "Participation";

	public $belongsTo = array("Event", "User");
}