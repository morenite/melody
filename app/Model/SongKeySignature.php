<?php
class SongKeySignature extends AppModel{
	public $name="SongKeySignature";
	public $primaryKey = "id_song_key_signature";

	public $belongsTo = array("KeySignature", "Song");
}