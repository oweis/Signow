<!DOCTYPE html>
<?php require("connexion.php"); ?>
<?php require("head.php"); ?>



<header><img src="here.png" alt="arobas" style="width:100%; height:250px;" /></header>
<div class="panel-info class panel-default">
  <div class="panel-body" id='notifications'></div>
</div>
<center><h2 >Signer votre pétition !</h2></center> </br></br>
<form class="form-horizontal" role="form" action="http://localhost/AJAX-TEST/home.php">
  

 <button class="btn btn-default" style="margin-left:10%">Accueil</button>
      </form>
	<br>
	<br></br></br>
<body>


  
<div class="container">
	 
<div class="panel-info class panel-default">
  <div class="panel-heading" id='toppetitions'></div>
</div>


   
    

</br></br></br></br></br>
    <div class="row">
  <div class="col-sm-7">

  <form class="form-horizontal" role="form" name='formulaire'  method='post' id="formulaire">
 <div class="form-group">
  <label for="ids">Choisir la pétition à signer :</label>
	  <select class="form-control" id="ids" name='ids' onchange="afficher()" >
		<ul> 

	  <?php 
				 $req = $bdd ->query('SELECT ids,nom FROM petitions');

			foreach($req as $donnee)
			{echo '<option id="'.htmlspecialchars($donnee['ids']).'" name="'.htmlspecialchars($donnee['ids']).'" value="'.htmlspecialchars($donnee['ids']).'">'.htmlspecialchars($donnee['nom']).'</option>';}
					?>
				</ul>
	   
	  </select>
</div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom:</label> </br>
      <div class="col-sm-10">
        <input type="nom" class="form-control" name='nom' id="nom" placeholder="Enter ton nom">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prénom:</label></br>
      <div class="col-sm-10">          
        <input type="prenom" class="form-control" name='prenom' id="prenom" placeholder="Enter ton prénom">
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label></br>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" name='email' placeholder="Enter ton email">
      </div>
	  </div>
	  
	  
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pays">Pays:</label></br>
      <div class="col-sm-10">          
        <input type="pays" class="form-control" id="pays"  name='pays' placeholder="Enter ton pays">
      </div>
	  </div>
	 
	 </br>
	</br>
	
	 <font align='left' size="2" color="red">Cliquer ici pour envoyer votre signature !</font> </br>
	</br>
		<script type=text/javascript>
		function err(){
			alert('ok ! La signature est enregistré ');
			
		}
		</script>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Envoyer" name='envoyer' onClick='err()'/>
		
      </div>
    </div>
  </form>
  </div>
  <div class="col-sm-5">
  <div class="panel-info class panel-default">
  <div class="panel-heading"><strong >Les 10 derniers signatures  </strong></div>
  <div class="panel-body" id='signatures'></div>
</div>
</div>
</div>
</body>

<footer><h5><center>Crée par Chaimae Alaoui Ismaili & Yahya Oweis </center></h5></footer>
</html>
