<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type"  content="text/html;  charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sstyle.css">
	 <script src='js/jquery.js'></script>

</head>
<body>
	<div class="col-lg-12"><div class="menu">
 <center><h1>Gestion Des Conferences</h1>
	<ul>
		<li><a href="gestion.php">Home</a> </li>
		<li><a href="attestation.php">attestation</a> </li>
		<li><a href="paiement.php">paiement</a></li>
		<li><a href="db.php">importation</a></li>
		<li><a href="conect.php">conecter</a></li>

		<li>menu</li>
	</ul></center>
</div></div>
<div class="container">
	<div class="center">
		

 	<form action="paiement1.php" method="POST">
 		
		
		
		
		<!--<div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer id</label></div> 
			<div class="col-lg-8"><input name="Nom" type="text" placeholder="entrer id"></div>
	    </div>
	   <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier Registrerd:</label></div> 
			<div class="col-lg-8"><input name="Registrerd" type="text" placeholder="Registrerd"></div>
	    </div>-->
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier dilbration:</label></div> 
			<div class="col-lg-8"><input name="dilbration" type="text" placeholder="dilbration"></div>
	    </div>
	     <!--<div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier solde:</label></div> 
			<div class="col-lg-8"><input name="solde" type="text" placeholder="solde"></div>
	    </div>
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier facteur:</label></div> 
			<div class="col-lg-8"><input name="facteur" type="text" placeholder="facteur"></div>
	    </div>-->
	     <div class="col-lg-12">
			<div class="col-lg-3"><label>Entrer la nouvil valeur pour modifier methode:</label></div> 
			<div class="col-lg-8"><input name="methode" type="text" placeholder="methode"></div>
	    </div>
	     
	     
	    <div class="col-lg-6"><center><input name="buton" type="submit" value="enregestrer"></center></div>
	    

	</form>
		<?php    
session_start();
if (empty($_SESSION['clelog'])) {
	header("location:conect.php");
}?>


<?php
 	
 	if(isset($_POST['buton'])){	
 	$id=$_SESSION['id'];
 	$dilbration=$_POST['dilbration'];
 	
 	$methode=$_POST['methode'];
 
 		
 	
	if($dilbration&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update paiement set dilebration ="'.$dilbration.'" where id_artic="'.$id.'"'); ?> 
	
	   <?php  
	  
	echo "le mesajour est valider";
}
	
	if($methode&&$id){
?>

	<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
	$reponse = $bdd->query('update paiement set methode="'.$methode.'" where id_artic="'.$id.'"'); ?> 
	
	   <?php  
	echo "le mesajour est valider";
}

?>	


 	

	
	
		
<?php  
       }
   
		?>


</div>
</div>


<div class="col-lg-12"><div class="men">
 <center>
	<ul>
		<li><a href="gestion.php">Home</a> </li>
		<li><a href="gestion.php">imprition</a> </li>
		<li>menu</li>
		
	</ul></center>


</div></div>
</body>
</html>