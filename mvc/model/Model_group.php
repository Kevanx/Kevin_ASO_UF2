<?php
include_once("model/Group.php");
class Model {
    public function create_group($group)
    {
    echo "Create function <br>";
    $usuario=new group($group);
    echo $group;
    passthru('sudo ./add_group.sh '.$usuario->group, $retorno);
    echo "passthru: ".$retorno;
     return;
    }


    public function list_group()
    {

   passthru("./list_group.sh");

   $file = new SplFileObject("./group.txt");

   while (!$file->eof()) {

    $g=$file->fgets();
    $resultat_list[$g] = new group($g);
     }

     $file=null;
     return $resultat_list;


    }
	public function delete_group($g)


    {


     $usuario=new group($g);
     echo $usuario->group;
     passthru("./del_group.sh ".$usuario->group, $retorno);
     echo "passthru: ".$retorno;


    }
}
?>
