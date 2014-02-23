<?php
class SongKeySignature extends AppModel{
	public $name="SongKeySignature";

	public $belongsTo = array("KeySignature", "Song");
}