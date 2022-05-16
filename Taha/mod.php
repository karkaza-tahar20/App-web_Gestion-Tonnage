<?php
  include("traitement_sql.php");
  $dao=new DAO();

  $id=$_GET['id'];
  $lst=$dao->rechercherId($id);
  foreach ($lst as $ligne) {
     $Direction=$ligne["Direction"];
     $i=$ligne["id_train"];
  }	
  if ($Direction=="Entrer") {
  	 header("location:modificationTrainEntrer.php?id=$i");
  }else{
  	 header("location:modificationTrain.php?id=$i");
  }
  


?>