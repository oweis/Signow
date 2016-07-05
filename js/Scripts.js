
			var myVar1 = setInterval(afficher, 1000);
 			var myVar2 = setInterval(notify, 1000);
			var myVar3 = setInterval(toppetitions, 1000);


				function afficher()
					{
						if(window.XMLHttpRequest)
						{
							xmlhttp1 = new XMLHttpRequest();
						}else {
							xmlhttp1 = new ActiveXObject('Microsoft.XMLHTTP');
						}
						
						
					xmlhttp1.onreadystatechange = function()
							{
								if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
								{
									document.getElementById('signatures').innerHTML  = xmlhttp1.responseText;
								}
							}
							
						var v_idss = document.formulaire.ids.value;
						xmlhttp1.open('GET','Signatures.php?idss='+v_idss,true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp1.send();
					}
			
 
				function notify()
					{
						if(window.XMLHttpRequest)
						{
							xmlhttp2 = new XMLHttpRequest();
						}else {
							xmlhttp2 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp2.onreadystatechange = function()
							{
								if(xmlhttp2.readyState == 4 && xmlhttp2.status == 200)
								{
									
								document.getElementById('notifications').innerHTML  += xmlhttp2.responseText;
								document.getElementById('notificationshome').innerHTML  += xmlhttp2.responseText;
								document.getElementById('notificationspetition').innerHTML  += xmlhttp2.responseText;
								}
							}
							
						xmlhttp2.open('GET','notifypetitions.php',true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp2.send();
					}
 
				function toppetitions()
					{
						if(window.XMLHttpRequest)
						{
							xmlhttp3 = new XMLHttpRequest();
						}else {
							xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp3.onreadystatechange = function()
							{
								if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200)
								{
									
								document.getElementById('toppetitions').innerHTML  = xmlhttp3.responseText;
								}
							}
							
						xmlhttp3.open('GET','toppetitions.php',true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp3.send();
					}