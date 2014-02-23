<?php
class EventSong extends AppModel{
	public $name="EventSong";
	public $primaryKey = "id_event_song";

	public $belongsTo = array("Event", "Song");
}