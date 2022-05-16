<?php 
		//include("navigation.php");
		#include("nav.php");
        include("traitement_sql.php");
        $dao=new DAO();
        if(isset($_GET['Recherche']) AND !empty($_GET['Recherche'])){// On vérifie qu'il y a bien un fichier
        	$id=htmlspecialchars($_GET['Recherche']);
        	$pdo=$dao->connexion();
        	$listeTrains=$pdo->query("select * from trains where Matricule LIKE '%".$id."%'");
            $lstTer=array();
	        while($row=$listeTrains->fetch()){
					$lstTer[]=array("Matricule"=>$row['Matricule'],"Adresse_Capteur"=>$row['Adresse_Capteur'],"Poids"=>$row['Poids'],"Direction"=>$row['Direction'],"Destination"=>$row['Destination'],"Date"=>$row['Date'],"Heur"=>$row['Heur']);
			}
	    }
?> 
 <!DOCTYPE html>
<html>
<head>
    <title>Les Trains</title>
    <link rel="stylesheet" type="text/css" href="button.css">   
</head>
<body>
     <h3 style="text-align: center;">Les Trains</h3>
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
                            #echo "<th>".$ligne['Date[0]'] . '/' . $ligne['Date[1]'] . '/' . $ligne['Date[2]'] ."</th>";
                            echo "<th>".$ligne["Heur"]."</th>";
                            echo "<th></th>";
                            #echo '<th><img class="image img-rounded" src="'.$ligne["image"].'"/></th>';
                            #echo '<th><button class="btn"><a href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></button</th>';
                           echo '<th><button class="btn"><a href="modificationTrain.php?id='.$ligne["Matricule"].'">modifier</a></button></th>';    
                     echo "</tr>";
                }
             ?>
        </tbody>
     </table>
