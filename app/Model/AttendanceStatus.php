<?php
class AttendanceStatus extends AppModel{
	public $name="AttendanceStatus";

	public $hasMany = array("Attendance");
}