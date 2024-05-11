<?php
session_start();
include('connexion.php');
/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next);
}*/

if (isset($_REQUEST['ajouter'])) {
  if(empty($_POST['description']) OR empty($_POST['statut']) OR empty($_POST['dimension']) OR empty($_POST['emplacement']) OR empty($_POST['nbre_chambre']) OR empty($_POST['nbre_salon']) OR empty($_POST['nbre_lit']) OR empty($_POST['prix_appartement']) OR empty($_POST['nbre_douche']) OR empty($_POST['disponibilite'])){

      //Code JavaScript
        ?>
        <script language="javascript">
            window.alert('Tous les champs doivent être completés !')
            document.location.href="ajouter_appartement.php"
        </script>
        <?php
        exit();

}else{
      //IMAGE INSERTION
      //declere veriable
      $des = addslashes($_POST['description']);
      $statut = addslashes($_POST['statut']);
      $dimension = addslashes($_POST['dimension']);
      $chambre = addslashes($_POST['nbre_chambre']);
      $emplacement = addslashes($_POST['emplacement']);
      $salon = addslashes($_POST['nbre_salon']);
      $lit = addslashes($_POST['nbre_lit']);
      $douche = addslashes($_POST['nbre_douche']);
      $prix_appartement = addslashes($_POST['prix_appartement']);
      $disponilite = addslashes($_POST['disponibilite']);
      
      $imge1= $_FILES['image1']['name'];
      $temp_name1 = $_FILES['image1']['tmp_name'];

      $imge2= $_FILES['image2']['name'];
      $temp_name2 = $_FILES['image2']['tmp_name'];

      $imge3= $_FILES['image3']['name'];
      $temp_name3 = $_FILES['image3']['tmp_name'];

      $imge4= $_FILES['image4']['name'];
      $temp_name4 = $_FILES['image4']['tmp_name'];

      $sql = "INSERT INTO `appartement` (`description`, `statut`, `dimension`, `chambre`, `salon`, `lit`, `prix_appartement`, `emplacement`, `douche`, `disponibilite`, `img1`, `img2`, `img3`, `img4`) VALUES ('$des', '$statut', '$dimension', '$emplacement', '$chambre', '$salon', '$lit', '$douche', '$prix_appartement', '$disponilite', '$imge1', '$imge2', '$imge3', '$imge4') " ;

      $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error($con));
      move_uploaded_file($temp_name1,"images/image_appartement/".$imge1);
      move_uploaded_file($temp_name2,"images/image_appartement/".$imge2);
      move_uploaded_file($temp_name3,"images/image_appartement/".$imge3);
      move_uploaded_file($temp_name4,"images/image_appartement/".$imge4);

      if($res){ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Appartement publié avec succès !")
          document.location.href="ajouter_appartement.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Publication échouée !")
          document.location.href="ajouter_appartement.php"
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
        <h2 class="form-login-heading1">Ajouter appartement !</h2>

        <div class="login-wrap">
        <div class="row">
         <div class="col-md-6">
          <label>Description </label>
          <input type="text" class="form-control" placeholder="" autofocus name="description">

          <label>Statut</label>
          <select class="form-control form-select form-control-a" name="statut">
            <option>* Selectionner le statut de l'appartement *</option>
            <option value="En vente">En vente</option>
            <option value="En location">En location</option> 
          </select>

          <label>Dimension</label>
          <input type="text" class="form-control" placeholder="Entrer la dimension de l'appartement..." name="dimension">

          <label>Emplacement</label>
          <input type="text" class="form-control" placeholder="Entrer l'emplacement..." autofocus name="emplacement">

          <label>Nombre de chambre</label>
          <input type="number" min="1" class="form-control" placeholder="" autofocus name="nbre_chambre">
          
          <label>Nombre de salon</label>
          <input type="number" min="1" class="form-control" placeholder="" name="nbre_salon">
          
          <label>Nombre de lit</label>
          <input type="number" min="1" class="form-control" placeholder="" name="nbre_lit">

          <br>
        </div>
          
        <div class="col-md-6">
          <label>Nombre douche interne</label>
          <input type="number" min="1" class="form-control" placeholder="" name="nbre_douche">

          <label>Prix appatement</label>
          <input type="text" class="form-control" placeholder="" name="prix_appartement">

          <label>Disponibilité</label>
          <select class="form-control form-select form-control-a" name="disponibilite">
            <option>* Selectionner la disponibilité *</option>
            <option value="Libre">Libre</option>
            <option value="Occupée">Occupée</option> 
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