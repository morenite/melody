<?php
class MusicalSheet extends AppModel{
	public $name="MusicalSheet";
	public $primaryKey = "id_musical_sheet";

	public $belongsTo = array("Song");
}