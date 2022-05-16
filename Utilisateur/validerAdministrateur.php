 <?php

	$login=$_POST['username'];
	$passorwd=$_POST['password'];
	require('traitement_sql.php');
	$dao=new DAO();
	if($dao->authentification($login,$passorwd)){
		session_start();
		$_SESSION['login']=$login;
		#header("location:HomeAdmin.php");	
		header("location:ajoutTrain.php");	
	}else{
		header("location:interfaceAdministrateur.php?id=1");
	}
	 	
        /*if ($_POST['username']==admin && $_POST['password']==admin) {
            header("location:acceuil.php");
		}
		
	    if ($_POST['username']!=admin) {
	 	    header("location:ex04.php?id=login incorrecte ");
	    }elseif ($_POST['password']!=admin) 
	 	    header("location:ex04.php?id=password incorrecte");
	   */

    ?>