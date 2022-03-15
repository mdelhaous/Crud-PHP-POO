<?php
require_once "EtudiantController.php";
require_once "view/view.php";

//class_Router
class Router{
private $ctrlEtud;

//construct
public function __construct(){

  $this->ctrlEtud = new EtudiantController();

}//FIN_const

//action_traiter Requet entrant
public function routerRequete(){
try {
  if (isset($_GET['action'])) 
  {
    switch ($_GET['action'])
    {
      case 'addstudent':
        $this->ctrlEtud->addstudent();
        break;
      case 'liststudent':
        $this->ctrlEtud->getAllstudents();
        break;
      case 'modifierstudent':
        $this->ctrlEtud->editstudent();
        break;
      case 'suppression':
        $this->ctrlEtud->deletstudent();
        break;
      default:
        throw new Exception("Action non valide");
        break;
      }

    }
  } 
  catch (Exception $e) 
  {
  $this->erreur($e->getMessage());
  }
}
//FIN_routerReq

private function erreur($msgerreur)
{
  $vue = new Vue("Erreur");
  $vue->generer(array('msgErreur' => $msgerreur));
}
//fin_erreur

}
//FIN_Router

 ?>
