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
                  <h2 align = 'center' style="margin-bottom:20px;">LISTE DES PERSONNELS</h2>
                  <div>
                    <h5>Recherche rapide par: id, nom et numéro identité</h5>
                
                    <form method="POST" action="">
                      <label for="search_param">
                        <i class=""></i>
                      </label>
                    <div style="margin-bottom:20px;"><input type="text" class="form-control" id="search_param" placeholder="Veuillez entrer votre recherche ici"/>
                    </div>
                    
                    <div>
                      <div class="row">
                        <div class="col-md-12 mx-1 shadow">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Table des données
                            
                          <span class="btn btn-success btn-xs">
                            <a href="ajouter_personnel.php" style="color: white;">Faire un ajout<i class="glyphicon glyphicon-plus" style="width: 30px; height: 20px; left: center;"></i></a>
                          </span>
                          </h3>
                        </div><br>
                        <table class="table table-striped table-advance table-hover">

                        <thead>
                          <tr>
                            <th><i class="fa fa-bullhorn"></i> Nom</th>
                            <th><i class="fa fa-bullhorn"></i> Prénoms</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Date de  naissance</th>
                            <th><i class="fa fa-bookmark"></i> Niveau</th>
                            <th><i class=" fa fa-edit"></i> Date embauche</th>
                            <th><i class=" fa fa-edit"></i> Type pièce</th>
                            <th><i class=" fa fa-edit"></i> Numéro pièce</th>
                            <th><i class=" fa fa-edit"></i> Téléphone</th>
                            <th><i class=" fa fa-edit"></i> ACTION</th>
                            <th></th>
                          </tr>                             
                        </thead>
                      
                        <tbody id="tbl_body">
                          <?php
                           include("../connexion.php");
                            $sql = "select * from personnels order by id_prs desc limit 20 ";

                            $query = mysqli_query($con,$sql); //Lancement de la requete

                            while ($res = mysqli_fetch_array($query)) { //Recuperer le resultat de la requete et de mettre dans un tableau
                          
                          ?>
                                        
                          <tr>               
                            <td>
                              <input type="hidden" value="<?php echo $res['nom'];?>" name="NOM[]"/><?php echo $res['nom']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['prenom'];?>" name="PRENOM[]"/><?php echo $res['prenom']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['naissance'];?>" name="NAISSANCE[]"/><?php echo $res['naissance']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['niveau'];?>" name="NIVEAU[]"/><?php echo $res['niveau']; ?></td>
                            <td>
                              <input type="hidden" value="<?php echo $res['date_embauche'];?>" name="DATE[]"/><?php echo $res['date_embauche']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['type_piece'];?>" name="TYPE[]"/><?php echo $res['type_piece']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['numero_piece'];?>" name="NUMERO[]"/><?php echo $res['numero_piece']; ?>
                            </td>
                            <td>
                              <input type="hidden" value="<?php echo $res['telephone'];?>" name="TELEPHONE[]"/><?php echo $res['telephone']; ?>
                            </td>
                            <td>
                              <!-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> -->  
                              <a data-toggle="modal" href="detail_personnel.php?id_prs=<?php echo $res['id_prs']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                              <a  data-toggle="modal" href="sup_personnel.php?id_prs=<?php echo $res['id_prs']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
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
