<?php
session_start();
include("../connexion.php");
$id = $_GET["id_terrain"] ;
$sql = "DELETE FROM terrain WHERE id_terrain = ".$id ;
$requete=mysqli_query($con,$sql)or die("Erreur sql : $sql<br/>".mysql_error());
if($requete)
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Terrain supprimé")
      document.location.href="gestion_terrain.php"
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
      document.location.href="gestion_terrain.php"
      </script>
    <?php
    //fin du code javascript
}
?>