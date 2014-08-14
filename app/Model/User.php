<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
	public $name = 'User';
	public $primaryKey = 'id_user';

	public $hasMany = array(
        'Activity',
        'Announcement',
        'Attendance',
        'CashDatum', 
        'Event', 
        'Meeting', 
        'Message', 
        'Participation', 
        'VoiceRangeDatum'
    );
    
	public $belongsTo = array(
        'Role', 
        'VoiceType'
    );
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}