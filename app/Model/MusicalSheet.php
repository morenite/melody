<?php
class MusicalSheet extends AppModel{
	public $name="MusicalSheet";

	public $belongsTo = array("Song");
}