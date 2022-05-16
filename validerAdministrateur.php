 <?php

	$login=$_POST['username'];
	$passorwd=$_POST['password'];
	require('traitement_sql.php');
	$dao=new DAO();
	if($login!="" and $passorwd!="" ){
		if($dao->authentification($login,$passorwd)){
			session_start();
			$_SESSION['login']=$login;
	         echo $_SESSION['var1'];
			header("location:ADMIN/index.php?id=ADMINISTRATEUR");
			#header("location:ADMIN2/index.html");	
			#header("location:ajoutTrain.php");	
		}elseif ($dao->authentification1($login,$passorwd)) {
			session_start();
			$_SESSION['login']=$login;
	         echo $_SESSION['var1'];
			header("location:USER/index.php");
	    }else{
			header("location:index.php?id=1");
			#header("location:interfaceAdministrateur.php?id=1");
		}
	}else{
			header("location:index.php?id=1");
			#header("location:interfaceAdministrateur.php?id=1");
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