<?php
require_once 'framework/modele.php'; 
 
class Commentaire extends Modele { 

    public function getCommentaires($idRecette) { 
        $sql = 'SELECT * FROM commentaire';
        $idRecette = $this->executerRequete($sql);
        return $idRecette;
    } 

  
    public function ajouterCommentaire($idRecette, $auteur, $contenu, $note) { 
        $sql = "INSERT INTO commentaire (idRecette, auteur, contenu, note)
        VALUES ($idRecette, $auteur,  $contenu, $note)";
        $idRecette = $this->executerRequete($sql);

        
    } 

     
}