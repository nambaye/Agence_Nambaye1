<!DOCTYPE html>
<html lang="fr">

<head>  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agence immobilière</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
      <h3 class="title-d">Recherchez</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Mot clé</label>
              <input type="text" class="form-control" placeholder="Maison,terrain,voiture,hotel,appartement,...">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type" >
                <option>*Sélectionnez type*</option>
                <option>Pour location</option>
                <option>Pour vente</option>
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
            <a class="nav-link " href="service.php">Nos services</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Découvrir</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="maison.php">Maisons</a>
              <a class="dropdown-item " href="terrain.php">Terrains</a>
              <a class="dropdown-item " href="hotel.php">Hotels</a>
              <a class="dropdown-item " href="appartement.php">Appartements</a>
              <a class="dropdown-item " href="voiture.php">Voitures</a>
              <a class="dropdown-item " href="autre.php">Autres</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Construire</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">Blogs</a>
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
  </nav><!-- End Header/Navbar -->



<?php

    include('connexion.php');

    $id = $_GET["id"] ;
    $sql = "SELECT * FROM meuble WHERE id_meuble = ".$id ;
    $rsql=mysqli_query($con, $sql)or die("Erreur sql : $sql<br/>".mysqli_error($con));

    if($row=mysqli_fetch_array($rsql)){

    ?>

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Meuble <?php echo $row['statut']; ?></h1>
              <span class="color-text-a"><?php echo $row['type_meuble']; ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid.php">Les meubles</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
  	<section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "images/image_meuble/".$row['img1']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid">
                </div>
          </div>
        
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "images/image_meuble/".$row['img2']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
                </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "images/image_meuble/".$row['img3']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
                </div>
          </div>
          
          <div class="col-md-6">
             <div class="">
              <img src="<?php echo "images/image_meuble/".$row['img4']; ?>" width="100%" height="100%" alt="" class="img-d img-fluid" >
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
                       <b>Voiture <?php echo $row['statut']; ?> </b>
                      <h4 class="bi bi-cash"> <b><?php echo $row['prix']; ?></b></h4>
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
                        <strong>Statut du meuble :</strong>
                        <span><b><?php echo $row['statut']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Type du meuble :</strong>
                        <span><b><?php echo $row['type_meuble']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Capacité :</strong>
                        <span><b><?php echo $row['capacite']; ?></b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Disponibilité :</strong>
                        <span><b><?php echo $row['disponibilite']; ?></b></b></span>
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
                  <ul class="list">
                    <li>Nombre place :
                      <span><b><?php  ?></b></span>
                    </li>
                    <li>Taille :
                      <span><b><?php  ?></b></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>  

          
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contactez nous</h3>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 col-lg-4">
               <h6 class="title"><b>En recommandant cette maison</b></h6>
               <hr>

                <a href="https://wa.me/+237686430834? text= ID Meuble<?php echo $row['id_meuble']; ?>; <?php echo $row['description']; ?> <?php echo $row['img1']; ?> Prix meuble : <?php echo $row['prix']; ?>  Bonjour, je m'interesse à ce meuble. Je souhaite avoir plus d'information. Merci" class="bi bi-whatsapp btn btn-success"> Whatsapp</a>               

              </div>

              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                   <h6 class="title"><b>En contactant un des agents</b></h6>
               <hr>
                  <h7 class="title"><b>Josué NAMBAYE</b></h7>
                  <p class="color-text-a">
                    Josué Frankys NAMBAYE est notre principal agent, il a vendu plus de 150 maisons et suis actuellement beaucoup de maisons dans la ville de Bangui et dans les provinces. Faites lui confiance pour la suivie de vos biens.
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Fix:</strong>
                      <span class="color-text-a">(+236) 70 55 42 68</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>WhatSapp:</strong>
                      <span class="color-text-a">(+236) 72 28 18 73</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">josuenambayefr@gmail.com</span>
                    </li>
                  </ul>
                </div>
              </div>



              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <h6 class="title"><b>En nous envoyant un message</b></h6>
                        <hr>
                        <div class="form-group">
                          <input type="text" class="form-control " name="inputName" placeholder="Name *">
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control" name="inputEmail1" placeholder="Tel *">
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control" name="inputEmail1" placeholder="Email *">
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea name="textMessage" class="form-control" placeholder="Commentaire *" name="message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->
<?php } ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Immo236</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
               <b>IMMOBILIER 236</b> est une société immobilière centrafricaine créée par <b>Josué Frankys NAMBAYE</b> en 2024. Spécialisée dans la location et la vente des maisons et terrains, IMMO236 met aussi à votre disposition la location et vente de voitures et tout son expertise pour l'évaluation de vos biens immobiliers.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Contact :</span> 72.28.18.73 / 70.55.42.68
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email :</span> immo236rca@gmail.org
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Nos Services en bref</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Sites des provinces</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Bangui</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Boali</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Bimbo</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Berberati</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Bambari</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Acceil</a>
              </li>
              <li class="list-inline-item">
                <a href="#">A propos</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Propiétés</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Immo236</span> tous droits réservés.
            </p>
          </div>
         
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

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