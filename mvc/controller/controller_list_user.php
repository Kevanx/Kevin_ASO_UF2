<?php
include_once("model/Model_user.php");
class controller_list_user {
public $model;
public function __construct()  
    {  
   $this->model = new Model_user();
    }
public function invoke()
	{
	if (!isset($_REQUEST['delete']))
	{

	$users=$this->model->list_user();
	include 'view/form_list_user.php';
		}
	else
		{
$this->model->delete_user(trim($_REQUEST['username']));
$users=$this->model->list_user();
include 'view/form_list_user.php';
		}
	}
}
?>