<?php
/** 
 * Script d'affichage du panier
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vues/';
  
  require($repInclude . "_init.inc.php");
  
  // Nombre d'éléments presents dans le panier
  $nb = comptePanier();
    
  if ($nb > 0)
  {
    // obtenir les fleurs presentes dans le panier
    $unPanier = obtenirPanier();
  }
  else
  {
      $message = " Le panier est vide !";
      ajouterErreur($tabErreurs, $message); 
  }
  
  include($repVues."entete.php") ;
  include($repVues."menu.php") ;
  include($repVues."erreur.php");
  include($repVues."vPanier.php");
  include($repVues."pied.php") ;
?>

 

    
