<?php
session_start();
include("../connexion.php");
$id = $_GET["id_prs"] ;
$sql = "DELETE FROM personnels WHERE id_prs = ".$id ;
$requete=mysqli_query($con,$sql)or die("Erreur sql : $sql<br/>".mysql_error());
if($requete)
{
//Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Personnel supprimé")
      document.location.href="gestion_personnel.php"
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
      document.location.href="gestion_personnel.php"
      </script>
    <?php
    //fin du code javascript
}
?>