<?php
class Attendance extends AppModel {
	public $name = "Attendance";
	public $primaryKey = "id_attendance";

	public $belongsTo = array("User", "Rehearsal", "AttendanceStatus");
}