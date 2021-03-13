<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>L'affichage De Votre Materiéls</title>
	<link rel="stylesheet" type="text/css" href="css/affichercss.css" />
		<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
		</style>
</head>
<body>
<div id="page">
	<section id="afficher">
	<?php session_start(); ?>
		<table width="900" height="65" border="1" cellpadding="3">
<caption>
					<span class="style1">Votre Materiéls</span> <br>
					<br />
				</caption>
				<br />
				<br />
				<br />
				<br />

			<tr>
					<td bgcolor="#999999">ID du materiel</td>
				<td bgcolor="#999999">Type</td>
				<td bgcolor="#999999">Nom de La collaborateur</td>
				<td bgcolor="#999999">Reference</td>
				<td bgcolor="#999999">Marque</td>
				<td bgcolor="#999999">Prix</td>
				<td bgcolor="#999999">Lieu d'achat</td>
				<td bgcolor="#999999">Date d'achat</td>
				<td bordercolor="#666666" bgcolor="#999999">Couleur</td>
				<td bgcolor="#999999">Resultat du traitement</td>
				</tr>
				<div id="affichetype">
				<?php 
		
		$bdd= new PDO('mysql:host=localhost;dbname=incidentsmaterial','root','');
		
 $ins=$bdd->query('SELECT * FROM materiel  WHERE  Nom_coll=\''.$_SESSION['login'].'\'');
	
		while ($donn=$ins->fetch()) {
			 
				 ?>
				<tr>
					<td><?php echo $donn[0]; ?></td>
					<td><?php echo $donn[1]; ?></td>
					<td><?php echo $donn[2]; ?></td>
					<td><?php echo $donn[3]; ?></td>
					<td><?php echo $donn[4]; ?></td>
					<td><?php echo $donn[5]; ?></td>
					<td><?php echo $donn[6]; ?></td>
					<td><?php echo $donn[7]; ?></td>
					<td><?php echo $donn[8]; ?></td>
					<td><?php echo $donn[9]; ?></td>
				</tr>
				<?php 
			}
		
			 ?>
			 </div>
			</table>
	</section>

 <nav>
			
								<a href="accueilut.php" id="lien">ACCUEIL</a>
	
					</nav>
</div>
</body>
</html>