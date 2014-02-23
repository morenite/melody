<?php
class AttendanceStatus extends AppModel{
	public $name="AttendanceStatus";
	public $primaryKey = "id_attendance_status";

	public $hasMany = array("Attendance");
}