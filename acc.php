 <?php
session_start();
/* démarre le système de sessions. Si le visiteur vient d'arriver sur le site,
 alors un numéro de session est généré pour lui*/
if(!isset($_SESSION['login'])){
	/*$_SESSION : permet de stocker des informations qui seront automatiquement transmises de page en page pendant toute la durée de visite d'un internaute sur votre site */
	/*isset renvoie vrai si une var existe*/
	$mod = "pub";
} else {
	$mod = "priv";
}
?>


<html>
<head>


<link rel="shortcut icon" type="jpg" href="logo.jpg" />
  <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="shortcut icon" type="png" href="Icone.png" />
  <meta charset="utf-8">  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}


<style>
button{
 background-image:  #4b1f4c8a;
  border:0;
  color:#fff;
  font-family:monospace;
   border-radius:5px;
  padding:auto;
  font-size:20px;
  width:90px;
  margin:20px auto;
  display:block;
  cursor:pointer;transition:1s;



}
.xt{
	font-weight: bold;

	color:#41b954d9 ;
	border-radius: 15px;
}
h-1{
	color:red;
}
h-2{
	color:black;
}

</style>

	<title>R.A.D.E.E.S</title>
	<link rel="shortcut icon" href="Icone.jpg" />
	<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="csss/styl.css">
        <link rel="stylesheet" href="css/animate.css">
	</head>
	










<body>



	
	
	<?php
		require_once("entet.php");
		require_once("cone.php");
		if($mod=="pub"){
			require_once("monstyle.php");
			
		}
		
		
		/*insertion d’un fichier s’il n'est pas insérer*/

			if($mod == "priv"){
			$req=$pdo->prepare("select * from cv_stagiaire where traiter = 0");
 
				
	$req->execute(); 
	$res=$req->fetchall();

	if (!empty($res)) {
	


	


	?>
	<body style="  background-image:url('capp3.png');
  background-repeat:no-repeat;
  background-size:cover;">
	
		<div class="panel panel-info panel-primary positionTab">
		<div class="panel-heading"> R.A.D.E.E.S</div>
		<div class="panel-body">
		<center><div class="panel-heading"><h3> Liste des demandes de stages </div></center>
		
		<table class="table table-striped" >
			<thead>
				<tr>
					<th style="border-bottom: 2px solid #c73d3d;">Nom</th>
					<th style="border-bottom: 2px solid #c73d3d;">Prenom</th>
					<th style="border-bottom: 2px solid #c73d3d;">C.I.N</th>
					<th style="border-bottom: 2px solid #c73d3d;">adresse</th>
					<th style="border-bottom: 2px solid #c73d3d;">date naissance</th>
					<th style="border-bottom: 2px solid #c73d3d;">tele </th>
					<th style="border-bottom: 2px solid #c73d3d;">email </th>
					<th style="border-bottom: 2px solid #c73d3d;">Action</th>
					<th style="border-bottom: 2px solid #c73d3d;">Details</th>
					
        

					<th style="border-bottom: 2px solid #c73d3d;"></th>

				</tr>
			</thead>
		<?php
			$res=$pdo->query("select * from cv_stagiaire where traiter = 0");
			while($l=$res->fetch()){
				/* query (): Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet. $res : un objet qui contient le résultat de la requête.
				=> fetch() : Récupère et retourne la ligne suivante d'un jeu de résultats sous forme d’un tableau associatif dont les clés sont les noms des champs de la table.*/ 
				?>
					<tr>
						<td><?php echo $l["nom"];?></td>
						<td><?php echo $l["prenom"];?></td>
						<td><?php echo $l["cin"];?></td>
						<td><?php echo $l["address"]?></td>
						<td><?php echo $l["date_naiss"];?></td>
						
						
						<td><?php echo $l["tel"];?></td>
						<td><?php echo $l["email"];?></td>

						
						<?php if($mod == "priv") { ?>
							<td>
								<a  class="xt" href="valider.php?id=<?php echo $l["idcv"]; ?>">Accepter</a><br/>
								<a  href="refuser.php?id=<?php echo $l['idcv']; ?>"><h-1><strong>Refuser</strong></h-1></a>
							</td>
							<td>
							<a href="cv.php?id=<?php echo $l['idcv']; ?>"><h-2><storng>C.V</storng></h-2></a>
							</td>



						<?php } ?>
					</tr>
				<?php
			
}
		?>

		</table>


	


<?php 


}

else {
echo '<br><br><br><center><img src=112.png></center>';

}
}
?>





	
	
	
		</div>
		
	</div>
	
	

</body>
</html>