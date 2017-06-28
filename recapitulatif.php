<?php
session_start();
error_reporting(E_ALL);

$base=$_SESSION['base'];
$arrayGlobal=$_SESSION['arrayGlobal'];

$name="";
$quanti="";
foreach ($arrayGlobal as $key => $value) {
	$name.= "$key<br>";	
	$quanti.= "$value<br>";
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  	<meta name="author" content="Martinez Manuel" />
  <!--Import Google Icon Font-->
  	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
  <!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  	<script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Récapitulatif</title>
</head>
<body>
	<div class="container">	
		<h1>Récapitulatif de votre demande</h1>
			<table class="centered">
      			<thead> 
      				<tr style="border: 1px solid #368BC1;text-align: center;">
        				<th id="nom" style="border: 1px solid #368BC1;text-align: center;" ><b>Nom</b></th>
        				<th id="quantite" style="border: 1px solid #368BC1;text-align: center;" ><b>Quantité</b></th>
      				</tr>
      			</thead>  
      			<tbody>
					<tr style="border: 1px solid #368BC1;text-align: center;">
 						<td headers="nom" style="border: 1px solid #368BC1;text-align: center;"> <?php echo $name ?> </td>
						<td headers="quantite" style="border: 1px solid #368BC1;text-align: center;"> <?php echo $quanti ?> </td>
					</tr>
				</tbody>
			</table>
		<div class="button"> 					
        	<input class="btn waves-effect waves-light light-blue" id="return" type="button" onclick="location.href='documentation.php';" value="retour accueil" />
		</div>	
	</div>


</body>
</html>