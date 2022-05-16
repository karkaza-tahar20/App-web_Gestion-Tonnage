<?php
  include("navigation1.html");
  include('traitement_sql.php');
  $dao= new DAO();
  $list=$dao->AfficherHist();
  if(empty($list)){
      header("location:index.php?id=Liste Vide");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>L'HISTORIQUE</title>
	<link rel="stylesheet" type="text/css" href="button.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <link rel="stylesheet" href="css/bootstrap.min.css" />  
   <script src="js/bootstrap.min.js"></script>  
</head>
<body>
		  <h3 style="text-align: center; margin-top: 90px; margin-bottom: 30px;" >L'HISTORIQUE</h3>
		   <div class="btn btn-succes " style="position: absolute; right: 20px; top: 100px;">  
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

</body>
</html>