

  <!-- Vue pour lister les fleurs
    ================================================== -->

<DIV class="container">

    <TABLE class="table table-bordered table-striped table-condensed">
      <BR>
      <THEAD>
        <TR>
          <TH>Image</TH>
          <TH>Référence</TH>
          <TH>Libellé</TH>
          <TH>Prix</TH>
        </TR>
      </THEAD>
      <TBODY>  
<?php
    $i = 0;
    while($i < count($lafleur))
    { 
 ?>     
        <TR>
            <TD align="center"><IMG class="img-polaroid" src="../images/<?php echo $lafleur[$i]["image"]?>" /></TD>
            <TD><?php echo $lafleur[$i]["ref"]?></TD>
            <TD><?php echo $lafleur[$i]["designation"]?></TD>
            <TD align="right"><?php echo $lafleur[$i]["prix"]?></TD>
        </TR>
<?php
        $i = $i + 1;
     }
?>       
       </TBODY>       
     </TABLE>    
  </DIV>

 
