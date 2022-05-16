<?php
  include("nav.php");
  include('traitement_sql.php');
  $dao= new DAO();
  $list=$dao->AfficherHist();
  if(empty($list)){
      header("location:index.php?id=Liste Vide");
  }

?>
<html>
<body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">HISTORIQUE</h1>
      

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Historique</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Matricule</th>
                      <th>Date Sortie</th>
                      <th>Heur Sortie</th>
                      <th>Poids Sortie </th>
                      <th>Date D'entrer</th>
                      <th>Heure d'entrer</th>
                      <th>Poids D'entrer</th>
                      <th>Destination</th>
                      <th> Poids de Phosphate</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
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
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
