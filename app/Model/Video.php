<?php
class Video extends AppModel{
	public $name = "Video";
	public $primaryKey = "id_video";

	public $belongsTo = array("Song");
}