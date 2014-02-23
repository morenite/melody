<?php
class VoiceType extends AppModel{
	public $name="VoiceType";
	public $primaryKey = "id_voice_type";

	public $hasMany = array("MidiFile", "User");
}