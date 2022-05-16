<!DOCTYPE html>	
  <?php 
		//include("navigation.php");
		include("nav.php");
	    #include("navigation1.html");
		include("traitement_sql.php");
		$dao=new DAO();
		$listeTrains=$dao->listeTrains();
     ?> 
<body>
		     <h3 style="text-align: center; margin-top: 40px; margin-bottom: 30px;" >Les Trains</h3>
		<div class="form-row">
		   <div class="form-groupe table-responsive ">
			 <table align="center" class="table table-hover" style="width: 90%;">
			 	<thead class="thead-dark">
			 		<tr><th>Matricule</th><th>Adresse Capteur </th><th>Poids </th><th>Direction </th><th>Destination</th><th>Date</th><th>Heur</th></tr>
			 	</thead>
			 	<tbody >
			 		<?php 
			 			foreach ($listeTrains as $ligne) {
			 				echo "<tr style='color: #000; text-align:center' >";
						        	echo "<th style='text-align:left;' class='table-secondary' >".$ligne["Matricule"]."</th>";
						        	echo "<th>".$ligne["Adresse_Capteur"]."</th>";
						        	echo "<th>".$ligne["Poids"]."</th>";
						        	echo "<th>".$ligne["Direction"]."</th>";
						        	echo "<th>".$ligne["Destination"]."</th>";	
						        	echo "<th>".$ligne["Date"]."</th>";
						        	echo "<th>".$ligne["Heur"]."</th>";
                                    #href="supressionEquipe.php?id='.$ligne["id_equipe"].'">supprimer</a></button</th>';
                                    #echo '<th><button class="btn"><a href="supressionTrain.php?id='.$ligne["id_train"].' ">supprimer</a></button></th>';
						           echo '<th><button class="btn"><a href="mod.php?id='.$ligne["id_train"].' ">modifier</a></button></th>';	
						     echo "</tr>";
			 			}
			 		 ?>
			 	</tbody>
			 </table>
		   </div>
		 </div>
	 
</body>
</html>