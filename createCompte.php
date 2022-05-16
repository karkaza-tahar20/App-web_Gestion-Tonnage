
<!DOCTYPE html>
<?php
 include('navigation11.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>transparent login form</title>
    <script>
            function validateForm() {
              var u = document.getElementById("u").value;
              var e = document.getElementById("e").value;
              var p = document.getElementById("p").value;
              if (u == "" || e == "" || p == "") {
                var a="a";
                alert("Remplisez tous les informations !!!");
                return false;
              }
              if( a!="a" ){
                alert("L'inscription correct ...");
              }
              
            }
    </script>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("4.jpeg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(10px);
        }
        .contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0,0,0,.5);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form input[type="submit"] {
            height: 30px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 5%;
        }
        .contact-form p a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
           text-align: center;
        }
        input[type="checkbox"] {
            width: 30%;
            color: white;
            margin-bottom: 0px;
            text-align: center;

        }
    </style>
</head>
<body>
    <div class="contact-form">
        <img src="ADMIN/img/avataaars.svg" class="avatar">
        <h2>S'inscrire</h2>
        <form method="POST" action="addCompte.php" onsubmit="return validateForm()">
            <p>UserName</p>
            <input type="text" name="username" placeholder="UserName" id="u">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" id="e" >
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" id="p">
            <input type="submit" name="inscrire"  value="S'inscrire">
            <?php 
                if(isset($_GET['id']) and $_GET['id']==1){
                 ?>             
                <span style="color: red;">
                    Remplissez les champs vides !!!
                </span>
               <?php } ?>
            <p><a href="index.php">Vous avez déjà un compte? S'identifier!</a></p>
        </form>
    </div>
</body>
</html>
