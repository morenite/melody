<?php
class VoiceType extends AppModel{
	public $name="VoiceType";

	public $hasMany = array("MidiFile", "User");
}