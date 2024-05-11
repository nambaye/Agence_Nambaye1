<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
/*if (!isset($_SESSION['id'])) {
    header('Location: accueil_admin.php');
    exit();
}*/
?>
<?php
  include('../connexion.php');
    if (isset($_POST['search_param'])) {
    $search_param = mysqli_real_escape_string($con, $_POST['search_param']);
    $query = mysqli_query($con, "SELECT * FROM terrain where id_terrain like '%$search_param%' or quartier like '%$search_param%' or statut like '%$search_param%' order by id_terrain limit 25");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>  
    <td><input type="hidden" value='.$row['description'].' name="DES[]"/>'. $row['description'] . '</td>

    <td><input type="hidden" value='.$row['statut'].' name="STATUT[]"/>' . $row['statut'] . '</td>
    <td><input type="hidden" value='.$row['dimension'].' name="DIMENSION[]"/>' . $row['dimension'] . '</td>
    <td><input type="hidden" value='.$row['quartier'].' name="QUARTIER[]"/>' . $row['quartier'] . '</td>
    <td><input type="hidden" value='.$row['ville'].' name="VILLE[]"/>' . $row['ville'] . '</td>
    <td><input type="hidden" value='.$row['prix'].' name="PRIX[]"/>' . $row['prix'] . '</td>
    <td><input type="hidden" value='.$row['nbre_lot'].' name="LOT[]"/>' . $row['nbre_lot'] . '</td>
    <td><input type="hidden" value='.$row['disponibilite'].' name="DISPONIBILITE[]"/>' . $row['disponibilite'] . '</td>
   <td> 
                                               
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="detail_terrain_admin.php?id_terrain='.$row["id_terrain"].' "  ?><i class="fa fa-pencil"></i></a>
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="sup_terrain.php?id_terrain='.$row["id_terrain"].' " ?><i class="fa fa-trash-o"></i></a>
    </td>
    
    
  </tr>';
        }
    } else {
        $output = '
  <tr>
    <td colspan="6"> Nous avons trouvé aucune correspondance à votre recherche. </td>   
  </tr>';
    }
    echo $output;
   
}
?>