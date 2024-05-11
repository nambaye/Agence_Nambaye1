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
            <div class="row">
              <div class="col-md-3 mx-1 shadow" >
                <div class=" panel panel-primary" style="height: 130px;background: blue;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        include ( "../connexion.php" );
                        $sql1 = "SELECT count(*) as total FROM maison WHERE statut='En vente' " ;
                        $requete1=mysqli_query($con,$sql1) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res = mysqli_fetch_assoc($requete1);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res["total"]; ?></h5>
                        <h5 class="text-white" style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Maisons en vente</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: gray;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql2 = "SELECT count(*) as total1 FROM maison WHERE statut='En location' " ;
                        $requete2=mysqli_query($con,$sql2) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res1 = mysqli_fetch_assoc($requete2);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res1["total1"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Maisons en location</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: green;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql3 = "SELECT count(*) as total FROM terrain WHERE statut='En vente' " ;
                        $requete3=mysqli_query($con,$sql3) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res3 = mysqli_fetch_assoc($requete3);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res3["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Terrains en vente</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: red;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                         <?php
                        $sql4 = "SELECT count(*) as total FROM terrain WHERE statut='En location' " ;
                        $requete4=mysqli_query($con,$sql4) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res4 = mysqli_fetch_assoc($requete4);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res4["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Terrains en location</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      
              <div class="row">
              <div class="col-md-3 mx-1 shadow" >
                <div class=" panel panel-primary" style="height: 130px;background: blue;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        
                        $sql5 = "SELECT count(*) as total FROM voiture WHERE statut='En vente' " ;
                        $requete5=mysqli_query($con,$sql5) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res5 = mysqli_fetch_assoc($requete5);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res5["total"]; ?></h5>
                        <h5 class="text-white" style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Voitures en vente</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: gray;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql6 = "SELECT count(*) as total FROM voiture WHERE statut='En location'  " ;
                        $requete6=mysqli_query($con,$sql6) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res6 = mysqli_fetch_assoc($requete6);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res6["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Voitures en locations</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: green;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql7 = "SELECT count(*) as total FROM meuble WHERE statut='En vente'  " ;
                        $requete7=mysqli_query($con,$sql7) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res7 = mysqli_fetch_assoc($requete7);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res7["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Meubles en vente</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: red;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql8 = "SELECT count(*) as total FROM meuble WHERE statut='En location'  " ;
                        $requete8=mysqli_query($con,$sql8) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res8 = mysqli_fetch_assoc($requete8);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res8["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Meubles en location</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>

            <div class="row">
              <div class="col-md-3 mx-1 shadow" >
                <div class=" panel panel-primary" style="height: 130px;background: blue;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        
                        $sql9 = "SELECT count(*) as total FROM appartement WHERE statut='En vente' " ;
                        $requete9=mysqli_query($con,$sql9) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res9 = mysqli_fetch_assoc($requete9);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res9["total"]; ?></h5>
                        <h5 class="text-white" style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Appartements</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: gray;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql10 = "SELECT count(*) as total FROM hotels " ;
                        $requete10=mysqli_query($con,$sql10) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res10 = mysqli_fetch_assoc($requete10);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res10["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Hotel</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: green;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql11 = "SELECT count(*) as total FROM client " ;
                        $requete11=mysqli_query($con,$sql11) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res11 = mysqli_fetch_assoc($requete11);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res11["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Clients</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mx-1 shadow" style="height: 130px;">
                <div class=" panel panel-primary" style="height: 130px;background: red;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <?php
                        $sql12 = "SELECT count(*) as total FROM personnels " ;
                        $requete12=mysqli_query($con,$sql12) or die ("Erreur sql : $sql1<br/>".mysqli_error());
                        $res12 = mysqli_fetch_assoc($requete12);
                       
                        ?>
                        <h5 class="my-2 text-white" style="font-size: 30px;color: white;"><?php echo $res12["total"]; ?></h5>
                        <h5 class="text-white"style="color: white;">Total</h5>
                        <h5 class="text-white"style="color: white;">Personnels</h5>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
         </section>
       </section>

       

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-7 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Statistique des maisons</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>75</span></li>
                <li><span>65</span></li>
                <li><span>85</span></li>
                <li><span>25</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="100" data-toggle="tooltip" data-placement="top">100%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="75" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="65" data-toggle="tooltip" data-placement="top">65%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="85" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="25" data-toggle="tooltip" data-placement="top">25%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="62" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="75" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div></div>
            <div class="col-lg-5 main-chart">
              <!-- SERVER STATUS PANELS -->
              
                <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
              
            </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
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
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Bienvenu sur notre application!',
        // (string | mandatory) the text inside the notification
        text: 'Cette application a été developée dans le cadre d"informatiser le système hospitalier du centre THREE STRANDS.',
        // (string | optional) the image to display on the left
        image: '../img/js.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
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
//} 
?>
