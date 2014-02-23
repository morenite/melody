<?php
class User extends AppModel{
	public $name = "User";

	public $hasMany = array("Activity","Announcement","Attendance","CashDatum", "Event", "Meeting", "Message", "Participation", "VoiceRangeDatum");
	public $belongsTo = array("Role", "VoiceType");
}