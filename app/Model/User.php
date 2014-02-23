<?php
class User extends AppModel{
	public $name = "User";
	public $primaryKey = "id_user";

	public $hasMany = array("Activity","Announcement","Attendance","CashDatum", "Event", "Meeting", "Message", "Participation", "VoiceRangeDatum");
	public $belongsTo = array("Role", "VoiceType");
}