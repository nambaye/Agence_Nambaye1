<?php
session_start();

/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next); 
}*/
if (isset($_REQUEST['ajouter'])) {
  if(empty($_POST['description']) OR empty($_POST['statut']) OR empty($_POST['model']) OR empty($_POST['marque']) OR empty($_POST['transmission']) OR empty($_POST['reservoir']) OR empty($_POST['capacite_moteur']) OR empty($_POST['nbre_place']) OR empty($_POST['nbre_pneus']) OR empty($_POST['taille_boite']) OR empty($_POST['disponibilite']) OR empty($_POST['prix'])){

      //Code JavaScript
        ?>
        <script language="javascript">
            window.alert('Tous les champs doivent être completés !')
            document.location.href="ajouter_voiture.php"
        </script>
        <?php
        exit();

}else{
      //IMAGE INSERTION
      //declere veriable
      $des = addslashes($_POST['description']);
      $statut = addslashes($_POST['statut']);
      $model = addslashes($_POST['model']);
      $marque = addslashes($_POST['marque']);
      $transmission = addslashes($_POST['transmission']);
      $reservoir = addslashes($_POST['reservoir']);
      $capacite_moteur = addslashes($_POST['capacite_moteur']);
      $nbre_place = addslashes($_POST['nbre_place']);
      $nbre_pneus = addslashes($_POST['nbre_pneus']);
      $taille_boite = addslashes($_POST['taille_boite']);
      $disponibilite = addslashes($_POST['disponibilite']);
      $prix = addslashes($_POST['prix']);
      
      $imge1= $_FILES['image1']['name'];
      $temp_name1 = $_FILES['image1']['tmp_name'];

      $imge2= $_FILES['image2']['name'];
      $temp_name2 = $_FILES['image2']['tmp_name'];

      $imge3= $_FILES['image3']['name'];
      $temp_name3 = $_FILES['image3']['tmp_name'];

      $imge4= $_FILES['image4']['name'];
      $temp_name4 = $_FILES['image4']['tmp_name'];

      include('connexion.php');

      $sql = "INSERT INTO `voiture` (`description`, `statut`, `model`, `marque`, `transmission`, `reservoir`, `capacite_moteur`, `nbre_place`, `nbre_pneus`, `taille_boite`, `disponibilite`,`prix`, `img1`, `img2`, `img3`, `img4`) VALUES ('$des', '$statut', '$model', '$marque', '$transmission', '$reservoir', '$capacite_moteur', '$nbre_place', '$nbre_pneus', '$taille_boite', '$disponibilite','$prix', '$imge1', '$imge2', '$imge3', '$imge4') " ;

      $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error());
      move_uploaded_file($temp_name1,"../images/image_voiture/".$imge1);
      move_uploaded_file($temp_name2,"../images/image_voiture/".$imge2);
      move_uploaded_file($temp_name3,"../images/image_voiture/".$imge3);
      move_uploaded_file($temp_name4,"../images/image_voiture/".$imge4);

      if($res){ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Voiture publiée avec succès !")
          document.location.href="ajouter_voiture.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Publication échouée !")
          document.location.href="ajouter_voiture.php"
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Immo236</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="Accueil_Admin.php" class="logo"><b>AGENCE <span>IMMO236</span></b></a>
      <!--logo end-->
      
     <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a><h4 style="color: white;">Bienvenu sur votre espace de travail : Josué Frankys<?php //echo '<font color="green">'.$userinfo['firstName']. "</font>"; ?></h4> </a></li> 
          
          <li><a href="profile.php"><img src="../img/2.jpg<?php //echo $userinfo['photo'];?>" class="img-circle" class="img-circle" width="50"></a></li> 
          
          <li><a class="logout" href="logout.php">logout</a></li>

        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <li class="mt">
            <a href="accueil_admin.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-dashboard"></i>
              <span>Accueil Admin</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_maison.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion des maisons</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="gestion_hotel.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion des hôtels</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_terrain.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion des terrains</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_voiture.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion des voitures</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_meuble.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion des meubles</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_personnel.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Gestion personnels</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="gestion_utilisateur.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-tasks"></i>
              <span>Utilisateurs</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="repertoire.php?id=<?php //echo $_SESSION['id']; ?>">
              <i class="fa fa-book"></i>
              <span>Repertoire de Connexion</span>
              </a>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <br> <br>
 
      <form class="form-login1" action="" method="POST" enctype="multipart/form-data">
        <h2 class="form-login-heading1">Ajouter une voiture !</h2>

        <div class="login-wrap">
        <div class="row">
         <div class="col-md-6">
          <label>Description de la voiture</label>
          <textarea type="text" class="form-control" placeholder="La description du véhicule" autofocus name="description"></textarea>

          <label>Statut</label>
          <select class="form-control form-select form-control-a" name="statut">
            <option>* Selectioinner le statut *</option>
            <option value="En vente">En vente</option>
            <option value="En location">En location</option> 
          </select>

          <label>Modele de la voiture</label>
          <input type="text" class="form-control" placeholder="" name="model">

          <label>Marque de la voiture</label>
          <input type="text" class="form-control" placeholder="" autofocus name="marque">

          <label>Transmission</label>
          <input type="text" class="form-control" placeholder="" autofocus name="transmission">
          
          <label>Capacité reservoir (en L)</label>
          <input type="number" min="20" class="form-control" placeholder="" name="reservoir">
          
          <label>Capacité moteur</label>
          <input type="text" class="form-control" placeholder="" name="capacite_moteur">

          <label>Nombre de place</label>
          <input type="number" min=2 class="form-control" placeholder="" name="nbre_place">
          <br>
        </div>
          
        <div class="col-md-6">
          <label>Nombre de pneus</label>
          <input type="number" min="5" class="form-control" placeholder="" name="nbre_pneus">

          <label>Taille de la boite</label>
          <input type="text" class="form-control" placeholder="" name="taille_boite">

          <label>Disponibilité</label>
          <select class="form-control form-select form-control-a" name="disponibilite">
            <option>* Selectionner la disponibilité *</option>
            <option value="Libre">Libre</option>
            <option value="Occupée">Occupée</option> 
          </select>

          <label>Prix de la voiture</label>
          <input type="text" class="form-control" placeholder="" name="prix">

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
          </div>
          <div class="modal-footer centered">
            <button class="btn btn-theme" name="ajouter" type="submit"><i class=""></i> Ajouter</button> 
          </div>
        </div>
      </form>
   
  </section>
       
 <br>

       

    <!--main content start-->

    <!--main content end-->
    <!--footer start-->
    
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  
  
</body>

</html>
<?php
//} 
?>
