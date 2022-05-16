 <?php 
  #include('navigation1.html');
  include("nav.php")
 ?>
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="tran.css">
</head>
<body>
    
  

      <div class="form-row"></div>
      <div class="form-row">
        <div class="container form-group " >
                <span class="en"></span>
                <input type="checkbox" class="check" name="">
                <span class="hn"></span>
            <div class="content contentEnglish col-lg-12" >
              <h2 style="text-align: center; margin-bottom: 50px;">Train Sortie</h2>
                <form method="post" action="addTrainSortie.php" enctype="multipart/form-data" >
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
                              <label>L'heur</label>
                              <input type="time" class="form-control" name="Heur" placeholder="Heur de sortie">
                            </div>
                            <div class="form-group col-md-2"></div>
                             <div class="form-group col-md-5">
                              <label>Date d'entrer </label>
                              <input type="date" class="form-control" name="Date" placeholder="Date de sortie">
                            </div>
                       </div>
                       <div class="form-row">
                               <?php 
                                  if(isset($_GET['id'])){
                                   ?>       
                                  <span style="color: red;">
                                    Remplisez les champs vides !!
                                  </span>
                                <?php } echo"<br>"?>
                        </div>
                         <div class="form-row" >
                            <div class="form-group col-lg-9 col-md-6 "></div>
                            <div class="form-group col-lg-2 col-md-4 col-sm-6">
                              <button type="reset" class="btn btn-succes">Reinitialiser</button>
                            </div>
                            <div class="form-group col-lg-1 col-md-2 col-sm-6">
                              <button type="submit" class="btn btn-succes" name="btn">Ajouter</button>
                            </div>
                    
                        </div>
                        <!--<div class="form-group col-md-2">
                          <button type="submit" class="btn btn-succes">Afficher</button>
                        </div>-->
                    
                 </form>
            </div>
            <div class="content contentHindi col-lg-12">
                <h2 style="text-align: center; margin-bottom: 50px;">Train Entrer</h2>
                <form method="post" action="addTrainEntrer.php" enctype="multipart/form-data"  >
                   <div class="form-group"></div>
                      <div class="form-row">
                            <div class="form-group col-md-5">
                              <label>Matricule </label>
                              <input type="text" class="form-control" name="Matricule"  placeholder="Matricule">
                            </div>
                            <div class="form-group col-md-2"></div>
                            <div  class="form-group col-md-5">
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
                              <label>La Source</label>
                              <input type="text" class="form-control" name="Destination" placeholder="Source ">
                            </div><br /> 
                      </div>
                       <div class="form-row">
                            <div class="form-group col-md-5">
                              <label>L'heur</label>
                              <input type="time" class="form-control" name="Heur" placeholder="Heur de sortie">
                            </div>
                            <div class="form-group col-md-2"></div>
                             <div class="form-group col-md-5">
                              <label>Date d'entrer </label>
                              <input type="date" class="form-control" name="Date" placeholder="Date de sortie">
                            </div>
                       </div>
                       <div class="form-row">
                               <?php 
                                  if(isset($_GET['id'])){
                                   ?>       
                                  <span style="color: red;">
                                    Remplisez les champs vides !!
                                  </span>
                                <?php } echo"<br>"?>
                        </div>
                        <div class="form-row" >
                            <div class="form-group col-lg-9 col-md-6 "></div>
                            <div class="form-group col-lg-2 col-md-4 col-sm-6">
                              <button type="reset" class="btn btn-succes">Reinitialiser</button>
                            </div>
                            <div class="form-group col-lg-1 col-md-2 col-sm-6">
                              <button type="submit" class="btn btn-succes" name="btn">Ajouter</button>
                            </div>
                    
                        </div>
                  
                 </form>
              </div>
        </div>

   </body>
 </html>