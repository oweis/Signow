<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php require("connexion.php"); ?>

	
	<?php
				$req = $bdd ->query('select count(p.ids) as  ids_nbr ,s.nom  as nom,s.but as but from petition p,petitions s  where p.ids=s.ids group by p.ids ');

				$req ->execute(); 	
try{
        foreach($req as $donnee)        {
           echo htmlspecialchars($donnee['nom']); 
 $valuenow = $donnee['ids_nbr']/$donnee['but'];
		   echo'<div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="'.$valuenow.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$valuenow.'%">
    
    </div>
  </div>';
		}
       }
        catch(Exception $e){
			die('erreur :'.$e->getMessage());
        }

//die(print_r($dbb))
 /*
	
*/
        ?>


