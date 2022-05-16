
<!DOCTYPE html>
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
        <title>Construction HTML-5 Template</title>
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
   
          <h3 style="text-align: center; margin-top: 170px; margin-bottom: 30px;" >L'HISTORIQUE</h3>
           <div class="btn " style="position: absolute; right: 20px; top: 140px;">  
                <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher..." />  
           </div> 
            <table align="center" class="table table-hover  " style="width: 100%;" >
                <thead style="color: blue;  font-family: Verdana, Arial, Helvetica, sans-serif;">
                    <tr><th>Matricule</th><th>Date Sortie</th><th>Heur Sortie </th><th>Poids Sortie </th><th>Date D'entrer</th><th>Heure d'entrer</th><th>Poids D'entrer</th><th>Destination</th><th>Poids de Phosphate</th></tr>
                </thead>
                <tbody style="text-align: center;" id="employee_table" >
                    <?php 
                        foreach ($list as $ligne) {
                            echo "<tr>";
                                    echo "<th style='text-align:left;'>".$ligne["Matricule"]."</th>";
                                    echo "<th>".$ligne["Date_S"]."</th>";
                                    echo "<th>".$ligne["Heur_S"]."</th>";
                                    echo "<th>".$ligne["Poids_S"]."</th>";
                                    echo "<th>".$ligne["Date_E"]."</th>";   
                                    echo "<th>".$ligne["Heur_E"]."</th>";
                                    #echo "<th>".$ligne['Date[0]'] . '/' . $ligne['Date[1]'] . '/' . $ligne['Date[2]'] ."</th>";
                                    echo "<th>".$ligne["Poids_E"]."</th>";
                                    echo "<th>".$ligne["Destination"]."</th>";
                                    echo "<th>".$ligne["Poids_G"]."</th>";
                                    
                                    #echo '<th><img class="image img-rounded" src="'.$ligne["image"].'"/></th>';
                                    #echo '<th><button class="btn"><a href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></button</th>';
                                   #echo '<th><button class="btn"><a href="modificationTrain.php?id='.$ligne["Matricule"].'">modifier</a></button></th>';   
                             echo "</tr>";
                        }
                     ?>
                </tbody>
             </table>
            <script>  
                  $(document).ready(function(){  
                       $('#search').keyup(function(){  
                            search_table($(this).val());  
                       });  
                       function search_table(value){  
                            $('#employee_table tr').each(function(){  
                                 var found = 'false';  
                                 $(this).each(function(){  
                                      if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                                      {  
                                           found = 'true';  
                                      }  
                                 });  
                                 if(found == 'true')  
                                 {  
                                      $(this).show();  
                                 }  
                                 else  
                                 {  
                                      $(this).hide();  
                                 }  
                            });  
                       }  
                  });  
             </script>  

  
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