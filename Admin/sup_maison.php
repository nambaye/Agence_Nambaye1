<?php
session_start();
include("../connexion.php");
$id = $_GET["id_maison"] ;
$sql = "DELETE FROM maison WHERE id_maison = ".$id ;
$requete=mysqli_query($con,$sql)or die("Erreur sql : $sql<br/>".mysql_error());
if($requete)
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("maison supprimée")
      document.location.href="gestion_maison.php"
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
      document.location.href="gestion_maison.php"
      </script>
    <?php
    //fin du code javascript
}
?>