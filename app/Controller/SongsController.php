<?php
class SongsController extends AppController {

	public $components = array(
		'Paginator'
	);

	public $paginate = array(
		'limit' => 2
	);

	public function index() {
		$this->set('title_for_layout', 'Indeks Lagu');

		$this->Paginator->settings = $this->paginate;
		$songs = $this->Paginator->paginate('Song');
		$this->set('songs', $songs);
	}

	/* http://localhost/melody/songs/add */
	public function add() {

	}

	public function edit($songId) {

	}

	public function delete($songId) {

	}
}