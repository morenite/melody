<?php
class Announcement extends appModel{
	public $name="Announcement";
	public $primaryKey = "id_announcement";

	public $belongsTo = array("User");
}