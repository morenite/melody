<?php
class MidiFile extends AppModel{
	public $name ="MidiFile";

	public $belongsTo = array("VoiceType", "Song");
}