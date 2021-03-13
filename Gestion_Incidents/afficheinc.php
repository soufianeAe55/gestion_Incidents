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
   
	  <table width="900" height="65" border="1" cellpadding="3">
<caption>
          <span class="style1">Les incidents</span> <br>
          <br />
        </caption>
        <br />
        <br />
        <br />
        <br />

	    <tr>
          <td bgcolor="#999999">ID d'incident</td>
	      <td bgcolor="#999999">ID du materiel</td>
	      <td bgcolor="#999999">Nom de La collaborateur</td>
	      <td bgcolor="#999999">Type d'incident</td>
	      <td bgcolor="#999999">La date d'incident</td>
	      <td bgcolor="#999999">Statu</td>
	      <td bgcolor="#999999">Date du traitment</td>
        <td bgcolor="#999999">Resultat du traitement</td>
        </tr>
        <div id="affichetype">
        <?php 
 		
		$bdd= new PDO('mysql:host=localhost;dbname=incidentsmaterial','root','');
		
    $ins=$bdd->query('SELECT * FROM incident');
    $in=$bdd->query('SELECT Resultat_tr FROM materiel');
    while ($donn=$ins->fetch() AND $donn1=$in->fetch()) {
    	 
         ?>

        <tr>
          <td><?php echo $donn[0]; ?></td>
          <td><?php echo $donn[1]; ?></td>
          <td><?php echo $donn[2]; ?></td>
          <td><?php echo $donn[3]; ?></td>
          <td><?php echo $donn[4]; ?></td>
          <td><?php echo $donn[5]; ?></td>
          <td><?php echo $donn[6]; ?></td>
          <td><?php echo $donn1[0]; ?></td>
        </tr>

        <?php 
      
    }
       ?>
       </div>
      </table>
  </section>
<nav>
      <a href="accueiladmin.php" id="lien">ACCUEIL</a>
    </nav>

</div>
</body>
</html>