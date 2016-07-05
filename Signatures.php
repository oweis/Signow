<!DOCTYPE html>

<?php require("connexion.php"); ?>
 
	
	<?php
				$s = intval($_GET["idss"]);
				$req = $bdd ->prepare('SELECT * FROM petition where ids="'.$s.'" order by date_signe desc limit 10  ');
				$req ->execute(); 	
try{
        foreach($req as $donnee)        {
           
echo htmlspecialchars($donnee['nom']).' '.htmlspecialchars($donnee['prenom']). ' de '.htmlspecialchars($donnee['pays']). ' '.'a  signé  !   '  .' '.''.' '. '<font color="blue" >Time : '.htmlspecialchars($donnee['date_signe']).'</font> </br></br>'  ; }

       }
        catch(Exception $e){
			die('erreur :'.$e->getMessage());
        }

//die(print_r($dbb))
 /*
	
*/
        ?>


