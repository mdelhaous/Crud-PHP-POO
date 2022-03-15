<?php
class Vue{
private $fichier;
private $titre;

public function __construct($action){
  $this->fichier = "view/vue".$action.".php";
}
public function generer($donnees){
  $contenu = $this->genererFichier($this->fichier,$donnees);
  $vue = $this->genererFichier("view/gabarit.php",array('titre' => $this->titre,'contenu' =>$contenu ));
  echo $vue;
}//fin generer
private function genererFichier($fichier, $donnees) {
//test_exist_fichier  
  if (file_exists($fichier)) {
      extract($donnees);
      ob_start();
      require $fichier;
      return ob_get_clean();
    }else
    {
      throw new Exception("Fichier '.$fichier.' introuvable");
    }
}

}//Fin_Vue



 ?>
