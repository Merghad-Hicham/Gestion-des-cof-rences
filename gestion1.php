<?php include 'header.php'; ?>
<div class="container">
	<div class="center">
		
	<form action="gestion1.php" method="POST">
		
		
	   
	     
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier title:</label></div> 
			<div class="col-lg-8"><input name="title" type="text" placeholder="title"></div>
	    </div>
	     
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier order:</label></div> 
			<div class="col-lg-8"><input name="order" type="text" placeholder="order"></div>
	    </div>
	     
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier Badge:</label></div> 
			<div class="col-lg-8"><input name="Badge" type="text" placeholder="Badge"></div>
	    </div>
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier In_badge:</label></div> 
			<div class="col-lg-8"><input name="In_badge" type="text" placeholder="In_badge"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier Registrerd:</label></div> 
			<div class="col-lg-8"><input name="Registrerd" type="text" placeholder="Registrerd"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier affiliation:</label></div> 
			<div class="col-lg-8"><input name="affiliation" type="text" placeholder="affiliation"></div>
	    </div><div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier city:</label></div> 
			<div class="col-lg-8"><input name="city" type="text" placeholder="city"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier country:</label></div> 
			<div class="col-lg-8"><input name="country" type="text" placeholder="country"></div>
	    </div>
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier dete:</label></div> 
			<div class="col-lg-8"><input name="date" type="text" placeholder="dete"></div>
	    </div>
	    <div class="col-lg-12"><center><input name="buton" type="submit" value="modifier"></center></div>

	</form>
	<?php    
session_start();
if (empty($_SESSION['clelog'])) {
	header("location:conect.php");
}?>
<?php    
if(isset($_POST['buton'])){
 	$id=$_SESSION['id'];  
 	$title=$_POST['title'];
 	$order=$_POST['order']; 	
 	$Badge=$_POST['Badge'];
 	$In_badge=$_POST['In_badge'];
 	$Registrerd=$_POST['Registrerd'];
 	$affiliation=$_POST['affiliation'];
 	$city=$_POST['city'];
 	$country=$_POST['country'];
 	$date=$_POST['date'];?>
 	
 		<?php
 	
	
	if($title&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set title="'.$title.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
	
	if($order&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set order="'.$order.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($Badge&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set Badge="'.$Badge.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($In_badge&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set In_badge="'.$In_badge.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($Registrerd&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set Registrerd="'.$Registrerd.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($affiliation&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set affiliation="'.$affiliation.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($city&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set city="'.$city.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($order&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set country="'.$country.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
if($date&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update artecl set datee="'.$date.'" where id="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}
	






} ?>
</div>
</div>
</div>
<?php include 'footer.php'; ?>