<?php
session_start();
include('connexion.php');
/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next);
}*/
if (isset($_REQUEST['ajouter'])) {
  if(empty($_POST['nom_hotel']) OR empty($_POST['description']) OR empty($_POST['ville']) OR empty($_POST['pays']) OR empty($_POST['quartier']) OR empty($_POST['adresse']) OR empty($_POST['type_chambre']) OR empty($_POST['prix_chambre']) OR empty($_POST['piscine']) OR empty($_POST['restaurant'])){

      //Code JavaScript
        ?>
        <script language="javascript">
            window.alert('Tous les champs doivent être completés !')
            document.location.href="ajouter_hotel.php"
        </script>
        <?php
        exit();

}else{
      //IMAGE INSERTION
      //declere veriable
      $nom = addslashes($_POST['nom_hotel']);
      $des = addslashes($_POST['description']);
      $ville = addslashes($_POST['ville']);
      $pays = addslashes($_POST['pays']);
      $quartier = addslashes($_POST['quartier']);
      $adresse = addslashes($_POST['adresse']);
      $type_chambre = addslashes($_POST['type_chambre']);
      $prix_chambre = addslashes($_POST['prix_chambre']);
      $piscine = addslashes($_POST['piscine']);
      $restaurant = addslashes($_POST['restaurant']);
      
      $imge1= $_FILES['image1']['name'];
      $temp_name1 = $_FILES['image1']['tmp_name'];

      $imge2= $_FILES['image2']['name'];
      $temp_name2 = $_FILES['image2']['tmp_name'];

      $imge3= $_FILES['image3']['name'];
      $temp_name3 = $_FILES['image3']['tmp_name'];

      $imge4= $_FILES['image4']['name'];
      $temp_name4 = $_FILES['image4']['tmp_name'];

      $sql = "INSERT INTO `hotels` (`nom_hotel`,`description`, `ville`, `pays`, `quartier`, `adresse`, `type_chambre`, `prix_chambre`, `piscine`, `restaurant`, `img1`, `img2`, `img3`, `img4`) VALUES ('$nom','$des', '$ville', '$pays', '$quartier', '$adresse', '$type_chambre', '$prix_chambre', '$piscine', '$restaurant', '$imge1', '$imge2', '$imge3', '$imge4') " ;

      $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error($con));
      move_uploaded_file($temp_name1,"images/image_hotel/".$imge1);
      move_uploaded_file($temp_name2,"images/image_hotel/".$imge2);
      move_uploaded_file($temp_name3,"images/image_hotel/".$imge3);
      move_uploaded_file($temp_name4,"images/image_hotel/".$imge4);

      if($res){ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Hotel publié avec succès !")
          document.location.href="ajouter_hotel.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Publication échouée !")
          document.location.href="ajouter_hotel.php"
          </script>
        <?php
        //fin du code javascript
      }
    
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Immo 236</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  <!-- LES LIENS EXTERNES POUR LOGIN -->
  
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Rechercher une maison</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Mot clé</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>Tout type</option>
                <option>Pour location</option>
                <option>Pour vente</option>
                <option>Maison libre</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">Ville</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>Tout</option>
                <option>Bangui</option>
                <option>Berberati</option>
                <option>Bouar</option>
                <option>Bambari</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Chambres</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Choisir</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Quartier</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Ville</option>
                <option>Gobongo</option>
                <option>Lakounga</option>
                <option>Sica</option>
                <option>Pk11 Cité golf</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Salle de bains</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Choisir</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min prix</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Recherchez</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Immo<span class="color-b">236</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">A propos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.php">Propriétés</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog-grid.php">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.php">Propriété unique</a>
              <a class="dropdown-item " href="#">Location et vente maisons</a>
              <a class="dropdown-item " href="#">Appartement en location</a>
              <a class="dropdown-item " href="#">Terrains en vente</a>
              <a class="dropdown-item " href="blog-single.php">Blog unique</a>
              <a class="dropdown-item " href="agents-grid.php">Grille des agents</a>
              <a class="dropdown-item " href="agent-single.php">Agent unique</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Hôtels</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav>
  <!-- End Header/Navbar -->



    <!-- ======= login ======= -->
 
  <section class="section-services">
   <br>  
 
      <form class="form-login1" action="" method="POST" enctype="multipart/form-data">
        <h2 class="form-login-heading1">Ajouter hôtel !</h2>

        <div class="login-wrap">
        <div class="row">
         <div class="col-md-6">
          <label>Nom hotel</label>
          <input type="text" class="form-control" placeholder="" autofocus name="nom_hotel">

          <label>Description </label>
          <input type="text" class="form-control" placeholder="" autofocus name="description">

          <label>Ville</label>
          <input type="text" class="form-control" placeholder="" autofocus name="ville">

          <label>Pays</label>
          <input type="text" class="form-control" placeholder="" autofocus name="pays">

          <label>Quartier</label>
          <input type="text" class="form-control" placeholder="" autofocus name="quartier">

          <label>Adresse</label>
          <input type="text" class="form-control" placeholder="" autofocus name="adresse">

          <label>Type de chambre</label>
          <input type="text" class="form-control" placeholder="" autofocus name="type_chambre">
          <br>
        </div>
          
        <div class="col-md-6">
          <label>Prix chambre</label>
          <input type="number" min="1" class="form-control" placeholder="" name="prix_chambre">

          <label>Piscine</label>
          <select class="form-control form-select form-control-a" name="piscine">
            <option>* Selectionner une valeur *</option>
            <option value="Oui">Oui</option>
            <option value="Non">Non</option> 
          </select>

          <label>Restaurant</label>
          <select class="form-control form-select form-control-a" name="restaurant">
            <option>* Selectionner une valeur *</option>
            <option value="Oui">Oui</option>
            <option value="Non">Non</option> 
          </select>

          <label>Image 1</label>
          <input type="file" class="form-control" placeholder="" name="image1">

          <label>Image 2</label>
          <input type="file" class="form-control" placeholder="" autofocus name="image2">

          <label>Image 3</label>
          <input type="file" class="form-control" placeholder="" name="image3">

          <label>Image 4</label>
          <input type="file" class="form-control" placeholder="" name="image4">
          
        </div>
        <br>
          <button class="btn btn-theme" href="" type="submit" name="ajouter"><i class=""></i> Ajouter</button>  

          </div>
        </div>
      </form>
   
  </section>
   

    <!-- ======= fin login ======= -->
    
  <!-- ======= Footer ======= -->
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>