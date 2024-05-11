<?php
/*session_start();

if (!isset($_SESSION['id'])) {
  header('Location: ../index.php');
  exit();
}

  $bdd = new PDO('mysql:host=127.0.0.1;dbname=gestion_patient', 'josue', 'JosueLinux@12345');

  if(isset($_GET['id']) AND $_GET['id'] > 0)
  {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM admin WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
*/
?>

<?php
include('../connexion.php');
if(isset($_POST['modic'])){
$id=$_POST ["idm"] ;
$des = addslashes($_POST['description']);
$cuisine = addslashes($_POST['cuisine_interne']);
$dimension = addslashes($_POST['dimension']);
$salle_manger = addslashes($_POST['salle_manger']);
$chambre = addslashes($_POST['chambre']);
$salon = addslashes($_POST['salon']);
$douche_interne = addslashes($_POST['douche_interne']);
$delai = addslashes($_POST['delai_construction']);
$prix = addslashes($_POST['prix_devis']);
$garage = addslashes($_POST['garage']);


//$pay = $_POST['paye'];


  $sql11 ="UPDATE ppc SET description='$des',dimension='$dimension',chambre='$chambre',salon='$salon',douche_interne='$douche_interne',garage='$garage',cuisine_interne='$cuisine',salle_manger='$salle_manger',delai_construction='$delai',prix_devis='$prix' where id='$id'";
  
  $requete11=mysqli_query($con,$sql11) or die ("Erreur sql : $sql11<br/>".mysqli_error());

  if($requete11){
    //Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Mise à jour avec succès !")
      document.location.href="detail_ppc_admin.php?id="<?php echo $id;  ?>
      </script>
    <?php
    //fin du code javascript
  }
else
{
  //Code JavaScript
    ?>
      <script language="javascript">
      window.alert("Erreur mise à jour !")
      document.location.href="detail_ppc_admin.php"
      </script>
    <?php
    //fin du code javascript
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
<link href="assets/css/style.css" rel="stylesheet">

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
      
       
   <?php

    $id1 = $_GET["id"] ;
    $sql = "SELECT * FROM ppc WHERE id = ".$id1 ;
    $rsql=mysqli_query($con, $sql)or die("Erreur sql : $sql<br/>".mysqli_error($con));

    if($row=mysqli_fetch_array($rsql)){

    ?>


 <section id="main-content">
   <section class="wrapper">

    <!-- ======= Intro Single ======= -->
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Plan maison N° <?php echo $row['id']; ?></h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="plan_maison.php">Les plans</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
   

    <!-- ======= Property Single ======= -->
  
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "../images/image_ppc/".$row['img1']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid">
                </div>
          </div>
        
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "../images/image_ppc/".$row['img2']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
                </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "../images/image_ppc/".$row['img3']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
                </div>
          </div>
          
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "../images/image_ppc/".$row['img4']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
                </div>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                       <b>Prix estimatif </b>
                      <h4 class="bi bi-cash"> <b><?php echo $row['prix_devis']; ?></b></h4>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h4 class="title-d">Les détails</h4>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Dimension de la maison :</strong>
                        <span><b><?php echo $row['dimension']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Nombre chambre :</strong>
                        <span><b><?php echo $row['nbre_chambre']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Nombre salon :</strong>
                        <span><b><?php echo $row['nbre_salon']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Nombre douche interne :</strong>
                        <span><b><?php echo $row['douche_interne']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>délai de construction :</strong>
                        <span><b><?php echo $row['quartier']; ?></b></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h4 class="title-d">Description</h4>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    <b><?php echo $row['description']; ?> </b>
                  </p>
                </div>



                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h4 class="title-d">Autres</h4>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Douche interne : 
                      <span><b><?php echo $row['douche_interne']; ?></b></span>
                    </li>
                    <li>Y'a t-il une cuisine interne ? : 
                      <span><b><?php echo $row['cuisine']; ?></b></span>
                    </li>
                    <li>Y'a t-il une salle à manger ?  : 
                      <span><b><?php echo $row['salle_manger']; ?></b></span>
                    </li>
                    <li>Garage ? : 
                      <span><b><?php echo $row['garage']; ?></b></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>  


          <button onclick="printDiv()" class="btn btn-success">Imprimer l'annonce</button>

          <a data-toggle="modal" href="#myModal" class="btn btn-success">Faire une modification</a>

          <a href="archivage.php" class="btn btn-success">Archiver</a>
          

      </section> 
    </section>
       
    <!--modele de modification-->

     <?php
        //include('../connexion.php');
        $id1=$_GET['id'];       
        $sql1 = "SELECT * FROM ppc WHERE id= ".$id1;
        $query1 = mysqli_query($con,$sql1); //Lancement de la requete
        while ($res1 = mysqli_fetch_array($query1)) { //Recuperer le resultat de la requete et de mettre dans un tableau
      ?>

      <form action="" method="POST" class="registration">
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title centered">Modification des informations sur un plan</h4>
              </div>
              <div class="modal-body">
                <div class="login-wrap">
                  <div class="row">
                   <div class="col-md-6">
                     <input type="text" hidden name="idm" value="<?php echo $res1['id']; ?>">
                    <label>Description</label>
                      <textarea type="text" class="form-control" name="description" ><?php echo $res1["description"]; ?></textarea>

                   
                    <label>Dimension</label>
                      <input type="text" class="form-control" name="dimension" value=" <?php echo $res1["dimension"]; ?>">

                    <label>Nombre de chambre</label>
                      <input type="text" class="form-control" name="chambre" value=" <?php echo $res1["chambre"]; ?>">

                    <label>Nombre de salon</label>
                      <input type="text" class="form-control" name="salon" value=" <?php echo $res1["salon"]; ?>">
                    
                    <label>Nombre de douche interne</label>
                      <input type="text" class="form-control" name="douche_interne" value=" <?php echo $res1["douche_interne"]; ?>">
                    
                    <label>Y'a t-il un garage ?</label>
                      <input type="text" class="form-control" name="garage" value=" <?php echo $res1["garage"]; ?>">

                    <label>Cuisine interne</label>
                     <input type="text" class="form-control" name="cuisine_interne" value=" <?php echo $res1["cuisine_interne"]; ?>">
                    <br>
                  </div>
                    
                  <div class="col-md-6">
                    <label>Salle à manger</label>
                      <input type="text" class="form-control" name="salle_manger" value=" <?php echo $res1["salle_manger"]; ?>">

                    <label>Delai de construction</label>
                      <input type="text" class="form-control" name="delai_construction" value=" <?php echo $res1["delai_construction"]; ?>">

                    <label>Prix du devis</label>
                      <input type="text" class="form-control" name="prix_devis" value=" <?php echo $res1["prix_devis"]; ?>">

                    <label>Image 1</label>
                      <input type="file" class="form-control" name="image1" value=" <?php echo $res1["img1"]; ?>">

                    <label>Image 2</label>
                      <input type="file" class="form-control" name="image2">

                    <label>Image 3</label>
                      <input type="file" class="form-control" name="image3">

                    <label>Image 4</label>
                      <input type="file" class="form-control" name="image4">
                  </div>
                </div>
                <div class="modal-footer centered">
                  <button class="btn btn-theme" name="modic" type="submit"><i class=""></i> Valider</button> 
                </div>        
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    <!--fin modele modification-->

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Josué Frankys NAMBAYE</strong>. Tous droits réservés !
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Créer pour la bonne gestion du centre Three Strands <a href="https://templatemag.com/">Template Ici</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
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
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
<?php
} }
?>
