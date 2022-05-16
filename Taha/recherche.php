   <?php 
    #include('navigation1.html');
        include("nav.php");
        include("traitement_sql.php");
        $Matricule=$_POST['Matricule'];
        $Date=$_POST['Date'];
        $lstTer=array();
        if( isset($_POST['Recherche']) AND $Matricule =="" AND $Date==""){ ?>
            <script type="text/javascript">
            	alert('Remplisez au moins un seul champ !!!');
             </script>
           
       <?php }
        $dao= new DAO();
        if(isset($_POST['Recherche']) AND !empty($_POST['Matricule']) AND !empty($_POST['Date']) ){
             $lstTer=$dao->rechercherTrainDatMat($Matricule,$Date);
            if(empty( $lstTer)){
        ?>
               <script type="text/javascript">
                    alert('AUCUN ELEMENT !!!');
                </script>
   <?php    }      
        }elseif (isset($_POST['Recherche']) AND empty($_POST['Matricule']) AND !empty($_POST['Date'])){
            $lstTer=$dao->rechercherTrainDate($Date);

            if(empty( $lstTer)){
        ?>      <script type="text/javascript">
                    alert('AUCUN ELEMENT !!!');
                </script>
   <?php    }
         
        }elseif (isset($_POST['Recherche']) AND !empty($_POST['Matricule']) AND empty($_POST['Date'])){
            $lstTer=$dao->rechercherTrain($Matricule);
            if(empty( $lstTer)){
        ?>
                <script type="text/javascript">
                    alert('AUCUN ELEMENT !!!');
                </script>
   <?php    }     
        }
?> 

<body>
     <h3 style="text-align: center; margin-top: 30px; margin-bottom: 30px;">Les Trains</h3>
      <div class="form-row" >
         <div class="form-groupe table-responsive">
                 <table align="center" class="table table-hover" style="width: 90%;">
                    <thead class="thead-dark">
                        <tr><th>Matricule</th><th>Adresse Capteur </th><th>Poids </th><th>Direction </th><th>Destination</th><th>Date</th><th>Heur</th></tr>
                    </thead>
                    <tbody >
                        <?php 
                            foreach ($lstTer as $ligne) {
                                echo "<tr style='color: #000; text-align:center;'>";
                                        echo "<th>".$ligne["Matricule"]."</th>";
                                        echo "<th>".$ligne["Adresse_Capteur"]."</th>";
                                        echo "<th>".$ligne["Poids"]."</th>";
                                        echo "<th>".$ligne["Direction"]."</th>";
                                        echo "<th>".$ligne["Destination"]."</th>";  
                                        echo "<th>".$ligne["Date"]."</th>";
                                        echo "<th>".$ligne["Heur"]."</th>";
                                        echo "<th></th>";
                                       echo '<th><button class="btn"><a href="mod.php?id='.$ligne["id_train"].'">modifier</a></button></th>';    
                                 echo "</tr>";
                            }
                         ?>
                    </tbody>
                 </table>
         </div>
    </div>
</body>
</html>