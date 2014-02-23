<?php
class MidiFile extends AppModel{
	public $name ="MidiFile";
	public $primaryKey = "id_midi_file";

	public $belongsTo = array("VoiceType", "Song");
}