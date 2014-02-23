<?php
class SongCategory extends AppModel{
	public $name ="SongCategory";
	public $primaryKey = "id_song_category";

	public $hasMany = array("song");
}