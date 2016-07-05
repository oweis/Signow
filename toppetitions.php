
<?php require("connexion.php"); ?>

<?php

 
		
			  
	try{   
		 $req = $bdd ->query('select p.ids as d,count(p.ids) as  ids_nbr ,s.nom  as n from petition p,petitions s  where p.ids=s.ids group by p.ids order by count(p.ids) desc limit 1 ');
		 
		 foreach($req as $donnee)       
			{
			  echo "La pétition qui a la plus nombre de signatures : ".$donnee['n']."   avec un nombre des signatures :   ".$donnee['ids_nbr'];
			}
		}
	catch(Exception $e){}
		

?>
