
  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./indexzz.php">Acc</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./indexzz.php">Accueil</a>
              </li>
                                                       
              <li class="nav">
                <a href="lister.php">Lister</a>
              </li>
              <li class="nav">
                <a href="rechercher.php">Rechercher</a>
              </li>
              
<?php
// Si session administrateur
if (estAdministrateurConnecte())
{

  ?>
  
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Fleurs  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="ajouter.php">Ajouter</a></li>
                       <li><a href="modifier.php">Modifier</a></li>
                      <li><a href="supprimer.php">Supprimer</a></li>
                  </ul>
              </li>
 
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Clients  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="listerCli.php">Lister</a></li>
                      <li><a href="supprimerCli.php">Supprimer</a></li>
                  </ul>
              </li>

              <li class="nav">
                 <a href="deconnecter.php" >Deconnecter</a> 
              </li>
  <?php
}

// Si session client
if (estVisiteurConnecte())
{

  ?>

              <li class="nav"> 
                <a href="listerPanier.php" >Panier </a>  
              </li>
              <li class="nav">
                 <a href="deconnecter.php" >Deconnecter</a> 
              </li>
 
  <?php
}

// Si aucune connection n'est en cours, proposer l'inscription et l'identification
if (!estConnecte())
{
?>
              <li class="nav">
                <a href="inscrire.php" >Inscription</a> 
              </li>
              <li class="nav">  
                <a href="connecter.php" >Se connecter</a> 
              </li>   
<?php
}   
?>       
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

