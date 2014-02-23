<?php
class Rehearsal extends AppModel{
	public $name = "Rehearsal";
	public $primaryKey = "id_rehearsal";

	public $hasOne = array("Attendance");
	public $belongsTo = array("Event");
}