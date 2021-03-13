<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Espace Utilisateur</title>
	<link rel="stylesheet" type="text/css" href="css/accueilut.css" />
</head>
  <body>
        <div id="page">

          
<section>
  <?php session_start(); ?>
  
<!--<input type="submit" value="Ajouter Des Materiels " name="bt" id="bt">-->
<img src="images/admin.jpg" width="1352" height="659" />
<div id="rm">
 
  <big><p>Bienvenu <?php echo $_SESSION['login']; ?> !</p>  </big>  </div>
  <div id="rm1">
 
  <big><p>Votre Espace</p>  </big>  </div>
  <div id="rm2">
 
  <big><p>Choisir une operation:</p>  </big>  </div>


  <div id="buttons">
		  <form action="materiel.php" method="post">
        <input type="submit" value="Ajouter Des Materiels " name="bt" id="bt">
		  <br />
          </form>

          <form action="affichemat1.php" method="post">
          <input type="submit" value="Afficher Les Materiels " name="bt1" id="bt1">
          <br />
          </form>
          
          <form action="affichemat.php" method="post">
          <input type="submit" value="Afficher Les Materiels 
     par Type " name="bt2" id="bt2">
          <br />
          </form>

          <form action="modifierMat.php" method="post">
          <input type="submit" value="Modifier Des Materiels " name="bt3" id="bt3">
          <br />
          </form>

          <form action="suppmat.php" method="post">
          <input type="submit" value="Supprimer Des Materiels " name="bt4" id="bt4">
          <br />
          </form>
    </div>
<nav>
            
     <a href="index.php" id="lien">Deconnexion</a>


          </nav>

</section>
         </div>
</body>
</html>