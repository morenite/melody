<?php
class VoiceRangeDatum extends AppModel{
	public $name ="VoiceRangeDatum";
	public $primaryKey = "id_voice_range_data";

	public $belongsTo = array("User");
}