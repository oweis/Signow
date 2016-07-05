
<?php require("connexion.php"); ?>

<?php

			  
	try{   
		 $req = $bdd ->prepare('insert into petitions(nom,date_fin,goal) values (?,?,?)');
		 $req ->execute(array($_POST["nom"],$_POST["date_fin"],$_POST["goal"]));
		echo "<script>alert('ok ! operation avec sucees ');</script>";
		 echo '</br></br></br></br></br></br></br></br></br></br></br><center><font color="blue">Vote petition est eneregistree avec succees ! En attente de signature !</font></center>';
		
		 
		}
	catch(Exception $e){
		echo "<script>alert('pasok');</script>";
		echo 'Il faut remplir tous les champs';
	}
		

?>
