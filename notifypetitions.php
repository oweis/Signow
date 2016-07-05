
<?php 
date_default_timezone_set('Africa/Casablanca');
require("connexion.php"); ?>

<?php  
		try{ 
			//function time() mrwna xwiya
			 $t=time();
			 //echo($t . "<br>");
			// echo(date("Y-m-d h:i:s",$t));
			 $req = $bdd ->prepare('select * from petitions');
			 $req ->execute();
			
			foreach($req as $donnee)       
			{ //	echo "<br>".$donnee['date_creation'];
				$datecreation =  strtotime($donnee['date_creation']);
				$diff  = abs($datecreation - $t);
				
					if ($diff < 2 )
				{
				
				
					echo '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>'.$donnee['nom'].' est vient de se créée </div>';
	
				}
			}
			 
			}
		catch(Exception $e){
			echo "<script>alert('pasok');</script>";
			echo 'Il faut remplir tous les champs';
		}
	
?>
