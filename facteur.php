<?php include 'header.php'; ?>
<div class="container">
	<div class="center">


<div id="cnter">
	<?php    
session_start();
if (empty($_SESSION['clelog'])) {
	header("location:conect.php");
}?>


<?php
    
if(isset($_POST['beton'])){
 	$cin=$_SESSION['cin']; 
 	$idd=$_SESSION['id_article'];

	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', ''); 
	$rep = $bdd->query('UPDATE `service` SET `delivration`="oui" where cin="'.$cin.'" '); 
	$rep = $bdd->query('UPDATE `paiement` SET `delivration`="oui" where id_article="'.$idd.'" ');       
	$reponse = $bdd->query('SELECT* FROM auteur as au ,article as a ,type_article as t,service as s,organisation as o ,hotel as h ,activite as ac ,paiement as p
	where au.cin="'.$cin.'" and a.id=p.id_article and au.cin=s.cin and t.id=au.type_participent and o.cin=au.cin and o.id_article=a.id and h.nom_hotel=s.nom_hotel and ac.type_activite=s.type_activite');
	
	   //$rep=mysql_num_rows($reponse);
	   //if(mysql_num_rows($reponse)>0){ 
	while ($donnees = $reponse->fetch()){ ?>
	<div class="col-lg-12">
		<div class="pag">
		<ul class="facteur">
			<li>Nom  :</li>
			<li><?php echo $donnees['nom']?> </li>
			<li><?php echo $donnees['prenom']?></li>
		</ul> 
		<ul class="facteur">
			<li>Cin :</li>
				<li><?php echo $donnees['cin']?> </li>	
		</ul></div>
		<div class="date">	
			<span>
				<?php 
				   $date = date("d-m-Y");
				   echo "date : $date";
				   $horaire = date("H:i"); 
				   echo "  $horaire"; 
				   echo"<br>";
				?>
			</span>
		</div>
		
	</div>
	<center>
		<table class="tablee" >
			<tr>
			<tr><th>nom</th>
				<th>nom</th>
				<th>paiement</th>
				<th>ville </th> 
				<th> prix  </th>
				<th>date</th> 
				<th>nomdre de chambre d'hotel</th> 
				
			</tr>
			<tr>
				<th>article</th>
				<?php 
		    	if($donnees['etat_paiement']=="oui"){?>
				<td><?php echo $donnees['titre']?> </td>
				<td><?php echo $donnees['etat_paiement']?> </td>
				<td><?php echo $donnees['ville']?> </td>
				<td><?php echo $donnees['prix']."  DH"?> </td>
				<td><?php echo $donnees['datee']?> </td>
				<td> </td>
				<?php $_SESSION['article']=$donnees['prix'];}
				else{$_SESSION['article']=0;} ?>
			</tr>
		    <tr>
		    	<th>hotel</th>
		    	<?php 
		    	if($donnees['paiement_hotel']=="oui"){
		    	 ?>
		    	<td><?php echo $donnees['nom_hotel']?> </td>
				<td><?php echo $donnees['paiement_hotel']?> </td>
				<td><?php echo $donnees['ville_hotel']?> </td>
				<td><?php echo $donnees['prix_hotel']."  DH"?> </td>
				<td><?php echo $donnees['date_hotel']?> </td>
				<td><?php echo $donnees['nbr_chambre']?> </td>
				<?php $_SESSION['hotel']=$donnees['prix_hotel'];}
				else{$_SESSION['hotel']=0;} ?>
		    </tr>
		    <tr>
		    	<th> acticité</th>
		    	<?php 
		    	if($donnees['paiement_activite']=="oui"){
		    	 ?>
		    	<td><?php echo $donnees['type_activite']?> </td>
				<td><?php echo $donnees['paiement_activite']?> </td>
				<td><?php echo $donnees['ville_activite']?> </td>
				<td><?php echo $donnees['prix_activite']."  DH"?> </td>
				<td><?php echo $donnees['date_debut']?> <br> <?php echo $donnees['date_fin']?></td>
				<td></td>
				<?php $_SESSION['activite']=$donnees['prix_activite'];}
				else{$_SESSION['activite']=0;} ?>
		    </tr>
    <tr>
		    	<th>total de prix</th>
		    	<td><?php ECHO  ($_SESSION['article']+$_SESSION['hotel']+$_SESSION['activite'])."  DH";?></td>
		    </tr>
	</tr>
          </table >
      </center>
<?php
	
       }
   }
		?>
		

		</div>

<center><a titlt="print screen" alt="print screen" traget="_blank" onclick="window.print();" style="cursor:pointer;">
	<form action="facteur.php" method="POST"><input name="beton" type="submit" class="imprimer" value="imprimer facture"></form></a></center>
</div>
</div>
<?php include 'footer.php'; ?>