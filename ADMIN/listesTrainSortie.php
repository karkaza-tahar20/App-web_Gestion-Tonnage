	<?php 
		//include("navigation.php");
		include("navigation11.php");
	    #include("navigation1.html");
		include("traitement_sql.php");
		$dao=new DAO();
		$listeTrains=$dao->listeTrains();
     ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Les Trains</title>
	<link rel="stylesheet" type="text/css" href="button.css">	
</head>
<body>
	<div class="form-groupe"></div>
		     <h3 style="text-align: center; margin-top: 90px; margin-bottom: 30px;" >Les Trains</h3>
			 <table align="center" class="table table-hover" style="width: 70%;">
			 	<thead>
			 		<tr><th>Matricule</th><th>Adresse Capteur </th><th>Poids </th><th>Direction </th><th>Destination</th><th>Date</th><th>Heur</th></tr>
			 	</thead>
			 	<tbody >
			 		<?php 
			 			foreach ($listeTrains as $ligne) {
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
	 <?php
		/*$pdo=$dao->connexion();
		$lstLivres=array();
		$rep=$pdo->query("select * from equipes");
		//$st=$bd->prepare($requ);
	      //$st->execute();
		while($lign=$rep->fetch()){
			echo "<tr>";    
				        	echo "<td>".$ligne["id_equipe"]."</td>";
				        	echo "<td>".$ligne["nom_equipe"]."</td>";
				        	echo '<td><img class="image img-rounded" src="'.$ligne["image"].'"/></a></td>';
				        	echo "<td>".$ligne["ville_equipe"]."</td>";
				        	echo "<td>".$ligne["id_ligue"]."</td>";	
				        	echo "<td>".$ligne["titres_equipe"]."</td>";	
				        	echo "<td>".$ligne["id_groupe"]."</td>";
                            echo '<td><a href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></td>';
							
		echo "</tr>";
	  	 /*echo " nom equipe : ".$lign['nom_equipe']. "<br>";
	     echo " ville : ".$lign['ville_equipe']. "<br>"; //le nom dans la base de donnees
	     echo " ligue : ".$lign['id_ligue']. "<br>";
	     echo " titres : ".$lign['titres_equipe']. "<br>";
	      echo " Groupe : ".$lign['id_groupe']. "<br>";
	        // echo " Drapo : ".$lign['drapo']. "<br>";
	      echo ('<img class="image img-rounded" src="'.$lign['drapo'].'"/><br/>');
	  }			
	  $rep->closeCursor();*/
	 ?>
	 
</body>
</html>