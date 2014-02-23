<?php
class Video extends AppModel{
	public $name = "Video";

	public $belongsTo = array("Song");
}