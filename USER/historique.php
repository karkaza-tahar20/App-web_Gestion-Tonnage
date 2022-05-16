
<!DOCTYPE html>
<?php
     include("navig1.php");
      include('traitement_sql.php');
      $dao= new DAO();
      $list=$dao->AfficherHist();
      if(empty($list)){ ?>
         <script type="text/javascript">
           alert("L'HISTORIQUE EST VIDE !!!!!!! ");
         </script>
      <?php    header("location:index.php?id=Liste Vide");
      }

     ?>
<html class="no-js" lang="zxx">
    <head>
       
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


   </head>

   <body>

    <!-- Preloader Start -->
          <caption><h3 style="text-align: center; margin-top: 170px; margin-bottom: 30px;" >L'HISTORIQUE</h3></caption>
          <div class="form-row">
          	   <div class="form-groupe col-lg-9 col-md-8 col-sm-8"></div>
	           <div  class="form-groupe col-lg-3 col-md-4  col-sm-4"  >  
	             <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher..." style="margin-bottom: 20px;" />  
	           </div>
          </div>

      
	            <table align="center" class="table table-hover table-bordered col-lg-12 col-md-6 col-sm-4" style="width: 98%;"  id="dataTable" width="100%" cellspacing="0" >
	                <thead class="thead-dark">
	                    <tr><th>Matricule</th><th>Date Sortie</th><th>Heur Sortie </th><th>Poids Sortie (T) </th><th>Date D'entrer</th><th>Heure d'entrer</th><th>Poids D'entrer (T)</th><th>Destination</th><th>Poids de Phosphate (T)</th></tr>
	                </thead>
	                <tbody style="text-align: center;" id="employee_table" >
	                    <?php 
	                        foreach ($list as $ligne) {
	                            echo "<tr style='color: #000; text-align:center'>";
	                                    echo "<th style='text-align:left;' class='table-secondary'>".$ligne["Matricule"]."</th>";
	                                    echo "<th>".$ligne["Date_S"]."</th>";
	                                    echo "<th>".$ligne["Heur_S"]."</th>";
	                                    echo "<th>".$ligne["Poids_S"]."</th>";
	                                    echo "<th>".$ligne["Date_E"]."</th>";   
	                                    echo "<th>".$ligne["Heur_E"]."</th>";
	                                    #echo "<th>".$ligne['Date[0]'] . '/' . $ligne['Date[1]'] . '/' . $ligne['Date[2]'] ."</th>";
	                                    echo "<th>".$ligne["Poids_E"]."</th>";
	                                    echo "<th>".$ligne["Destination"]."</th>";
	                                    echo "<th>".$ligne["Poids_G"]." T</th>";
	                                    
	                             echo "</tr>";
	                        }
	                     ?>
	                </tbody>
	             </table>
        
      
             
           
	<!-- JS here -->
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
	
		<!-- All JS Custom Plugins Link Here here 
    <script src="./assets/js/function.js"></script>-->
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