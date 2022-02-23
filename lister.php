<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources nécessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_bdGestionDonnees.lib.php");
  require("./include/_gestionSession.lib.php");
  require("./include/_gestionPanier.lib.php");
  require("./include/_utilitairesEtGestionErreurs.lib.php");
  
  // démarrage ou reprise de la session
  initSession();
  
  // initialement, aucune erreur ...
  $tabErreurs = array();
    

// DEBUT du contrôleur lister.php

 // Si une fleur est à ajouter dans le panier
  if (isset($_GET['ref']))
  {
    $ref = $_GET['ref'];
    ajouterPanier($ref);
  }   
 
  $lafleur = lister();
  
  // Construction de la page Lister
  // pour l'affichage (appel des vues)
  include($repVues."entete.php") ;
  include($repVues."menu.php") ;
  include($repVues."vLister.php");
  include($repVues."pied.php") ;
  ?>
    
