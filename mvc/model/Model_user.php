<?php
include_once("model/User.php");
class Model_user {
	public function create_user($username, $groupname, $folder, $passw, $department)


	{
$user=new User($username, $groupname, $folder, $passw, $department);


echo "Antes del passtrhu";


	print_r($user);
	passthru('sudo ./add_user.sh '.$user->username.' '.$user->groupname.' '.$user->folder.' '.$user->passw.' '.$user->department , $retorn);
	echo "passthru al user add: ".$retorn;		
	return $retorn;
	}
	public function list_user()

	{
	passthru("./list_users.sh");
	$file = new SplFileObject("users.txt");
	while (!$file->eof()) {


$u=$file->fgets();
$u1=explode("@", $u);
$passw='';
$result_list[$u1[0]] = new User($u1[0], $u1[1], $u1[2], $passw);
		}


$file=null;
return $result_list;
	}
public function delete_user($username)
	{

	$user=new user($username, '', '', '');
	passthru("sudo ./deluser.sh ".$user->username, $retorn);
	echo "passthru: ".$retorn;
	}
}
?>