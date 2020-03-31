<?php
class User {
	public $username;
	public $passw;
	public $folder;
	public $groupname;
	public $department;
	public function __construct($username, $groupname, $folder, $passw, $department)  
    {  
$this->passw = $passw;
$this->username = $username;
$this->groupname = $groupname;
$this->folder = $folder;
$this->department = $department;
    } 
}
?>