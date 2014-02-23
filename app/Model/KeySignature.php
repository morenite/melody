<?php
class KeySignature Extends AppModel {
	public $name ="KeySignature";

	public $hasMany = array("SongKeySignature");
}