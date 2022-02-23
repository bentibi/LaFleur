<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
 
// Initialise les ressources nécessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_bdGestionDonnees.lib.php");
  require("./include/_gestionSession.lib.php");
  require("./include/_utilitairesEtGestionErreurs.lib.php");
  // démarrage ou reprise de la session
  initSession();
  // initialement, aucune erreur ...
  $tabErreurs = array();


// DEBUT du contrôleur rechercher.php 

if (count($_POST)==0)
{
    $etape = 1;
}
else
{
    $etape = 2;
    $uneRef=$_POST["ref"];
    $uneDes=$_POST["des"];
    $unPrix=$_POST["prx"];
    $uneImage=$_POST["ima"];
    $uneCat=$_POST["cat"];
    modifier($uneRef, $uneDes, $unPrix, $uneImage, $uneCat,$tabErreurs);
    // Message de réussite pour l'affichage
    if (nbErreurs($tabErreurs)==0)
    {
      $reussite = 1;
      $messageActionOk = "La fleur a été correctement modifiée";
    }
  
}


// Début de l'affichage (les vues)
include($repVues."entete.php") ;
include($repVues."menu.php") ;
include($repVues ."erreur.php");

if($etape==1)
{
   include($repVues."vModifierForm.php");
}
include($repVues."pied.php") ;
?>



