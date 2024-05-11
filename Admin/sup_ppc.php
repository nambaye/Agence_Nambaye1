<?php
session_start();
include("../connexion.php");
$id = $_GET["id"] ;
$sql = "DELETE FROM ppc WHERE id = ".$id ;
$requete=mysqli_query($con,$sql)or die("Erreur sql : $sql<br/>".mysql_error());
if($requete)
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Plan de maison supprimé")
      document.location.href="gestion_ppc.php"
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
      document.location.href="gestion_ppc.php"
      </script>
    <?php
    //fin du code javascript
}
?>