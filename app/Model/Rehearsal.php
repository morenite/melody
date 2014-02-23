<?php
class Rehearsal extends AppModel{
	public $name = "Rehearsal";

	public $hasOne = array("Attendance");
	public $belongsTo = array("Event");
}