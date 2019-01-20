

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

<div class="container-fluid">
	<div class="row">
		<div class="top-c">
            Gestion Des Conferences
	    </div>
	</div>
</div>
	<div class="container">

	<div class="col-lg-12">
			<?php
	 session_start();
		            
		           $_SESSION['clelog']=null;
		           $_SESSION['clepass']=null;
	    
	        ?>
	   <?php     
	if(isset($_POST['buton'])){
	 	$Nom=$_POST['email'];
	 	$pass=$_POST['passwd'];
	    if($Nom&&$pass){

	 	 $connect=mysql_connect('localhost','root','');
	     mysql_select_db("projet");
	     $rep = mysql_query('select * from admin where username="'.$Nom.'" and password="'.$pass.'"');
	     mysql_num_rows($rep);
		   if(mysql_num_rows($rep)!=0){
	    	echo "cooncter";
	         
	           session_start();
	            
	           $_SESSION['clelog']=$Nom;
			           $_SESSION['clepass']=$pass;
				            header("location:gestion.php");	
				}
				else
				echo "<font color='red'> c'est compte est inccorerct </font> ";
			}else
				echo "<font color='red'>entrer mot de pass</font></center>";

			}

		 ?>

			<center><form action="conect.php" method="post">
			<h4>login</h4>	
				
				<input name="email" type="text" placeholder="username"> <br>
			
				<input name="passwd" type="password" placeholder="mot de passe">  <br>
				<input name="buton" type="submit" value="se conecter">
		
			</form></center>
			<a href="formul.php"><input  type="submit" value="Créer compte pour conecter"></a>
	</div>
</div>

</body>
</html>