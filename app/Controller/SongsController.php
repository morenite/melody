<?php
class SongsController extends AppController {

	public $components = array(
		'Paginator'
	);

	public $paginate = array(
		'limit' => 6
	);

	public function index() {
		$this->set('title_for_layout', 'Song Index');

        $this->Song->recursive = 0;
        
		$this->Paginator->settings = $this->paginate;
		$songs = $this->Paginator->paginate('Song');
        
        $this->loadModel('SongKeySignature');
        
        for ($i = 0; $i < count($songs); $i++) {
            $this->SongKeySignature->recursive = 0;
            $keys = $this->SongKeySignature->find('all', array(
                'conditions' => array(
                    'song_id' => $songs[$i]['Song']['id_song']
                )
            ));
            
            $songs[$i]['keys'] = $keys;
        }
        
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