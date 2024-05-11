<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Immo236</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
  

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
  </div>
  <!-- End Property Search Section -->


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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Construire</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="maison.php">Publier offre</a>
              <a class="dropdown-item " href="plan_maison.php">Découvrir nos plans</a>
            </div>
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

          $query = "SELECT * FROM slider";
          $slides = $con->query($query);
          $rows = $slides->num_rows;

          if($slides->num_rows>0){

            for ($i = 0; $i < $rows; $i++) {

              $hasClass = '';

              $res = ($i == 0) ? $hasClass = 'class="active"'  : $hasClass = '';
}
              $i = 0;

            while($row = $slides->fetch_assoc()){
                
              if($i == 0){
        ?>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?php echo "images/slider/".$row['image']; ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?php echo $row['ville']; ?>
                      <br> <?php echo $row['pays']; ?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <h3 class="color-b"></h3> <?php echo $row['description']; ?>
                      <br>  
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">S'inscrire</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        <?php
        }else{
        ?>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?php echo "images/slider/".$row['image']; ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?php echo $row['ville']; ?>
                      <br> <?php echo $row['pays']; ?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <h3 class="color-b"></h3> <?php echo $row['description']; ?>
                      <br>  
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="login.php"><span class="price-a">S'inscrire</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
             }
                $i++;
          
             

          }
        }
      
              ?>
     
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h1 class="title"><a href="services.php"><b>Nos services</b></a></h1>
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3" style="">
              <div class="card-header" style="text-align: center;">TRANSACTIONS IMMOBILIERES</div>
                <div class="card-body">
                    <p class="content-c">
                    Nous vous invitons à consulter nos offres pour trouver une maison ou une propriété en République centrafricaine.
                  </p>
                  <a href="transaction_immo.php" class="link-a">Lire plus ...</a>
                </div>
             </div> 
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3 center" style="">
              <div class="card-header" style="text-align: center;">GESTION LOCATIVE</div>
                <div class="card-body">
                    <p class="">
                    Votre investissement locatif durement acquis mérite d'être gérer de façon rigoureuse et sécurisée. 
                  </p><br>
                  
                  <a href="gestion_locative.php" class="link-a">Lire plus ...</a>
                </div>
             </div> 
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3" style="">
              <div class="card-header" style="text-align: center;">CONSEILS ET ACCOMPAGNEMENT</div>
                <div class="card-body">
                    <p class="content-c">
                    Nos experts immobiliers vous permettront d'accéder aux conseils et aux informations indispensables pour décider.
                  </p>
                  <a href="conseil.php" class="link-a">Lire plus ...</a>
                </div>
             </div> 
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3" style="">
              <div class="card-header" style="text-align: center;">INGENIERIE et CONSTRUCTIONS</div>
                <div class="card-body">
                    <p class="content-c">
                    Immo236 vous aide à bâtir votre projet.
                  </p><br><br>
                  <a href="ingenierie.php" class="link-a">Lire plus ...</a>
                </div>
             </div> 
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h1 class="title"><a href="property-grid.php"><b>LES MAISONS</b></a></h1>
                <hr>
              </div>
              <div class="title-link">
               <a href="maison.php" >voir plus<b class="bi bi-chevron-right"></b>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <?php
         

          $query = "SELECT * FROM maison where disponibilite='Libre' ";
          $slides = $con->query($query);
          $rows = $slides->num_rows;

          if($slides->num_rows>0){

            for ($i = 0; $i < $rows; $i++) {

              $hasClass = '';

              $res = ($i == 0) ? $hasClass = 'class="active"'  : $hasClass = '';
}
              $i = 0;

            while($row = $slides->fetch_assoc()){
                
              if($i == 0){
        ?>



      
             
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_maison/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_maison']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                         <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['quartier']; ?>, (<?php echo $row['ville']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_maison.php?id=<?php echo $row['id_maison']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>

             <?php
        }else{
        ?>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_maison/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_maison']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                        <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['quartier']; ?>, (<?php echo $row['ville']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_maison.php?id=<?php echo $row['id_maison']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>



            <?php
             }
                $i++;
          
             

          }
        }
      
              ?>


           
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h1 class="title"><a href="agents-grid.php"><b>LES TERRAINS</b></a></h1>
                <hr>
              </div>
              <div class="title-link">
                 <a href="terrain.php" >voir plus<b class="bi bi-chevron-right"></b>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <?php
         

          $query = "SELECT * FROM terrain where disponibilite='Libre' order by id_terrain desc LIMIT 6";
          $slides = $con->query($query);
          $rows = $slides->num_rows;

          if($slides->num_rows>0){

            for ($i = 0; $i < $rows; $i++) {

              $hasClass = '';

              $res = ($i == 0) ? $hasClass = 'class="active"'  : $hasClass = '';
}
              $i = 0;

            while($row = $slides->fetch_assoc()){
                
              if($i == 0){
        ?>



         
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_terrain/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_terrain']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                         <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['quartier']; ?>, (<?php echo $row['ville']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_terrain.php?id=<?php echo $row['id_terrain']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>

             <?php
        }else{
        ?>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_terrain/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_terrain']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                         <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['quartier']; ?>, (<?php echo $row['ville']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_terrain.php?id=<?php echo $row['id_terrain']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>



            <?php
             }
                $i++;
          
     

          }
        }
      
              ?>


           
          </div>
        </div>
      </div>
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h1 class="title"><b>LES VOITURES</b></h1>
                <hr>
              </div>
              <div class="title-link">
                 <a href="voiture.php" >voir plus<b class="bi bi-chevron-right"></b>
                </a>
              </div>
            </div>
          </div>
        </div>

        
        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <?php
         

          $query = "SELECT * FROM voiture where disponibilite='Libre' order by id_voiture desc LIMIT 6";
          $slides = $con->query($query);
          $rows = $slides->num_rows;

          if($slides->num_rows>0){

            for ($i = 0; $i < $rows; $i++) {

              $hasClass = '';

              $res = ($i == 0) ? $hasClass = 'class="active"'  : $hasClass = '';
}
              $i = 0;

            while($row = $slides->fetch_assoc()){
                
              if($i == 0){
        ?>



         
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_voiture/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_voiture']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                         <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['model']; ?>, (<?php echo $row['marque']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_voiture.php?id=<?php echo $row['id_voiture']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>

             <?php
        }else{
        ?>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "images/image_voiture/".$row['img1']; ?>" class="img-fluid" alt="Card image cap">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-8">
                        <a href="detail_maison.php?id=<?php echo $row['id_voiture']; ?>" class="card-text"><?php echo $row['description']; ?></a><br>
                         <p class="btn btn-sm btn-secondary">Quartier :<?php echo $row['model']; ?>, (<?php echo $row['marque']; ?>)</p>
                      </div>
                      <div class="col-md-4">
                        <p class="btn btn-sm btn-secondary"><?php echo $row['statut']; ?></p>
                        <p class="btn btn-sm btn-secondary"><?php echo $row['prix']; ?></p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      <small class="text-muted"><a href="detail_voiture.php?id=<?php echo $row['id_voiture']; ?>" class="btn btn-sm btn-outline-secondary">Cliquez pour voir</a></small>
                    </div>
                  </div>
              </div><!-- End carousel item -->
          </div>



            <?php
             }
                $i++;
          
             

          }
        }
      
              ?>


           
          </div>
        </div>
      </div>
    </section><!-- End Agents Section -->



    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h3 class="title"><b>Les témoignages</b></h3>
                <hr>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-2">
                    
                  </div>
                  <div class="col-sm-12 col-md-8">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                       Cela a été une meilleure expérience pour moi de confier mon projet de construction à l'agence IMMO236. De la conception à la réalisation de mes idées, ils ont réussi à tout faire et j'admire beaucoup leur bon sens de travail et leur collaboraton.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="img/1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pétunia Onège</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-2">
                    
                  </div>
                  <div class="col-sm-12 col-md-8">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        En une fraction de seconde j'ai eu à trouver une maison en location et en plus à bas prix et dans un meilleur quartier de la ville. Je n'ai pas regretter ma décision, celle de faire recours à IMMO 236 pour me trouver une maison qui convient à mes attentes. Merci beaucoup IMMO 236 !
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="img/2.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Josué Frankys</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

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
               <b>IMMOBILIER 236</b> est un projet immobilier mis en place par <b> l'Entreprise Centrafrique Construction Moderne Building (CCMB) basé à Bangui (République centrafricaine) </b>. Spécialisé dans la location et la vente des maisons et terrains, <b> IMMO-236 </b> met aussi à votre disposition la location et vente de voitures et tout son expertise pour l'évaluation de vos biens immobiliers.
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