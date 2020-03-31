<?php
include_once("model/Model_group.php");
class controller_create_group {
	public $model;
	public function __construct()  
    {  
        $this->model = new Model();
    }
public function invoke()
	{
if (!isset($_REQUEST['create']))
		{

include 'view/form_create_group.php';
	}
		else
	{
	print_r($_REQUEST);
	$this->model->create_group($_REQUEST['group']);
	include 'view/form_create_group.php';
		}
	}
}
?>