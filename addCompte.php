<?php
  include('traitement_sql.php');
  $dao= new DAO();
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  if(!empty($username) and !empty($email) and !empty($password)){
      $val=$dao->inscription($username,$email,$password); 
      header("location:createCompte.php");
  }else{
     header("location:createCompte.php?id=1");
  }
  ?>