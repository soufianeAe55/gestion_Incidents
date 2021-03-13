<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Espace Admin</title>
	<link rel="stylesheet" type="text/css" href="css/accueilad.css" />
</head>
  <body>
        <div id="page">
            <header>
            
     <a href="index.php" id="lien">Deconnexion</a>


          </header>
<section>

<?php session_start();?>


		<img src="images/admin.jpg" width="1352" height="659" />
<div id="rm">
 
  <big><p>Bienvenu <?php echo $_SESSION['login1']; ?> !</p>  </big>
  </div>
  <div id="rm1">
 
  <big><p>Votre Espace</p>  </big>
  </div>
  <div id="rm2">
 
  <big><p>Choisir une operation:</p>  </big>
  </div>



		  <form action="adminmat.php" method="post">
          <input type="submit" value="Ajouter Des Incidents " name="bt" id="bt">
          <br />
          </form>

          <form action="afficheinc.php" method="post">
          <input type="submit" value="Afficher Les Incidents " name="bt1" id="bt1">
          <br />
          </form>
          
          <form action="affichemat2.php" method="post">
          <input type="submit" value="Afficher Les Materiels " name="bt2" id="bt2">
          <br />
          </form>

          <form action="modinc.php" method="post">
          <input type="submit" value="Modifier Les Incidents " name="bt3" id="bt3">
          <br />
          </form>

          <form action="suppinc.php" method="post">
          <input type="submit" value="Supprimer Des Incidents " name="bt4" id="bt4">
          <br />
          </form>


</section>

         </div>
   </body>
</html>