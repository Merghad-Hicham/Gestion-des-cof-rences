<?php include 'header.php'; ?>
<div class="container">
	<div class="col-lg-12">
		
		<center><form action="attestation.php" method="POST">
		<h4>Entrer CIN d'un auteur pour recherecher <br>si contient sur article ou non et dilibrer attestation de article <br> </h4> 		
			<!--<spann><img src="imag/sarch.svg"></spann>-->
			<input name="cin" type="text" placeholder="Entrer cin pour Rechercher">	  <br>			
		    <input name="biton" type="submit" value="Rechercher">
		</form></center>
		<?php    
			session_start();
			if (empty($_SESSION['clelog'])) {
				header("location:conect.php");
			}?>

			<?php    

			if(isset($_POST['biton'])){
			 	$cin=$_POST['cin'];
			 	$_SESSION['cin']=$cin; 
			 	if($cin){
			?>
    </div> 	
   <div class="col-lg-12">

		<?php 
		$con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,"projet");
		$reponse=" SELECT * FROM organisation as o , auteur as au ,article as a where au.cin='".$cin."' and o.cin=au.cin and o.id_article=a.id  ; ";
	    $res = mysqli_query($con,$reponse);
	    if(mysqli_num_rows($res)!=0){
		//$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
		//$reponse = $bdd->query("SELECT * FROM organisation as o , auteur as au ,article as a where o.cin='".$cin."' and o.cin=au.cin and o.id_article=a.id  ;"); 
		?> 
		<table> 
			<form action="attestation.php" method="POST">
				<div class="col-lg-12">
					<center><label>les article </label><br>
					<select name="titre">
				   <?php 
                  
				   
					while($donnees = mysqli_fetch_array($res)){   ?>	
				   	<option><?php echo $donnees['titre']?>	    
					
				     </option>
				     </select>
				     <?php   
					 $_SESSION['id']=$donnees['id'];
				     }
				     ?>
				     <input name="bottton" type="submit" value="ok"></center>
				</div>
				</form>
			</table>
			
	       </div>
		
	  <?php 
	  } else {echo "<script language='javascript'>alert('ce  CIN né existe pas dans la base de données  ');</script>";}

    } 
    
else {echo "<script language='javascript'>alert('entrer CIN pour rechercher ');</script>";}
}





if(isset($_POST['bottton'])){
 	
 $ciin=$_SESSION['cin'];
 $titre= $_SESSION['titre']=$_POST['titre'];
 $id=$_SESSION['id'] ;
 	
?>
<div class="cnter">

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
	//$rep = $bdd->query("insert into attestation values('','non','$id','')");

	$reponse = $bdd->query("SELECT* FROM organisation as o , attestation as at ,auteur as au ,article as a,paiement as p
where au.cin='".$ciin."' and a.id='".$id."' and o.cin=au.cin and o.id_article=a.id and a.id=at.id_article and a.id=p.id_article "); ?> 
	<center>
		<table class="table">
		<thead>
			<tr>
				<th>titre d'article</th>
				<th>nom d'auteur</th>
				<th>prénom d'auteur</th>
				<th>ville</th>
				<th>payes</th>
				<th>etat paiement</th>
				<th>délivration d'attestation</th>
				<th>date</th>
			</tr>
		</thead>	
		

	   <?php 
	   
	while($donnees=$reponse->fetch()){  ?>
      <tr>
        <th><?php  echo $donnees['titre'];?></th>
   	    <th><?php echo $donnees['nom'];?> </th>
   	 	<th><?php echo $donnees['prenom'];?></th>
   	 	<th><?php echo $donnees['ville'];?></th>
   	 	<th><?php echo $donnees['pays'];?></th>
   	 	<th><?php echo $donnees['etat_paiement'];?></th>
   	 	<th><?php echo $donnees['delivrationA'];?></th>
   	 	<th><?php echo $donnees['datee'];?></th>
	  </tr>
	 <?php
	$_SESSION['dil']=$donnees['delivrationA'];
	$_SESSION['did']=$donnees['id'];
     }
     
     ?>
</table>
	</center>
    <center>
    	<?php  
    	if($_SESSION['dil']=="non"){
?>
    	 <form action="imprition.php" method="POST">
     <div class="col-lg-12">
			<div class="col-lg-12"><label>modele d'attestation pour imprimer</label></div> 
			<div class="col-lg-12"> 

		<select name="model">
			<?php 
			$repo = $bdd->query("SELECT * FROM modele_attestation");
           while ($donnees = $repo->fetch()){  ?>
	    	<option><?php  echo $donnees['modele'];?>
	    		<?php
            }
            ?>
	    	</option>    	
	    </select></div>
	    </div>
		
		
		<input name="botttton" type="submit" value="imprimer attestation">
		</form>
		<?php  }else{echo "<script language='javascript'>alert('cest attestation de ce article est déga délivrer');</script>";} ?>
    </center>
		<?php
     }








 ?>
</div> 
</div>
</div>


<?php include 'footer.php'; ?>