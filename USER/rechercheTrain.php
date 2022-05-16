<!doctype html>
<?php
     include("navig1.php");
      include('traitement_sql.php');
      $dao= new DAO();
      $list=$dao->AfficherHist();
      if(empty($list)){
          header("location:index.php?id=Liste Vide");
      }

?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <!-- Preloader Start -->
   

      <div class="form-row" style="margin-left: 100px;">
           <div class="form-group col-md-2"></div>
            <div class="form-group col-md-6">
              <div class="container"><h2 style="text-align: center; margin-top: 170px; margin-bottom:90px; ">Rechercher sur un Train</h2>
                  <form method="POST" action="recherche.php" enctype="multipart/form-data" >
                     <div class="form-group"></div>
                        <div class="form-row">
                             
                              <div class="form-group col-md-6">
                                <label>Matricule </label>
                                <input type="text" class="form-control" name="Matricule"  placeholder="Matricule">
                              </div>
                              <div  class="form-group col-md-6">
                                <label>DATE</label>
                                <input type="text" class="form-control" name="Date" placeholder="Date">
                              </div>
                        </div>
                         <div class="form-row">
                                 <?php 
                                    if(isset($_GET['id'])){
                                      if ($_GET['id']==1) {
                                     ?>       
                                        <span style="color: red;">
                                          Remplisez les champs vides !!
                                        </span>
                                <?php }else{ ?>
                                           <span style="color: red;">
                                               Il N'EXISTE AUCCUN RETURN !!
                                            </span>
                               <?php  } 
                                    } echo"<br>"?>
                          </div>
                          <div class="form-row">
                                 <div class="form-group col-lg-2 col-md-2"></div>
                                  <div class="form-group col-lg-5 col-md-6 ">
                                    <button type="reset" class="btn btn-succes " name="btn">Reinitialiser</button>
                                  </div>
                                  
                                  <div class="col-lg-5 col-md-2 " >
                                    <button type="submit" class="btn btn-succes" name="Recherche">Rechercher</button>
                                  </div>
                          </div>
                          <!--<div class="form-group col-md-2">
                            <button type="submit" class="btn btn-succes">Afficher</button>
                          </div>-->
                      
                   </form>
                </div>
              </div>
          </div>
       
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>