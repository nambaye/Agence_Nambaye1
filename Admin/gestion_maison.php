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
session_start();

/*if(!isset($_SESSION['umail'])){
  $next=get_url();
  header('location:login.php?n='.$next);
}*/
/*

if (isset($_POST['ajouter'])) {
  if(empty($_POST['description']) OR empty($_POST['statut']) OR empty($_POST['type_bien']) OR empty($_POST['dimension']) OR empty($_POST['quartier']) OR empty($_POST['nbreChambre']) OR empty($_POST['nbreSalon']) OR empty($_POST['nbreDoucheInterne']) OR empty($_POST['nbreDoucheExterne']) OR empty($_POST['nbre_lit']) OR empty($_POST['ville']) OR empty($_POST['prix']) OR empty($_POST['garage']) OR empty($_POST['disponilite']))
    {
      
      //Code JavaScript
        ?>
        <script language="javascript">
            window.alert('Tous les champs doivent être completés !')
            document.location.href="gestion_maison.php"
        </script>
        <?php
        exit();

}else{

      include('../connexion.php');      
      //IMAGE INSERTION
      //declaration des variables
      $des = addslashes($_POST['description']);
      $statut = addslashes($_POST['statut']);
      $type_bien = addslashes($_POST['type_bien']);
      $dimension = addslashes($_POST['dimension']);
      $quartier = addslashes($_POST['quartier']);
      $nbreChambre = addslashes($_POST['nbreChambre']);
      $nbreSalon = addslashes($_POST['nbreSalon']);
      $nbreDoucheInterne = addslashes($_POST['nbreDoucheInterne']);
      $nbreDoucheExterne = addslashes($_POST['nbreDoucheExterne']);
      $nbre_lit = addslashes($_POST['nbre_lit']);
      $ville = addslashes($_POST['ville']);
      $prix = addslashes($_POST['prix']);
      $garage = addslashes($_POST['garage']);
      $disponilite = addslashes($_POST['disponilite']);
      
      $image1= $_FILES['image1']['name'];
      $temp_name1 = $_FILES['image1']['tmp_name'];

      $image2= $_FILES['image2']['name'];
      $temp_name2 = $_FILES['image2']['tmp_name'];

      $image3= $_FILES['image3']['name'];
      $temp_name3 = $_FILES['image3']['tmp_name'];

      $image4= $_FILES['image4']['name'];
      $temp_name4 = $_FILES['image4']['tmp_name'];

      $sql = "INSERT INTO `maison` (`id_maison`, `description`, `statut`, `type_bien`, `dimension`, `quartier`, `nbre_chambre`, `nbre_salon`, `douche_interne`, `douche_externe`, `nbre_lit`, `ville`, `prix`, `garage`, `disponibilite`, `img1`, `img2`, `img3`, `img4`) VALUES (null, '$des', '$statut','$type_bien', '$dimension', '$quartier', '$nbreChambre', '$nbreSalon', '$nbreDoucheInterne', '$nbreDoucheExterne','$nbre_lit', '$ville', '$prix', '$garage', '$disponilite', '$image1', '$image2', '$image3', '$image4') " ;

      $res = $con->query($sql) or die ("Erreur sql : $sql<br/>".mysqli_error());
      move_uploaded_file($temp_name1,"../images/image_maison/".$imag1);
      move_uploaded_file($temp_name2,"../images/image_maison/".$imag2);
      move_uploaded_file($temp_name3,"../images/image_maison/".$imag3);
      move_uploaded_file($temp_name4,"../images/image_maison/".$imag4);

      if($res){ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Maison publiée avec succès !")
          document.location.href="gestion_maison.php"
          </script>
        <?php
        //fin du code javascript
      }else{ 
        //Code JavaScript
        ?>
          <script language="javascript">
          window.alert("Publication échouée !")
          document.location.href="gestion_maison.php"
          </script>
        <?php
        //fin du code javascript
      }
    
    }
}
   */ 
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
      
        <section id="main-content">
            <section class="wrapper">
                <div id="GFG" style="">
                  <h2 align = 'center' style="margin-bottom:20px;">LISTE DES MAISONS, APPARTEMENT ET STUDIO</h2>
                  <div>
                    <h5>Recherche rapide par: id, quartier, ville et prix</h5>
                
                    <form method="POST" action="">
                      <label for="search_param">
                        <i class=""></i>
                      </label>
                    <div style="margin-bottom:20px;"><input type="text" class="form-control" id="search_param" placeholder="Veuillez entrer votre recherche ici"/>
                    </div>
                   </form>
                    <div>
                      <div class="row">
                        <div class="col-md-12 mx-1 shadow">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Table des données
                            <span class="btn btn-primary btn-xs">
                            <a href="gestion_ppc.php" style="color: white;">ESPACE PPC<i class="glyphicon glyphicon-plus" style="width: 30px; height: 20px; left: center;"></i></a>
                          </span>
                          <span class="btn btn-success btn-xs">
                            <a href="ajouter_maison.php" style="color: white;">Ajouter une maison<i class="glyphicon glyphicon-plus" style="width: 30px; height: 20px; left: center;"></i></a>
                          </span>
                          <span class="btn btn-danger btn-xs">
                            <a href="maison_archiver.php" style="color: white;">Maisons archivées<i class="glyphicon glyphicon-plus" style="width: 30px; height: 20px; left: center;"></i></a>
                          </span>
                          </h3>
                        </div><br>
                        <table class="table table-striped table-advance table-hover">

                        <thead>
                          <tr>
                            <th><i class="fa fa-bullhorn"></i> Description</th>
                            <th><i class="fa fa-bullhorn"></i> Type de bien</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Statut</th>
                            <th><i class="fa fa-bookmark"></i> Dimension</th>
                            <th><i class=" fa fa-edit"></i> Quartier</th>
                            <th><i class=" fa fa-edit"></i> Ville</th>
                            <th><i class=" fa fa-edit"></i> Prix</th>
                            <th><i class=" fa fa-edit"></i> Disponibilité</th>
                            <th><i class=" fa fa-edit"></i> ACTION</th>
                            <th></th>
                          </tr>                             
                        </thead>
                      
                        <tbody id="tbl_body">
                          <?php
                           include("../connexion.php");
                            $sql = "select * from maison where disponibilite='Libre' order by id_maison desc limit 100 ";

                            $query = mysqli_query($con,$sql); //Lancement de la requete

                            while ($res = mysqli_fetch_array($query)) { //Recuperer le resultat de la requete et de mettre dans un tableau
                          
                          ?>
                                        
                          <tr>               
                            <td>
                              <input type="hidden" value="<?php echo $res['description'];?>" name="DES[]"/><?php echo $res['description']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['type_bien'];?>" name="TYPE[]"/><?php echo $res['type_bien']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['statut'];?>" name="STATUT[]"/><?php echo $res['statut']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['dimension'];?>" name="DIMENSION[]"/><?php echo $res['dimension']; ?></td>
                            <td>
                              <input type="hidden" value="<?php echo $res['quartier'];?>" name="QUARTIER[]"/><?php echo $res['quartier']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['ville'];?>" name="VILLE[]"/><?php echo $res['ville']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['prix'];?>" name="PRIX[]"/><?php echo $res['prix']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['disponibilite'];?>" name="DISPONIBILITE[]"/><?php echo $res['disponibilite']; ?>
                            </td>
                            <td>
                              <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->  
                              <a data-toggle="modal" href="detail_maison_admin.php?id_maison=<?php echo $res['id_maison']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                              <a  data-toggle="modal" href="sup_maison.php?id_maison=<?php echo $res['id_maison']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>

                          <?php }  ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            </section>
        </section>


       

    <!--main content start-->

    <form class="form-login1" method="POST" enctype="multipart/form-data" >
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title centered">Ajouter une maison</h4>
            </div>

            
             <div class="login-wrap">
                           
                  <div class="row">
  
                   <div class="col-md-6">
                    <label>Description de la maison</label>
                      <textarea type="text" class="form-control" name="description"></textarea>

                    <label>Statut de la maison</label>
                    <select class="form-control form-select form-control-a" name="statut">
                      <option>En vente</option>
                      <option>En location</option> 
                    </select>

                    <label>Dimension de la maison</label>
                      <input type="text" class="form-control" name="dimension" >

                    <label>Quartier</label>
                      <input type="text" class="form-control" name="quartier">

                    <label>Nombre de chambre</label>
                     <input type="text" class="form-control" name="nbreChambre">
                    
                    <label>Nombre de salon</label>
                      <input type="text" class="form-control" name="nbreSalon">
                    
                    <label>Nombre douche interne</label>
                      <input type="text" class="form-control" name="nbreDoucheInterne">

                    <label>Nombre douche externe</label>
                      <input type="text" class="form-control" name="nbreDoucheExterne">
                      <br>
                  </div>
                    
                  <div class="col-md-6">
                    <label>Ville</label>
                      <input type="text" class="form-control" name="ville">

                    <label>Prix de la maison</label>
                      <input type="text" class="form-control" name="prix">

                    <label>Y'a-t-il un garage ?</label>
                    <select class="form-control form-select form-control-a" name="garage">
                      <option>Oui</option>
                      <option>Non</option> 
                    </select>

                    <label>Disponibilité</label>
                    <select class="form-control form-select form-control-a" name="disponilite">
                      <option>Libre</option>
                      <option>Occupée</option> 
                    </select>

                    <label>Image 1</label>
                    <input type="file" class="form-control" id="image1">

                    <label>Image 2</label>
                    <input type="file" class="form-control" id="image2">

                    <label>Image 3</label>
                    <input type="file"  class="form-control" id="image3">

                    <label>Image 4</label>
                    <input type="file" class="form-control" id="image4">
                  </div>
                   
                </div>
                <div class="modal-footer centered">
                  <button class="btn btn-theme" name="ajouter" type="submit"><i class=""></i> Ajouter</button> 
                </div>
                
              </div>
              
           
                    
        </div>
      </div>
    </div>
  </form> 
        

    <!--main content end-->


    <!--footer start-->
    <!--
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Josué Frankys NAMBAYE</strong>. Tous droits réservés !
        </p>
        <div class="credits">
          
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          
          Créer pour la bonne gestion du centre Three Strands <a href="https://templatemag.com/">Template Ici</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> -->
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
<script src="../jsac/jquery.min.js"></script>
        <script>
            $(document).on("keyup", "#search_param", function () {
                var search_param = $("#search_param").val();
                $.ajax({
                    url: 'getDataMaison.php',
                    type: 'POST',
                    data: {search_param: search_param},
                    success: function (data) {
                        $("#tbl_body").html(data);
                    }
                });
            });
        </script>
</html>
<?php
//} 
?>
