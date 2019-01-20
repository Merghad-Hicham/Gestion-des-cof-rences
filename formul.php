




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
	<div class="container">
	<div class="center">
	
<?php
$No="null";
if(isset($_POST['boton'])){
	$No=$_POST['username'];
 	$Nom=$_POST['Nom'];
 	$Prenom=$_POST['Prenom'];
 	$email=$_POST['email'];
 	$telephone=$_POST['telephone'];
 	$cp=$_POST['confirmerpassword'];
 	$pass=$_POST['pass'];
 	$sexe=$_POST['sexe'];

 
	
     
   if($No&&$Nom&&$Prenom&&$email&&$pass==$cp&&$sexe){
    	$pass=md5($pass);
      $cp=md5($cp);
    
      $connect=mysql_connect('localhost','root','');
      mysql_select_db("projet");
     $rep=mysql_query("insert into admin values('','$Nom','$Prenom','$email','$telephone','$pass','$cp','$sexe')");
    
/*}else {
	echo "<center> <font color='red'>entrer les donne .</font></center>";
	}*/

	

/*$connect=mysql_connect('localhost','root','');
      mysql_select_db("projet");
     $rep=mysql_query("CREATE TABLE $No (id int(100)  NOT NULL , DL text , 
     	copyright text , decision VARCHAR(30), title  text, 
     	authors  VARCHAR(100), oorder int NOT NULL, Couunt VARCHAR(30), 
     	Badge text ,In_badge text, Proceddings VARCHAR(100),
Registrerd VARCHAR(100),affiliation VARCHAR(30), City VARCHAR(30),
country VARCHAR(30) ,Registration_comment text, PRIMARY KEY (id));");
     }
     else echo "<center> <font color='red'>entrer usernam pour creer un tableau dans la base de dennéer 
et tout les donneer pour creer un compte</font></center>";*/
}
}
 ?>



		<h2>Créer un compte Gestion de confirence</h2>
	<form action="formul.php"  method="post"><div class="col-lg-12">
			<div class="col-lg-3"><label>username</label></div> 
			<div class="col-lg-8"><input name="username" type="text" placeholder="username"></div>
	    </div>
		<div class="col-lg-12">
			<div class="col-lg-3"><label>Nom</label></div> 
			<div class="col-lg-8"><input name="Nom" type="text" placeholder="Nom"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>Prénom</label></div> 
			<div class="col-lg-8"><input name="Prenom" type="text" placeholder="Prénom"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>E-mail</label></div> 
			<div class="col-lg-8"><input name="email" type="email" placeholder="Email"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>password</label></div> 
			<div class="col-lg-8"><input name="pass" type="password" placeholder="password"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>confirmer password</label></div> 
	<div class="col-lg-8"><input name="confirmerpassword" type="password" placeholder="confirmer password" ></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>telliphone</label></div> 
			<div class="col-lg-8"><input name="telephone" type="text" placeholder="numero de telephne"></div>
	    </div>
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>sexe</label></div> 
			<div class="col-lg-8"> <select name="sexe">
	    	<option>homme</option>
	    	<option>famme</option>
	    	
	    </select></div>
	    </div>
	   
		<div class="col-lg-12"><center><input name="boton" type="submit" value="inscription"></center></div>

	</form>
	<form action="conect.php"  method="post">
	<font color='red'> <input type="submit"   value="conecter"></font>
	</form>
</div>




</body>
</html>