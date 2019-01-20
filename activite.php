
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
	
	<div class="center">
	
<?php
$No="null";
if(isset($_POST['activit'])){
	
 	$Nom=$_POST['Nom'];
 	$ville=$_POST['ville'];
 	$prix=$_POST['prix'];
 	$date_debut=$_POST['date_debut'];
 	$date_fin=$_POST['date_fin'];
 	

 
	
     
   if($Nom&&$ville&&$prix&&$date_debut&&$date_fin){
    	
    
      $connect=mysql_connect('localhost','root','');
      mysql_select_db("projet");
     $rep=mysql_query("insert into activite values('','$Nom','$ville','$prix','$date_debut','$date_fin')");
    

}
}
 ?>



		<h2>Créer un compte Gestion de confirence</h2>
	<form action="activite.php"  method="post">

		<div class="col-lg-12">
			<div class="col-lg-3"><label>Nom</label></div> 
			<div class="col-lg-8"><input name="Nom" type="text" placeholder="Nom"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>ville</label></div> 
			<div class="col-lg-8"><input name="ville" type="text" placeholder="ville"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>prix</label></div> 
			<div class="col-lg-8"><input name="prix" type="text" placeholder="prix"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>date de debut</label></div> 
			<div class="col-lg-8"><input name="date_debut" type="date" placeholder="date de debu"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>date de la fin</label></div> 
	<div class="col-lg-8"><input name="date_fin" type="date" placeholder="date de la fin" ></div>
	    </div>
	    
	   
		<div class="col-lg-12"><center><input name="activit" type="submit" value="inscription"></center></div>

	</form>
	
</div>




</body>
</html>