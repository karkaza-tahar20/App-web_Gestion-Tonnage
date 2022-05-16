 <?php
  include('navig.php');

 ?>

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="footer1.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="footer1.css">
<title>Football </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0,minimum=scale=1.0">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
 <script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</head>
<body> 
<!--header-->
	<div class="header-bottom-top">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="header-bottom">			
				<div class="logo">
					<img src="images/log.png" alt=" "/>
				</div>
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="interfaceutilisateur.php" class="scroll">Acceuil</a></li>
						<li><a href="listesEquipes.php" class="scroll"> les Équipes</a></li>
						<li><a href="listesGroupes.php" class="scroll">Les Groupes</a></li>
						
						<li><a href="listesTerains.php" class="scroll">Les Terrains</a></li>
						<li><a href="listesMatchs.php" class="scroll">Les Matchs </a></li>
						<li><a href="contact.php" class="scroll">Contact</a></li>
						<li><a href="../index.php" class="scroll">Sortie</a></li>
					</ul><a class="toggle">Menu</a>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
		<!--banner-->
		 <div class="slider">
			<ul class="rslides" id="slider2">
			  <li><a href="#"><img src="images/bb.jpg" alt="">
			  <div class="banner">
			  </div>
			  </a></li>
			  <li><a href="#"><img src="images/ban.jpg" alt="">
			   <div class="banner">
			  </div>
			   </a></li>
			  <li><a href="#"><img src="images/ban1.jpg" alt="">
				<div class="banner">
			  <!--<span class="matter "> </span>-->
			  </div>
			  </a></li>
			   
			  </a></li>
			</ul>
		</div>
			
	</div>
	<!--footer-->
		<footer>
			<div id="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="single-footer">
								<h3>Support</h3>
								<ul class="link-area">
									<li><a href="listesEquipes.php"><i class="fa fa-long-arrow-right"></i></a>les Equipe</li>
									<li><a href="listesGroupes.php"><i class="fa fa-long-arrow-right"></i></a>Les Groupes</li>
									<li><a href="listesTerains.php"><i class="fa fa-long-arrow-right"></i></a>Les Terains</li>
									<li><a href="listesMatchs.php"><i class="fa fa-long-arrow-right"></i></a>Les Matchs</li>
									<li><a href="contact.php"><i class="fa fa-long-arrow-right"></i></a>Contact</li>
								</ul>
							</div>
						</div>
							<div class="col-md-3 col-sm-6">
							<div class="single-footer">
								<h3>Our Contact</h3>
								<ul class="link-area">
									<li><a><i class="fa fa-phone"></i></a>+212611484060</li>
									<li><a href="#"><i class="fa fa-envelope"></i>taha00krz@gmail.com</a></li>
									<li>23 RUE Mussa El Achaari SAFI MAROCAIN</li>
									<li><a href="http://www.ests.uca.ma/"><i class="fa fa-globe"></i></a>ESTS.UCA.MA</li>

								</ul>
							</div>
						</div>
							<div class="col-md-3 col-sm-6">
							<div class="single-footer">
								<h3>Social Media</h3>
								<ul class="link-area">
									<li><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i>
									<i id="social-tw" class="fa fa-twitter-square fa-3x social"></i>
									<i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i>
									<i id="social-em" class="fa fa-envelope-square fa-3x social"></i></li>

								</ul>
							</div>
						</div>

					</div>
				</div>
				
			</div>

		</footer>

</body>
</html>



		