<?php
class KeySignature Extends AppModel {
	public $name ="KeySignature";
	public $primaryKey = "id_key_signature";

	public $hasMany = array("SongKeySignature");
}