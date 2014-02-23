<?php
class Participation extends AppModel {
	public $name = "Participation";
	public $primaryKey = "id_participation";

	public $belongsTo = array("Event", "User");
}