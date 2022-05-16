  <?php 
    //$id_equipe=$_POST['id_equipe'];
    $Matricule=$_POST['Matricule'];
    $Adresse_Capteur=$_POST['Adresse_Capteur'];
    $Poids=$_POST['Poids'];
    #$Direction=$_POST['Direction'];
    $Destination=$_POST['Destination'];
    $Direction="Sortie";
    $Date=$_POST['Date'];
    //$image=$dir."/".$_FILES['image']['name'];
    $Heur=$_POST['Heur'];
    //$drapo="img/".$image;
    if( $Matricule=="" ||  $Adresse_Capteur=="" ||  $Poids=="" ||  $Direction=="" || $Destination=="" ||  $Heur=="" ||  $Date==""){
        header("location:ajoutTrainSortie.php?id=1");
    }else{
        include('traitement_sql.php');
        $dao=new DAO();
        $dao->ajouterTrain($Matricule,$Adresse_Capteur,$Poids,$Direction,$Destination,$Date,$Heur);
        $dao->ajouterHist($Matricule,$Date,$Heur,$Poids,"","","",$Destination,"");
        header("location:listesTrainSortie.php");
    }

 ?>