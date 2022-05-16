
<?php 
    include("nav.php");
  ?>

<body>
	<h2 style="text-align: center; margin-bottom: 50px;">Modifier Un Train</h2>
	
  <div class="form-row"></div>
      <div class="form-row">
        <div class="container form-group " >

		  <div class=" form-groupe col-lg-12" >
                <form method="post"  enctype="multipart/form-data" >
                   <div class="form-group"></div>
                      <div class="form-row">
                            <div class="form-group col-md-5 ">
                              <label>Matricule </label>
                              <input type="text" class="form-control" name="Matricule"  placeholder="Matricule">
                            </div>
                            <div class="form-group col-md-2 "></div>
                            <div  class="form-group col-md-5 ">
                              <label>Adresse Capteur </label>
                              <input type="text" class="form-control" name="Adresse_Capteur" placeholder="Adresse Capteur">
                            </div> 
                      </div>
                      <div class="form-row">
                            <div class="form-group col-md-5">
                                <label>Poids </label>
                                <input type="text" class="form-control" name="Poids" placeholder="Poids">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-5">
                              <label>Destination</label>
                              <input type="text" class="form-control" name="Destination" placeholder="Destination ">
                            </div><br /> 
                      </div>
                       <div class="form-row">
                       	    <div class="form-group col-md-5">
                              <label>Direction</label>
                              <input type="text" class="form-control" name="Direction" placeholder="Direction">
                            </div>
                             <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-3">
                              <label>Date sortie </label>
                              <input type="date" class="form-control" name="Date" placeholder="Date de sortie">
                            </div>
                            <div class="form-group col-md-2">
                              <label>L'heur</label>
                              <input type="time" class="form-control" name="Heur" placeholder="Heur de sortie">
                            </div>
                           
                             
                       </div>
                      
                         <div class="form-row" >
                            <div class="form-group col-lg-10 col-md-9 col-sm-9"></div>
                            <div class="form-group col-lg-2 col-md-3 col-sm-3">
                              <button class="btn btn-succes" name="btn" >Modifier</button>
                            </div>
                    
                        </div>
                        <!--<div class="form-group col-md-2">
                          <button type="submit" class="btn btn-succes">Afficher</button>
                        </div>-->
                    
                 </form>
            </div>
         </div>
	 
     </div> 
<?php

	      $id=$_GET['id'];
         if (isset($_POST['btn']) && !empty($_POST['Matricule']) && !empty($_POST['Adresse_Capteur']) && !empty($_POST['Poids']) && !empty($_POST['Direction']) && !empty($_POST['Destination']) && !empty($_POST['Date']) && !empty($_POST['Heur']) ){
            # code...
        	 	    $Matricule=$_POST['Matricule'];
                $Adresse_Capteur=$_POST['Adresse_Capteur'];
                $Poids=$_POST['Poids'];
                $Direction=$_POST['Direction'];
                $Destination=$_POST['Destination'];
                $Date=$_POST['Date'];
                $Heur=$_POST['Heur'];
        		include("traitement_sql.php");
        		$dao=new DAO();
        		$list=$dao->modTrain($id,$Matricule,$Adresse_Capteur,$Poids,$Direction,$Destination,$Date,$Heur);


             $listSortie=$dao->rechercherhist($Matricule);
             foreach ($listSortie as $ligne) {
               $id=$ligne['id'];
               #echo "'".$ligne["id"]."'";   
                $lt=$dao->modTrainHistSortie($id,$Matricule,$Poids,$Date,$Heur);           
             }
             #$lt=$dao->modTrainHistSortie($id2,$Matricule,$Poids,$Date,$Heur);
              
        ?>
      	  <script type="text/javascript">alert("l'élément modifieé :):)");</script>  
        
<?php  }else if(isset($_POST['btn'])){ ?>
            <script type="text/javascript">alert("Remplisez les champs vides !!!");</script> 
   <?php   }

 ?> 

  </body>
  </html>