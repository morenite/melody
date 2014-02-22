<?php
class Song extends AppModel {
	public $name = "Song";

	public $primaryKey = "id_song";

	public $hasMany = array("EventSong", "Video", "MidiFile", "MusicalSheet");
	public $belongsTo = array("SongCategory");

}