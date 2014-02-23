<?php
class Song extends AppModel {
	public $name = "Song";

	public $hasMany = array("EventSong", "Video", "SongKeySignature", "MidiFile", "MusicalSheet");
	public $belongsTo = array("SongCategory");

}