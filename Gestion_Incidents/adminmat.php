<!DOCTYPE html>
	<html>
		<head>
	<meta charset="utf-8"/>	
		<title>Verifier Des Materiels</title>
			<link rel="stylesheet" type="text/css" href="css/adminmat.css"/>
			<style type="text/css">
			<!--
			.style1 {color: #999999}
			.style3 {color: #CCCCCC}
			.style4 {color: silver}
			-->
			</style>
		</head>
<body>
<div id="blockpage">
	<section  id="espaceajoute">
	  <table width="491" height="543" bordercolor="#333333" bordercolorlight="#333333" bordercolordark="#333333" >
	  	<form method="post" action="#phpscript">
        <tr>
          <td width="477">
            <label>Type D'incident :
              <select name="for2"   id="form1">
              	<option value="Software">Software</option>
              	<option value="Hardware">Hardware</option>
            </select>
            </label>          </td>
        </tr>
        <tr>
          <td>
            <label>ID du Materiel:
              <input type="text" size="30" name="for" id="form">
            </label>                    </td>
        </tr>

        <tr>
          <td>
            <label>La date d'incident :
              <input type="text" size="30" name="for3" id="form2">
            </label>                    </td>
        </tr>

        <tr>
          <td>
            <label>Le jour :
              <input type="text"  size="30" name="for4" id="form3">
            </label>         </td>
        </tr>

        <tr>
          <td>
            <label>Le mois :
              <input type="text" size="30" name="for5" id="form4">
            </label>                </td>
        </tr>

        <tr>
          <td>
            <label>L'annee :
              <input type="text" size="30" name="for6" id="form5">
            </label>                 </td>
        </tr>

        <tr>
          <td>
            <label>Compagne :
              <input type="text"  size="30" name="for7" id="form6">
            </label>                   </td>
        </tr>

        <tr>
<td><label id="la3">Statu:
<select name="for8"   id="form7">
                <option value="OUI">OUI</option>
                <option value="NON">NON</option>
            </select>
            </label></td>
          </tr>

        <tr>
          	


     	
          <td height="62">  
      	
	      <span class="style1"> <span class="style3"> <span class="style4">
	      <label id="la1">Date du Traitement :
          <input type="text" size="30" name="for9" id="form8">
          </label>
	      </span> </span> </span>	   </td>
        </tr>        
          

        <tr>
          <td height="58">
            <label id="la">Resultat :
              <select  name="for10" id="form9">
              <option value="Fixée">Fixée</option>
               <option value="Pas Fixée">pas fixée</option>
                <option value="En attente">En attente</option>
              </select>
            </label>              </td>
        </tr>
        <tr>
          <td height="53">
            
            <p>
              <input type="submit" name="b1" id="b1" value="Ajouter">
            </p>
            <p></p></td>
        </tr>
        </form>
      </table>
     
     
</section>


<div id="phpscript" >


<?php
if (isset($_POST['b1'])) {
	
try{
 		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd= new PDO('mysql:host=localhost;dbname=incidentsmaterial','root','',$pdo_options);
session_start();

    

    $ins=$bdd->prepare('INSERT INTO incident(id_materiel,Type_inc,Nom_collabSI,statut,Date_Traitement)  VALUES(:id_materiel, :Type_inc, :Nom_collabSI, :statut, :Date_Traitement) ');
    $ins->execute(array('id_materiel'=>$_POST['for'],'Type_inc'=>$_POST['for2'],'Nom_collabSI'=>$_SESSION['login1'],'statut'=>$_POST['for8'],'Date_Traitement'=>$_POST['for9']));
    

    $in=$bdd->prepare('INSERT INTO date(Pk_date,jour,mois,annee,Compagne) VALUES(:Pk_date,:jour,:mois,:annee,:Compagne) ');
    $in->execute(array('Pk_date'=>$_POST['for3'],'jour'=>$_POST['for4'],'mois'=>$_POST['for5'],'annee'=>$_POST['for6'],'Compagne'=>$_POST['for7']));
    
    
    
     $in1=$bdd->prepare('UPDATE  materiel SET Resultat_tr= ? WHERE id_Mat= ?');
    $in1->execute(array($_POST['for10'],$_POST['for']));
     
     $in2=$bdd->prepare('UPDATE  incident SET Pk_date= ?  WHERE id_materiel= ?');
    $in2->execute(array($_POST['for3'],$_POST['for']));
   
    
   }  
    catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());

	}
	?>
	<?php
}
 ?>
			</div>
      <nav>
<a href="accueiladmin.php" id="lien">ACCUEIL</a></nav>
		</div>
</body>
</html>
