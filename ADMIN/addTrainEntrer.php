  <?php 
    //$id_equipe=$_POST['id_equipe'];
    $Matricule=$_POST['Matricule'];
    $Adresse_Capteur=$_POST['Adresse_Capteur'];
    $Poids=$_POST['Poids'];
    #$Direction=$_POST['Direction'];
     $Direction="Entrer";
    $Destination=$_POST['Destination'];
    $Date=$_POST['Date'];
    //$image=$dir."/".$_FILES['image']['name'];
    $Heur=$_POST['Heur'];
    //$drapo="img/".$image;
    if( $Matricule=="" ||  $Adresse_Capteur=="" ||  $Poids=="" ||  $Direction=="" ||   $Destination=="" ||  $Heur=="" ||  $Date==""){
        header("location:ajoutTrainEntrer.php?id=1");
    }else{
        include('traitement_sql.php');
        $dao=new DAO();
        $dao->ajouterTrain($Matricule,$Adresse_Capteur,$Poids,$Direction,$Destination,$Date,$Heur);
        $listHist=$dao->rechercherhist($Matricule);
        foreach ($listHist as $ligne) {
           $Poids_G=$Poids-$ligne['Poids_S'];
           #$id=$ligne['id'];
           $dao->AJOUTE($ligne['Matricule'],$ligne['Date_S'],$ligne['Heur_S'],$ligne['Poids_S'],$Date, $Heur,$Poids,$ligne['Destination'],$Poids_G);
           $dao->SupprimerTrain($ligne['Matricule']);
        }
        
        header("location:listesTrainEntrer.php?id=$id");
    }

 ?>