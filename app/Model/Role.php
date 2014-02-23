<?php
class Role extends AppModel{
	public $name ="Role";
	public $primaryKey = "id_role";

	public $hasMany = array("User");
}