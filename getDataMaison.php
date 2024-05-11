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
  include('connexion.php');
    if (isset($_POST['search_param'])) {
    $search_param = mysqli_real_escape_string($con, $_POST['search_param']);
    $query = mysqli_query($con, "SELECT * FROM maison where id_maison like '%$search_param%' or quartier like '%$search_param%' or statut like '%$search_param%' or prix like '%$search_param%' order by id_maison limit 25");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '  
   
            <div class="col-md-4"><br>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow" >
                <div class=""> 
                  <img src=" '."images/image_maison/".$row['img1']. '" alt="" class="img-fluid" >
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h5 class="card-title" style="color: white;">
                        <a href="detail_maison.php?id='.$row['id_maison']. '" style="color: white;"> '.$row['description'].' 
                          <br />Quartier : '.$row['quartier']. '</a>
                      </h5>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">'.$row['statut']. '|' .$row['prix']. '</span>
                      </div>
                      <a href="detail_maison.php?id='.$row['id_maison']. '" class="link-a">Cliquer pour voir
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Dimension</h4>
                          <span>
                            '.$row['dimension']; .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>'.$row['nbre_chambre'] .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salon</h4>
                          <span>'.$row['nbre_salon'] .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>'.$row['douche_externe'].'</span></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>

         '.    
        }else{
        .'

          <div class="col-md-4"><br>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow" >
                <div class=""> 
                  <img src=" '."images/image_maison/".$row['img1']. '" alt="" class="img-fluid" >
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h5 class="card-title" style="color: white;">
                        <a href="detail_maison.php?id='.$row['id_maison']. '" style="color: white;"> '.$row['description'].' 
                          <br />Quartier : '.$row['quartier']. '</a>
                      </h5>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">'.$row['statut']. '|' .$row['prix']. '</span>
                      </div>
                      <a href="detail_maison.php?id='.$row['id_maison']. '" class="link-a">Cliquer pour voir
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Dimension</h4>
                          <span>
                            '.$row['dimension']; .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>'.$row['nbre_chambre'] .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salon</h4>
                          <span>'.$row['nbre_salon'] .'</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>'.$row['douche_externe'].'</span></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>






   ';
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