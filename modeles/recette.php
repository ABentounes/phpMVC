<?php

require_once 'framework/modele.php';  
 
class Recette extends Modele {    
    public function getRecettes() { 

        $sql = 'SELECT * FROM recette';
      $recette = $this->executerRequete($sql);
      return $recette;
    }     

    
    public function getRecette($idRecette) { 
 
          $sql = 'SELECT * from recette WHERE id = ? ';
          $recette =  $this->executerRequete($sql, array($idRecette))->fetch();
          return $recette;
    }
    
        public function getIngredients($idRecette) {
      
          $sql = 'SELECT * FROM ingredient WHERE idRecette = ?';
          $ingredients =  $this->executerRequete($sql, array($idRecette));
          return $ingredients;
     } 
} 