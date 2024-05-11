<?php
session_start();
include("../connexion.php");
$id = $_GET["id_voiture"] ;
$sql = "DELETE FROM voiture WHERE id_voiture = ".$id ;
$requete=mysqli_query($con,$sql)or die("Erreur sql : $sql<br/>".mysql_error());
if($requete)
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Voiture supprimée")
      document.location.href="gestion_voiture.php"
      </script>
    <?php
    //fin du code javascript
}
else
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Suppression échouée")
      document.location.href="gestion_voiture.php"
      </script>
    <?php
    //fin du code javascript
}
?>