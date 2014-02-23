<?php
class Message extends AppModel {
	public $name = "Message";
	public $primaryKey = "id_message";

	public $belongsTo = array("User");
}