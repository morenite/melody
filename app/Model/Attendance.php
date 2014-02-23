<?php
class Attendance extends AppModel {
	public $name = "Attendance";

	public $belongsTo = array("User", "Rehearsal", "AttendanceStatus");
}