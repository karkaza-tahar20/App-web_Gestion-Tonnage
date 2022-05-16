   <?php 
    #include('navigation1.html');
        include("navigation1.html");
        include("traitement_sql.php");

        $Matricule=$_POST['Matricule'];
        $Date=$_POST['Date'];
        $dao= new DAO();
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

        }elseif (isset($_POST['Recherche']) AND empty($_POST['Matricule']) AND empty($_POST['Date'])){ 
          header("location:rechercheTrain.php?id=1");
        }
    ?> 

 <!DOCTYPE html>
<html>
<head>
    <title>Les Trains</title>
    <link rel="stylesheet" type="text/css" href="button.css">   
</head>
<body>
    <div class="from-groupe"></div>
     <h3 style="text-align: center; margin-top: 90px; margin-bottom: 30px;">Les Trains</h3>
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
</body>
</html>