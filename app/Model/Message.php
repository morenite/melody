<?php
class Message extends AppModel {
	public $name = "Message";

	public $belongsTo = array("User");
}