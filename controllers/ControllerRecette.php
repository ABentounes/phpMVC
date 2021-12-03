<?php
require_once 'modeles/recette.php'; 
require_once 'modeles/commentaire.php'; 
require_once 'framework/controller.php'; 
require_once 'framework/vue.php'; 
 
class ControllerRecette extends Controller { 
 

  private $recette; 
 

  public function __construct() { 
    $this->recette = new Recette(); 
    $this->commentaire = new Commentaire(); 
  } 
 

  public function index() { 
  } 
 

  // Affiche les détails sur une recette 
  public function recette() { 
    $idRecette = $this->requete->getParametre('id');
    $recette = $this->recette->getRecette($idRecette); 
    
      $ingredients = $this->recette->getIngredients($idRecette); 
    $this->genererVue(array('recette' => $recette, 'ingredients' => $ingredients)); 
    // code à implémenter 
    // récupérer la recette 
    // récupérer la liste des ingrédients 
    // récupérer la liste des commentaires 
    // générer la vue 
  } 

   

  // Ajoute un commentaire à une recette 
  public function commenter() { 
    // récupérer les paramètres (idRecette, auteur, contenu, note) 
    // Sauvegarde du commentaire 
    // Actualisation de l'affichage de la recette 
  }   

}