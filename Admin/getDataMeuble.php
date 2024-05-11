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
    $query = mysqli_query($con, "SELECT * FROM meuble where id_meuble like '%$search_param%' or type_meuble like '%$search_param%' or statut like '%$search_param%' order by id_meuble limit 25");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>  
    <td><input type="hidden" value='.$row['description'].' name="DES[]"/>'. $row['description'] . '</td>

    <td><input type="hidden" value='.$row['statut'].' name="STATUT[]"/>' . $row['statut'] . '</td>
    <td><input type="hidden" value='.$row['type_meuble'].' name="TYPE[]"/>' . $row['type_meuble'] . '</td>
    <td><input type="hidden" value='.$row['capacite'].' name="CAPACITE[]"/>' . $row['capacite'] . '</td>
    <td><input type="hidden" value='.$row['prix'].' name="PRIX[]"/>' . $row['prix'] . '</td>
    <td><input type="hidden" value='.$row['disponibilite'].' name="DISPONIBILITE[]"/>' . $row['disponibilite'] . '</td>
   <td> 
                                               
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="detail_meuble_admin.php?id_meuble='.$row["id_meuble"].' "  ?><i class="fa fa-pencil"></i></a>
    <a  data-toggle="modal" class="btn btn-primary btn-xs" href="sup_meuble.php?id_meuble='.$row["id_meuble"].' " ?><i class="fa fa-trash-o"></i></a>
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