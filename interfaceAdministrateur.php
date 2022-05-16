<?php

  include("navigation1.html");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrateur</title>
	<!--ban3.jpg-->
	<style type="text/css">
		@import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		body{margin: 0;padding: 0;font-family: sans-serif;background-image: url("img/back23.jpg");background-size: cover;}
		.form{width: 280px;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);color: white;}
		.form h1{float: left;font-size: 40px;border-bottom: 6px solid green;margin-bottom:50px;padding: 13px 0; }
		.title{width: 100%;overflow: hidden;font-size: 20px;padding:8px 0;margin: 8px 0;border-bottom: 1px solid #08c421}
		.form i{width: 26px;float: left;text-align: center;}
		.form input{border:none;outline: none;background: none;color: white;font-size: 18px;width:80px;float:left;margin:10px;}
		.boton input{border-radius: 8px ; background-color:#00b33c;width: 50%;padding: 10px;text-align: center;margin: 10px;}
		img {position: absolute;top: 170px;left: 100px;color: #000; width: auto; height:5%; border:none;}
		.boton input:hover{background-color:
 #4dff4d;}
		 .video-container {
		    position: absolute;
		    width: 100%;
		    height: 100vh;
		    overflow: hidden;
		}
		video{
		    object-fit: cover;
		    width: 100vw;
		    height: 100vh;
		    position: absolute;
		    top: 0;
		    left: 0;
		    z-index: -2;
		}
	</style>
</head>
<body> 
	<div class="video-container">
		<video playsinline autoplay muted loop id="bgvid" >
	                    <source src="Pexels Videos 3766.mp4" type="video/mp4">
	     </video>
    </div>  
	<form method="post" action="validerAdministrateur.php" >
	   <div class="form">
	   	 <h1>Login</h1>
	   	 <div  class="title">
	       <i class="fa fa-user" aria-hidden="true"></i>
		   <input type="text" name="username" id="name" placeholder="username" class="input">
		 </div> 

		 <div class="title">
         <i class="fa fa-lock" aria-hidden="true"></i>
		  <input type="password" name="password" id="password" placeholder="password" class="input">
		 </div>
         	<?php 
				if(isset($_GET['id'])){
				 ?>				
				<span style="color: red;">
					Login ou Password Invalide
				</span>
			<?php } ?>

		  <div  class="boton">
		  	<input type="submit" value="sign in"  >
		  </div>
      </div>
	</form>

</body>
</html>