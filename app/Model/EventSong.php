<?php
class EventSong extends AppModel{
	public $name="EventSong";

	public $belongsTo = array("Event", "Song");
}