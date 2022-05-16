 <?php 
  include('navigation1.html');
  #include("navigation11.php")
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>AJOUTER UN Train</title>
   <link rel="stylesheet" type="text/css" href="ajouter.css">
    <style type="text/css"> div.container {   padding-bottom: 2px; margin-top: 15px; left: -15px} button{margin-top: 2px;} h2{margin-bottom: 2px;}
              </style>
 </head>
 <body>

  
  <div class="form-row" ></div>
      <div class="form-group col-md-10">
        <div class="container"><h2 style="text-align: center;">Ajouter un Train</h2>
                  <form method="post" action="addTrain.php" enctype="multipart/form-data" >
                <!--<div class="form-group">
                 <label>Identifiant d'equipe </label>
                 <input type="text" class="form-control" name="id_equipe" placeholder="Identifiant d'equipe">
              </div>-->
              <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Matricule </label>
                      <input type="text" class="form-control" name="Matricule"  placeholder="Matricule">
                    </div>
                    <div  class="form-group col-md-6">
                      <label>Adresse Capteur </label>
                      <input type="text" class="form-control" name="Adresse_Capteur" placeholder="Adresse Capteur">
                    </div> 
              </div>
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Poids </label>
                        <input type="text" class="form-control" name="Poids" placeholder="Poids">
                    </div>
                    <div class="form-group col-md-6">
                      <label>La destination</label>
                      <input type="text" class="form-control" name="Destination" placeholder="Destination ">
                    </div><br /> 
              </div>
              <div class="form-row">
                        <label>Direction </label><br /> <br /> 
              </div>
               <div class="form-row">
                <!--<input type="text" class="form-control" name="Direction"  placeholder="Direction" >-->
                        <div class="form-group col-md-6">
                            <input type="radio" name="Direction" value="Sortie"  id="sortie" checked="checked" />  <label for="sortie">Sortie</label>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="radio" name="Direction" value="Entrer" id="entrer" />  <label for="entrer">Entrer</label><br />
                        </div>
   
               </div>
               <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>L'heur</label>
                      <input type="time" class="form-control" name="Heur" placeholder="Heur de sortie">
                    </div><br /> 
                     <div class="form-group col-md-6">
                      <label>Date de sortie </label>
                      <input type="date" class="form-control" name="Date[]" placeholder="Date de sortie">
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
                
                    <div>
                      <button type="submit" class="btn btn-succes" name="btn">Ajouter</button>
                    </div>
                    <div >
                      <button type="reset" class="btn btn-succes">Reinitialiser</button>
                    </div>
                    <!--<div class="form-group col-md-2">
                      <button type="submit" class="btn btn-succes">Afficher</button>
                    </div>-->
                
             </form>
          </div>
        </div>
      </div>
   </body>
 </html>