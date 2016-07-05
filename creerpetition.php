<!DOCTYPE html>
<?php require("connexion.php"); ?>

<html lang="en">
<head>
  <title>Créer une pétition</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type='text/javascript' src='js/Scripts.js'></script>	
</head>
<header><img src="here.png" alt="arobas" style="width:100%; height:250px;" /></header>
<div class="panel-info class panel-default">
  <div class="panel-body" id='notificationspetition'></div>
</div>
<center><h2 >Créer votre pétition !</h2></center> </br></br>
<body>

<div class="container">
  <form class="form-horizontal" role="form" action="http://localhost/AJAX-TEST/home.php">
  

    <div class="form-group">        
 <button style="width:100%" ="www.google.com" class="btn btn-info" >Cliquer ici pour retourner à la page d'accueil</button>
      
    </div>
	   </br></br></br>
  </form>
  <form class="form-horizontal" role="form" action='serveurpetitions.php' method='post'>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Comment voullez-vous nommé cette pétition ?</label> </br>
      <div class="col-sm-10">
        <input type="nom" class="form-control" name='nom' id="nom" placeholder="Enter ton nom">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date_fin">Quelle est la date de fin</label></br>
      <div class="col-sm-10">          
        <input type="Date" class="form-control" name='date_fin' id="date_fin" >
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="goal">Saisir le but de cette pétition</label></br>
      <div class="col-sm-10">          
        <input type="goal" class="form-control" id="goal" name='goal' >
      </div>
	  </div>
	  
	  
	 
	 </br>
	</br>
	
	 <font align='left' size="2" color="red">Cliquer ici pour enregister votre signature !</font> </br>
	</br>
		
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="enregister" name='enregistrer' />
		
      </div>
    </div>
  </form>
</div>
</br></br></br></br></br></br>

</br></br></br></br></br></br></br></br>

</body><center>
<footer><h5>Crée par Chaimae Alaoui Ismaili & Yahya Oweis </h5></footer></center>
</html>
