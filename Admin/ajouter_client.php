<?php
session_start();
include('connexion.php');
/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next);
}*/
if (isset($_REQUEST['valide'])) {
      //declaration veriable
      $nom = strtoupper(addslashes($_POST['nom_client']));
      $prenom = addslashes($_POST['prenom_client']);
      $naissance = addslashes($_POST['naissance_client']);
      $type_iden = addslashes($_POST['type_identite']);
      $num_ident = addslashes($_POST['numero_identite']);
      $pays = addslashes($_POST['pays_client']);
      $ville = addslashes($_POST['ville_client']);
      $telephone = addslashes($_POST['phone_client']);
      $email = addslashes($_POST['email_client']);
      $password = $_POST['password_client'];
      $conf_password = $_POST['conf_password'];

      if($password==$conf_password){
        $hash_passwd=md5($password);
        $sql = "INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `date_naissance`, `type_identite`, `numero_identite`, `pays`, `ville`, `telephone`, `email`) VALUES (null, '$nom', '$prenom', '$naissance', '$type_iden', '$num_ident', '$pays', '$ville', '$telephone', '$email') " ;
        $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error());
        if($res){ 
        
          $requete = "INSERT INTO `utilisateur` (`email_users`, `password`, `type_user`, `validation`, `status`) VALUES ('$email', '$hash_passwd', 1, 0, 0) " ;
          $req = $con->query($requete) or die ("Erreur sql : $sql<br/>".mysqli_error());

        ?>
          <script language="javascript">
          window.alert("Compté créé avec succès !!!")
          document.location.href="index.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Echec lors de la création ducompte, veillez réessayer plus tard !!!")
          document.location.href="ajouter_client.php"
          </script>
        <?php
        //fin du code javascript
      }
    }else{
      ?>
          <script language="javascript">
          window.alert("Les mots de passe ne correspondent pas !!!")
          document.location.href="ajouter_client.php"
          </script>
        <?php
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
 
  <section class="col-md-12">
   <br><br>  
 
      <form class="form-login1" action="" method="POST">
        <h2 class="form-login-heading1">Veuillez vous inscrire !</h2>

        <div class="login-wrap">
        <div class="row">
         <div class="col-md-6">
          <label>Nom(s)</label>
          <input type="text" name="nom_client" class="form-control" placeholder="Le nom..." autofocus required>
          
          <label>Prénom(s)</label>
          <input type="text" class="form-control" placeholder="Le prénom..." name="prenom_client" placeholder="Le prénom..." required>

          <label>Date de naissance</label>
          <input type="date" class="form-control" placeholder="" autofocus name="naissance_client" placeholder="La date de naissance..." required>
          
          <label>Type d'identité</label>
          <select class="form-control form-select form-control-a" name="type_identite" required>
            <option>* Selectionner le type de la pièce *</option>
            <option value="Password">Passeport</option>
            <option value="CNI">CIN</option> 
          </select>

          <label>Numéro identité</label>
          <input type="text" class="form-control" name="numero_identite" placeholder="Le numéro d'identité" min="12" autofocus required>

          <label>Pays</label>
          <input type="text" class="form-control" name="pays_client" placeholder="Le pays de résidence" required>
        </div> 
        <div class="col-md-6">

          <label>Ville</label>
          <input type="text" class="form-control" name="ville_client" placeholder="La ville..." autofocus required>
          
          <label>Téléphone</label>
          <input type="tel" class="form-control" name="phone_client" placeholder="Numéro de téléphone..." required>

          <label>Email</label>
          <input type="email" class="form-control" name="email_client" placeholder="Ex. josue@immo.org" autofocus required>

          <label>Mot de passe</label>
          <input type="password" class="form-control" placeholder="Entrer un mot de passe de connexion..." name="password_client" required>

          <label>Confirmation</label>
          <input type="password" class="form-control" placeholder="Entrer un mot de passe de connexion..." name="conf_password" required>
        </div>
        
            <p> Vous avez deja un compte ? <span class="pull-right">
            <a  href=""> Connectez-vous !</a>
            </span></p>

          <button class="btn btn-theme" name="valide" href="" type="submit"><i class=""></i> Valider</button>  
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