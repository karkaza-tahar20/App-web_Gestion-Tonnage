 <?php 
  include('navigation1.html');
  #include("navigation11.php")
?> 

 <!DOCTYPE html>
 <html>
 <head>
   <title>AJOUTER UN Train</title>
   <link rel="stylesheet" type="text/css" href="ajouter.css">
    <style type="text/css"> div.container {   padding-bottom: 2px; margin-top: 15px; left: -15px} button{margin-top: 2px;} h2{margin-bottom: 2px;}</style>
 </head>
 <body>

  <div class="form-row" >
       <div class="form-group col-md-2"></div>
        <div class="form-group col-md-6">
          <div class="container"><h2 style="text-align: center;">Rechercher sur un Train</h2>
              <form method="POST" action="recherche.php" enctype="multipart/form-data" >
                 <div class="form-group"></div>
                    <div class="form-row">
                         
                          <div class="form-group col-md-6">
                            <label>Matricule </label>
                            <input type="text" class="form-control" name="Matricule"  placeholder="Matricule">
                          </div>
                          <div  class="form-group col-md-6">
                            <label>DATE</label>
                            <input type="text" class="form-control" name="Date" placeholder="Date">
                          </div>
                    </div>
                     <div class="form-row">
                             <?php 
                                if(isset($_GET['id'])){
                                  if ($_GET['id']==1) {
                                 ?>       
                                    <span style="color: red;">
                                      Remplisez les champs vides !!
                                    </span>
                            <?php }else{ ?>
                                       <span style="color: red;">
                                           Il N'EXISTE AUCCUN RETURN !!
                                        </span>
                           <?php  } 
                                } echo"<br>"?>
                      </div>
                      <div class="form-row">
                              <!--<div class="form-group col-md-6">
                                <button type="reset" class="btn btn-succes col-md-6" name="btn">Reinitialiser</button>
                              </div>-->
                              <div class="form-group col-md-6"></div>
                              <div class="col-md-6" >
                                <button type="submit" class="btn btn-succes col-md-6" name="Recherche">Rechercher</button>
                              </div>
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