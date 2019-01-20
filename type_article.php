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
if(isset($_POST['typearticle'])){
	
 	$Nom=$_POST['Nom'];
 	
 	$prix=$_POST['prix'];
 	
 	

 
	
     
   if($Nom&&$prix){
    	
    
      $connect=mysql_connect('localhost','root','');
      mysql_select_db("projet");
     $rep=mysql_query("insert into type_article values('','$Nom','$prix')");
    

}
}
 ?>



		<h2>Créer un compte Gestion de confirence</h2>
	<form action="type_article.php"  method="post">

		<div class="col-lg-12">
			<div class="col-lg-3"><label>Nom</label></div> 
			<div class="col-lg-8"><input name="Nom" type="text" placeholder="Nom"></div>
	    </div>
	    
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>prix</label></div> 
			<div class="col-lg-8"><input name="prix" type="text" placeholder="prix">
		</div>
	    
		<div class="col-lg-12"><center><input name="typearticle" type="submit" value="inscription"></center></div>

	</form>
	
</div>




</body>
</html>