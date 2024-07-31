<?php
require_once("./data/livres.php");

class livre extends database {


public function insert( $titre, $auteur, $annee) {
$sql = "INSERT INTO livres (titre, auteur, anné ) VALUES (?,?,?)";
$data = [$titre, $auteur, $annee];
 $this->sendData( $sql,$data);

}

public function delete($data) {
    $sql = "DELETE FROM livres WHERE id = ? ";
    $this->deleteData($sql,$data);

}
public function afficherLivre() {
    $sql = "SELECT id, titre, auteur, anné FROM livres";
    
    return $this->getAllData($sql);
    }

 public function update($titre,$auteur,$annee, $id) {
    $sql = "UPDATE livres SET titre = ?, auteur = ?, anné = ? WHERE id = ?";
    $data = [$titre,$auteur,$annee, $id];
    $this->sendData($sql,$data);
 }

 function getid(){
    return $this->id;
}
function getTitre(){
    return $this->titre;
}
function getAuteur(){
    return $this->auteur;
}
function getannée(){
    return $this->annee;
}
}


?>