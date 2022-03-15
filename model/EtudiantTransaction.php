<?php
require_once "Etudiant.php";

class EtudiantTransaction{
  private $bdd;
  private $dbname="studentcrud";
  private $root="root";
  private $pswd="";
//constructeur
  public function __construct(){
    try {
      $this->bdd = new PDO('mysql:host=localhost;dbname='.$this->dbname,$this->root,$this->pswd);
    } catch (Exception $e) {
      die('Erreur :'.$e->getMessage());
    }
  }//finConstr

//save
public function save($students){

  $req=$this->bdd->prepare("INSERT INTO students(name,lastname,age,cne) VALUES (:name,:lastname,:age,:cne)");
  $req->execute(array( 
      'name' => $students->getName(),
      'lastname' => $students->getlastname(),
      'age' => $students->getage(),
      'cne' => $students->getcne() 
    ));
}
//finSave

//modifier

public function modifier($students){
  $id=$_GET['id'];
  $req=$this->bdd->prepare('UPDATE students SET name = :name,lastname = :lastname, age = :age, cne= :cne WHERE id ='.$id);
  $req->execute(array( 
    'name' => $students->getName(),
    'lastname' => $students->getlastname(),
    'age' => $students->getage(),
    'cne' => $students->getcne()
  ));

}
//finModifier

public function supprimer(){
$id=$_GET['id'];
$req=$this->bdd->prepare('DELETE FROM students WHERE id ='.$id);
$req->execute();
}

//get_one
public function get_one()
{
  $id = $_GET['id'];
  $reponse = $this->bdd->query('SELECT * FROM students WHERE id='.$id);
  $onestudent = array();

  while ($donnees = $reponse->fetch()) {
     array_push($onestudent,new Etudiant($donnees['name'], $donnees['lastname'] , $donnees['age'], $donnees['cne'], $donnees['id']));
     }
 return $onestudent;
}


//getall
public function getAll(){
   $reponse = $this->bdd->query('select * from students');
   $arraystudents = array();
   while ($donnees = $reponse->fetch()) {
      array_push($arraystudents,new Etudiant($donnees['name'], $donnees['lastname'] , $donnees['age'], $donnees['cne'],$donnees['id']));
      }
 return $arraystudents;

}
//fingetall



}//finClass

 ?>
