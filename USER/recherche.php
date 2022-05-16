<!DOCTYPE html>
 <?php 
    #include('navigation1.html');
        include("navig1.php");
        include("traitement_sql.php");

        $Matricule=$_POST['Matricule'];
        $Date=$_POST['Date'];
        $dao= new DAO();
        $lstTer=array();
       if( isset($_POST['Recherche']) AND $Matricule =="" AND $Date==""){ ?>
            <script type="text/javascript">
                alert('Remplisez au moins un seul champ !!!');
             </script>
           
       <?php }
        if(isset($_POST['Recherche']) AND !empty($_POST['Matricule']) AND !empty($_POST['Date']) ){
             $lstTer=$dao->rechercherTrainDatMat($Matricule,$Date);
           if(empty($lstTer)){
              header("location:rechercheTrain.php?id=2");
           }
        }elseif (isset($_POST['Recherche']) AND empty($_POST['Matricule']) AND !empty($_POST['Date'])){
            $lstTer=$dao->rechercherTrainDate($Date);
           if(empty($lstTer)){
              header("location:rechercheTrain.php?id=22");
           }
        }elseif (isset($_POST['Recherche']) AND !empty($_POST['Matricule']) AND empty($_POST['Date'])){
            $lstTer=$dao->rechercherTrain($Matricule);
             if(empty($lstTer)){
                header("location:rechercheTrain.php?id=222");
             }

        }
    ?> 
<html>
<body>
    <div class="from-groupe"></div>
     <h3 style="text-align: center; margin-top: 120px; margin-bottom: 30px;">Les Trains</h3>
     <table align="center" class="table table-hover" style="width: 70%;">
        <thead>
            <tr><th>Matricule</th><th>Adresse Capteur </th><th>Poids </th><th>Direction </th><th>Destination</th><th>Date</th><th>Heur</th></tr>
        </thead>
        <tbody >
            <?php 
                foreach ($lstTer as $ligne) {
                    echo "<tr>";
                            echo "<th>".$ligne["Matricule"]."</th>";
                            echo "<th>".$ligne["Adresse_Capteur"]."</th>";
                            echo "<th>".$ligne["Poids"]."</th>";
                            echo "<th>".$ligne["Direction"]."</th>";
                            echo "<th>".$ligne["Destination"]."</th>";  
                            echo "<th>".$ligne["Date"]."</th>";
                            echo "<th>".$ligne["Heur"]."</th>";
                            echo "<th></th>";
                              
                     echo "</tr>";
                }
             ?>
        </tbody>
     </table>
   
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