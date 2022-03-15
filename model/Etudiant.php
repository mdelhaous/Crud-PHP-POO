<?php

//Entite
class Etudiant 
{
  //les_attr
  private $name ;
  private $lastname;
  private $age;
  private $cne ;
  private $id;
//contruction
public function __construct($name, $lastname, $age,$cne,$id_student)
{

  $this->name = $name;
  $this->lastname = $lastname;
  $this->age = $age;
  $this->cne = $cne;
  $this->id=$id_student;

}
//methods get

public function getName(){
  return $this->name ;
}

public function getlastname(){
  return $this->lastname ;
}

public function getage(){
  return $this->age ;
}

public function getcne()
{
    return $this->cne ;
}

public function getId()
{
  return $this->id;
}
}

