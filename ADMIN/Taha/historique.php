<?php
  include("nav.php");
  include('traitement_sql.php');
  $dao= new DAO();
  $list=$dao->AfficherHist();
 if(empty($list)){ ?>
         <script type="text/javascript">
           alert("L'HISTORIQUE EST VIDE !!!!!!! ");
         </script>
      <?php  
      }

?>
<body>
		  <h3 style=" color :#000;text-align: center; margin-top: 10px; margin-bottom: 30px;" >L'HISTORIQUE</h3>
		   <div class="btn btn-succes " style="position: absolute; right: 20px; top: 120px;">  
                <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher..." />  
           </div> 

      <div class="form-row" >
		 <div class="form-groupe table-responsive">
          
			<table align="center" class="table table-hover" style="width: 100%;" >
			 	<thead class="thead-dark">
			 		<tr><th>Matricule</th><th>Date Sortie</th><th>Heur Sortie </th><th>Poids Sortie (T) </th><th>Date D'entrer</th><th>Heure d'entrer</th><th>Poids D'entrer (T)</th><th>Destination</th><th>Poids de Phosphate (T)</th></tr>
			 	</thead>
			 	<tbody  id="employee_table" >
			 		<?php 
			 			foreach ($list as $ligne) {
			 				echo "<tr style='color: #000; text-align:center' >";
						        	echo "<th style='text-align:left;' class='table-secondary'>".$ligne["Matricule"]."</th>";
						        	echo "<th>".$ligne["Date_S"]."</th>";
						        	echo "<th>".$ligne["Heur_S"]."</th>";
						        	echo "<th>".$ligne["Poids_S"]." Tonne</th>";
						        	echo "<th>".$ligne["Date_E"]."</th>";	
						        	echo "<th>".$ligne["Heur_E"]."</th>";
						        	echo "<th>".$ligne["Poids_E"]." Tonne</th>";
						        	echo "<th>".$ligne["Destination"]."</th>";
						        	echo "<th>".$ligne["Poids_G"]." Tonne</th>";
						        		
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
          </div>
       </div>

</body>
</html>