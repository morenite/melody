<?php
class SongCategory extends AppModel{
	public $name ="SongCategory";

	public $hasMany = array("song");
}