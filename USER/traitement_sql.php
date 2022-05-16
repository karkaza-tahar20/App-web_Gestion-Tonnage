<?php 
	class DAO{
		function connexion(){
			return new PDO("mysql:host=localhost;dbname=tonage","root","");
		}
		function authentification($login,$password){
			$pdo=$this->connexion();
			$req="select * from administrateurs where login='".$login."' and password='".$password."'";
			$rep=$pdo->query($req);
			if($rep->fetch()){
			$rep->closeCursor();
				return true;
			}else{
			$rep->closeCursor();
				return false;
			}
		}
		function authentification1($login,$password){
			$pdo=$this->connexion();
			$req="select * from utilisateurs where login='".$login."' and password='".$password."'";
			$rep=$pdo->query($req);
			if($rep->fetch()){
			$rep->closeCursor();
				return true;
			}else{
			$rep->closeCursor();
				return false;
			}
		}
		function listeTrains(){
			$pdo=$this->connexion();
			$lstTrains=array();
			//$rep=$pdo->query("select  equipes.id_equipe,equipes.nom_equipe,equipes.ville_equipe,equipes.titres_equipe,equipes.id_ligue,equipes.notes,equipes.image,groupes.nom_groupe FROM equipes,groupes WHERE equipes.id_groupe=groupes.id_groupe ");
			
			//$rep=$pdo->query("select  Matricule,Adresse_Capteur,Poids,Direction,Destination,DAY(Date) as jour,MONTH(Date) as mois,YEAR(Date) as annee,Heur FROM trains order by Matricule");
			$rep=$pdo->query("select * FROM trains order by Date DESC");
			while($row=$rep->fetch()){
				$lstTrains[]=array("Matricule"=>$row['Matricule'],"Adresse_Capteur"=>$row['Adresse_Capteur'],"Poids"=>$row['Poids'],"Direction"=>$row['Direction'],"Destination"=>$row['Destination'],"Date"=>$row['Date'],"Heur"=>$row['Heur']);
			}
			$rep->closeCursor();
			return $lstTrains;
		}

	    function ajouterTrain($Matricule,$Adresse_Capteur,$Poids,$Direction,$Destination,$Date,$Heur){			
			$pdo=$this->connexion();
			$req="insert into trains(Matricule,Adresse_Capteur,Poids,Direction,Destination,Date,Heur) values('$Matricule','$Adresse_Capteur','$Poids','$Direction','$Destination','$Date','$Heur')";
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		 function ajouterHist($Matricule,$Date_S,$Heur_S,$Poids_S,$Date_E,$Heur_E,$Poids_E,$Destination,$Poids_G){			
			$pdo=$this->connexion();
			$req="insert into historique(Matricule,Date_S,Heur_S,Poids_S,Date_E,Heur_E,Poids_E,Destination,Poids_G) values('$Matricule','$Date_S','$Heur_S','$Poids_S','$Date_E','$Heur_E','$Poids_E','$Destination','$Poids_G')";
			
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		function AJOUTE($Matricule,$Date_S,$Heur_S,$Poids_S,$Date_E,$Heur_E,$Poids_E,$Destination,$Poids_G){			
			$pdo=$this->connexion();
			$req="insert into historique (Matricule,Date_S,Heur_S,Poids_S,Date_E,Heur_E,Poids_E,Destination,Poids_G) values('$Matricule','$Date_S','$Heur_S','$Poids_S','$Date_E','$Heur_E','$Poids_E','$Destination','$Poids_G')";
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();
		}

		function SupprimerTrain($Matricule){			
			$pdo=$this->connexion();
			$requete="delete from historique where Matricule ='".$Matricule."' AND Poids_G ='' ";
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}

        function AfficherHist(){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from historique order by Date_S desc");
			while($row=$rep->fetch()){
				$lstTer[]=array("Matricule"=>$row['Matricule'],"Date_S"=>$row['Date_S'],"Heur_S"=>$row['Heur_S'],"Poids_S"=>$row['Poids_S'],"Date_E"=>$row['Date_E'],"Heur_E"=>$row['Heur_E'],"Poids_E"=>$row['Poids_E'],"Destination"=>$row['Destination'],"Poids_G"=>$row['Poids_G']);
			}
			$rep->closeCursor();
			return $lstTer;
		}

		function ajouterTerain($nom_terain,$ville_terain,$adresse,$surface,$capacite,$image){			
			$pdo=$this->connexion();
			$req="insert into terains (nom_terain,ville_terain,adresse,surface,capacite,image) values('".$nom_terain."','".$ville_terain."','".$adresse."','".$surface."','".$capacite."','".$image."')";
			echo $req;
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();
		}
		function ajouterGroupe($nom_groupe,$equipe1,$equipe2,$equipe3,$equipe4){			
			$pdo=$this->connexion();
			$req="insert into groupes (nom_groupe,equipe1,equipe2,equipe3,equipe4)values ('".$nom_groupe."','".$equipe1."','".$equipe2."','".$equipe3."','".$equipe4."');";
			$stmt=$pdo->prepare($req) ;
            $stmt->execute();
			//$rep->closeCursor();
		}
		function ajouterMessage($email,$nom,$prenom,$mobile,$message){			
			$pdo=$this->connexion();
			$req="insert into messages(email,nom,prenom,mobile,message) values('$email','$nom','$prenom','$mobile','$message')";
			//$rep=$pdo->query($requete);
			 $stmt=$pdo->prepare($req) ;
             $stmt->execute();

		}
		function supprimerEquipe($id_equipe){			
			$pdo=$this->connexion();
			$requete="delete from equipes where id_equipe='".$id_equipe."';";
			$rep=$pdo->query($requete);
			$rep->closeCursor();
		}

		function modEquipe($id_equipe,$nom_equipe,$ville_equipe,$titres_equipe,$notes,$id_ligue,$image,$id_groupe){
			$pdo=$this->connexion();
			$lstEts=array();
			$rep=$pdo->query("update equipes set nom_equipe='".$nom_equipe."', ville_equipe='".$ville_equipe."', titres_equipe='".$titres_equipe."', notes='".$notes."', id_ligue='".$id_ligue."', image='".$image."' ,id_groupe='".$id_groupe."' where id_equipe='".$id_equipe."'");
			//$rep->closeCursor();
		}


		function rechercherTrainDatMat($Matricule,$Date){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from trains where Matricule LIKE '%".$Matricule."%' && Date  LIKE '%".$Date."%' order by Date desc");
			while($row=$rep->fetch()){
				$lstTer[]=array("Matricule"=>$row['Matricule'],"Adresse_Capteur"=>$row['Adresse_Capteur'],"Poids"=>$row['Poids'],"Direction"=>$row['Direction'],"Destination"=>$row['Destination'],"Date"=>$row['Date'],"Heur"=>$row['Heur']);
			}
			$rep->closeCursor();
			return $lstTer;
		}
		function rechercherTrain($Matricule){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from trains where Matricule LIKE '%".$Matricule."%' order by Date desc");
			while($row=$rep->fetch()){
				$lstTer[]=array("Matricule"=>$row['Matricule'],"Adresse_Capteur"=>$row['Adresse_Capteur'],"Poids"=>$row['Poids'],"Direction"=>$row['Direction'],"Destination"=>$row['Destination'],"Date"=>$row['Date'],"Heur"=>$row['Heur']);
			}
			$rep->closeCursor();
			return $lstTer;
		}
		function rechercherTrainDate($Date){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from trains where Date  LIKE '%".$Date."%' order by Date desc");
			while($row=$rep->fetch()){
				$lstTer[]=array("Matricule"=>$row['Matricule'],"Adresse_Capteur"=>$row['Adresse_Capteur'],"Poids"=>$row['Poids'],"Direction"=>$row['Direction'],"Destination"=>$row['Destination'],"Date"=>$row['Date'],"Heur"=>$row['Heur']);
			}
			$rep->closeCursor();
			return $lstTer;
		}
		function rechercherhist($Matricule){
			$pdo=$this->connexion();
			$lstTer=array();
			$rep=$pdo->query("select * from historique where Matricule  LIKE '".$Matricule."' AND Poids_G = '' order by Date_S desc");
			while($row=$rep->fetch()){
				$lstTer[]=array("Matricule"=>$row['Matricule'],"Date_S"=>$row['Date_S'],"Heur_S"=>$row['Heur_S'],"Poids_S"=>$row['Poids_S'],"Date_E"=>$row['Date_E'],"Heur_E"=>$row['Heur_E'],"Poids_E"=>$row['Poids_E'],"Destination"=>$row['Destination'],"Poids_G"=>$row['Poids_G']);
			}
			$rep->closeCursor();
			return $lstTer;
		}
	}


?>