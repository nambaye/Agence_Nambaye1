<?php 
session_start();

/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next);
}*/
if (isset($_REQUEST['ajouter'])) {
  if(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['naissance']) OR empty($_POST['quartier']) OR empty($_POST['ville']) OR empty($_POST['sexe']) OR empty($_POST['date_embauche']) OR empty($_POST['type_piece']) OR empty($_POST['num_piece']) OR empty($_POST['telephone']) OR empty($_POST['email']) OR empty($_POST['passwd']) OR empty($_POST['niveau']) OR empty($_POST['conf_passwd'])){

      //Code JavaScript
        ?>
        <script language="javascript">
            window.alert('Tous les champs doivent être completés !')
            document.location.href="ajouter_personnel.php"
        </script>
        <?php
        exit();

}else{
      //IMAGE INSERTION
      //declere veriable
      $nom = addslashes($_POST['nom']);
      $prenom = addslashes($_POST['prenom']);
      $naissance = addslashes($_POST['naissance']);
      $quartier = addslashes($_POST['quartier']);
      $ville = addslashes($_POST['ville']);
      $sexe = addslashes($_POST['sexe']);
      $date_embauche = addslashes($_POST['date_embauche']);
      $type_piece = addslashes($_POST['type_piece']);
      $num_piece = addslashes($_POST['num_piece']);
      $niveau = addslashes($_POST['niveau']);
      $telephone = addslashes($_POST['telephone']);
      $email = addslashes($_POST['email']);
      
      
      $imge= $_FILES['image']['name'];
      $temp_name = $_FILES['image']['tmp_name'];
      include('connexion.php');

      $sql3 = "select * from personnels where nom='$nom' and prenom='$prenom' and email='$email'";
      $query3 = mysqli_query($con,$sql3); //Lancement de la requete
      $tes= mysqli_num_rows($query3);
        if($tes!=0)
          {
            //Code JavaScript
            ?>
            <script language="javascript">
            window.alert("Le personnel existe !")
            document.location.href="ajouter_personnel.php"
            </script>
            <?php

          }
        else{

        $sql = "INSERT INTO `personnels` (`nom`, `prenom`, `naissance`, `sexe`, `niveau`, `date_embauche`, `quartier`, `ville`, `type_piece`, `numero_piece`, `telephone`, `email`, `image`) VALUES ('$nom', '$prenom', '$naissance', '$sexe', '$niveau', '$date_embauche', '$quartier', '$ville', '$type_piece', '$num_piece', '$telephone', '$email', '$imge') ";


         $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error());
         move_uploaded_file($temp_name,"../images/personnels/".$imge);
        
        if($res){ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Personnel ajouté avec succès !")
          document.location.href="gestion_personnel.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Insertion échouée !")
          document.location.href="ajouter_personnel.php"
          </script>
        <?php
        //fin du code javascript
      }
    
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
        <br> 
 
      <form class="form-login1" action="" method="POST" enctype="multipart/form-data">
       
       
        <h2 class="form-login-heading1">Ajouter un personnel !</h2>

        <div class="login-wrap">
        <div class="row">
         <div class="col-md-6">
           <label>Nom</label>
          <input type="text" class="form-control" placeholder="" autofocus name="nom">

          <label>Prénom</label>
          <input type="text" class="form-control" placeholder="" name="prenom">

          <label>Date de naissance</label>
          <input type="date" class="form-control" placeholder="" autofocus name="naissance">

          <label>Sexe</label>
          <select class="form-control form-select form-control-a" name="sexe">
            <option>* Selectionner le sexe *</option>
            <option value="Féminin">Féminin</option>
            <option value="Masculin">Masculin</option>
          </select>

          <label>Niveau</label>
          <select class="form-control form-select form-control-a" name="niveau">
            <option>* Selectionner l'accréditation *</option>
            <option value="Agent">Agent</option>
            <option value="Administrateur">Administrateur</option>
            <option value="Gestionnaire">Gestionnaire</option> 
          </select>
          
          <label>Date d'embauche</label>
          <input type="date" class="form-control" placeholder="" name="date_embauche">

           <label>Quartier</label>
          <input type="text" class="form-control" placeholder="" name="quartier">

          
         </div>
          
         <div class="col-md-6">
         <label>Ville</label>
          <input type="text" class="form-control" placeholder="" autofocus name="ville">

          <label>Type pièce</label>
          <select class="form-control form-select form-control-a" name="type_piece">
            <option>* Selectionner le type de pièce *</option>
            <option value="C.N.I">C.N.I</option>
            <option value="Permis de conduire">Permis de conduire</option>
            <option value="Autres">Autres</option>
          </select>

           <label>Numéro pièce</label>
          <input type="text" class="form-control" placeholder="" name="num_piece">

           <label>Téléphone</label>
          <input type="tel" class="form-control" placeholder="" name="telephone">

           <label>Email</label>
          <input type="email" class="form-control" placeholder="" name="email">

          <label>Image profil</label>
          <input type="file" class="form-control" placeholder="" name="image">
          <br>
        </div>  
      </div>
    </div>
     <div class="modal-footer centered">
        <button class="btn btn-theme" name="ajouter" type="submit"><i class=""></i> Ajouter</button> 
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
