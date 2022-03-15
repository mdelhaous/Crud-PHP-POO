<?php
//importer les class de model et view
require_once "model/Etudiant.php";
require_once "model/EtudiantTransaction.php";


//class EtudiantControleur
class EtudiantController
{
  private $EtudiantTransaction;

//const
  public function __construct()
  {
    $this->EtudiantTransaction = new EtudiantTransaction();
  }
//fin_const

//actions
  public function getAllstudents()
  {
    $students=$this->EtudiantTransaction->getAll();
    $vue =new Vue("liststudent");
    $vue->generer(array('liststudent' => $students ));
  }
  //FIN_getAllstudents

  public function addstudent()
  {
      $vue = new Vue("addstudent");
      $vue->generer(array());
      if(isset($_POST['submit']))
      {
        $a = $_POST['name'] ;
        $b = $_POST['lastname'] ;
        $c = $_POST['age'] ;
        $d = $_POST['cne'];
        $student=new Etudiant($a,$b,$c,$d,"");
        $this->EtudiantTransaction->save($student);
      }
  }
  //FIN_addstudent

  public function editstudent(){
    $onestudent = $this->EtudiantTransaction->get_one();
    $vue = new Vue("modifierstudent");
    $vue->generer(array('onestudent'=>$onestudent));
      if(isset($_POST['submit']))
      {
        $student = new Etudiant($_POST["name"], $_POST["lastname"] , $_POST["age"] , $_POST["cne"] ,"");
        $this->EtudiantTransaction->modifier($student);
        
      }
      
  }//FIN_editestudent

public function deletstudent(){

  $this->EtudiantTransaction->supprimer();

  $students=$this->EtudiantTransaction->getAll();
  $vue = new Vue("liststudent");
  $vue->generer(array('liststudent' => $students ));
}
}

?>
