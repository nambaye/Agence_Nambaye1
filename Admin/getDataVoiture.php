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
    $query = mysqli_query($con, "SELECT * FROM voiture where id_voiture like '%$search_param%' or model like '%$search_param%' or statut like '%$search_param%' order by id_voiture limit 25");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>  
    <td><input type="hidden" value='.$row['description'].' name="DES[]"/>'. $row['description'] . '</td>

    <td><input type="hidden" value='.$row['statut'].' name="STATUT[]"/>' . $row['statut'] . '</td>
    <td><input type="hidden" value='.$row['model'].' name="MODEL[]"/>' . $row['model'] . '</td>
    <td><input type="hidden" value='.$row['marque'].' name="MARQUE[]"/>' . $row['marque'] . '</td>
    <td><input type="hidden" value='.$row['transmission'].' name="TRANSMISSION[]"/>' . $row['transmission'] . '</td>
    <td><input type="hidden" value='.$row['reservoir'].' name="RESERVOIR[]"/>' . $row['reservoir'] . '</td>
    <td><input type="hidden" value='.$row['capacite_moteur'].' name="CAPACITE[]"/>' . $row['capacite_moteur'] . '</td>
    <td><input type="hidden" value='.$row['disponibilite'].' name="DISPONIBILITE[]"/>' . $row['disponibilite'] . '</td>
   <td> 
                                               
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="detail_voiture_admin.php?id_voiture='.$row["id_voiture"].' "  ?><i class="fa fa-pencil"></i></a>
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="sup_voiture.php?id_voiture='.$row["id_voiture"].' " ?><i class="fa fa-trash-o"></i></a>
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