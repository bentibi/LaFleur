<!-- Affichage des informations sur le panier-->

<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <caption>
<h3>VOTRE PANIER</h3>
      </caption>
      <thead>
        
          <th>Référence</th>
          <th>Quantité</th>
      
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i < comptePanier())
    { 
 ?>     
        <tr>
            <td><?php echo $unPanier["ref"][$i]?></td>
            <td><?php echo $unPanier["qte"][$i]?></td>
        </tr>
<?php
        $i = $i + 1;
     }
?>       
       </tbody>       
     </table>    
  </div>
  