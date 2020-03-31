<?php
include_once("model/Model_user.php");
class controller_create_user {
	public $model;
	public function __construct()  
    {  
        $this->model = new Model_user();
    }
	public function invoke()
	{
	if (!isset($_REQUEST['create']))
		{

	include 'view/form_create_user.php';
		}
		else
		{
		print_r($_REQUEST);		
		$result = $this->model->create_user($_REQUEST['user'],$_REQUEST['group'],$_REQUEST['folder'],$_REQUEST['passw'],$_REQUEST['department']);
		if ($result == 0)			
		include 'view/form_create_user.php';
		else
		include 'view/error.php';
		}
	}
}
?>