<?php
class Announcement extends appModel{
	public $name="Announcement";

	public $belongsTo = array("User");
}