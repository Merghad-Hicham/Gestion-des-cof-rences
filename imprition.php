<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type"  content="text/html;  charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sstyle.css">
	 <script src='js/jquery.js'></script>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



</head>
<body>
	
<div class="container" id="a4">
	<div class="row">
		<div class="top">

			<center><h4>Lorem ipsum dolor sit amet <br> , consectetur adipisicing <br> elit,</h4></center>
			<div><center><h2>attestation </h2></center></div>

		</div>
	</div>

	<div class="col-lg-12">

			<?php    
		session_start();
		if (empty($_SESSION['clelog'])) {
			header("location:conect.php");
		}

		  
		if(isset($_POST['botttton'])){
		 	$cin=$_SESSION['cin'];
		 	$id=$_SESSION['id'];
		 	$did=$_SESSION['did'];
		 	$model=$_POST['model'];

			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
			$repons = $bdd->query("SELECT * FROM paiement	where id_article='".$did."';");
			while ($don = $repons->fetch()){ ?><br>

			   	<div class="p">
			
		       <?php $var= $don['etat_paiement'];  ?></br> <br>
			   <br>
			   <br>
		<?php
			   } 
           if($var=="oui"){ 
           	
           
           	$date = date("d-m-Y");
				   
		    //$horaire = date("H:i"); 
				   

			$rep = $bdd->query('UPDATE `attestation` SET `delivrationA`="oui",`date_delivration`="$date" where id_article="'.$did.'" ');
		   

			$reponse = $bdd->query("SELECT * FROM organisation as o , auteur as au ,article as a
		where au.cin='".$cin."' and a.id='".$did."' and o.cin=au.cin and o.id_article=a.id  ;");
			
			   //$rep=mysql_num_rows($reponse);
			   //if(mysql_num_rows($reponse)>0){

			   
			while ($donnees = $reponse->fetch()){ ?>

				<?php echo $donnees['nom'];?>   
			<?php echo $donnees['prenom'];?></br>
			<?php echo $donnees['titre'];?></br>
			</p>
</div>
		<?php
		}
 $rep = $bdd->query("SELECT * FROM modele_attestation where modele='".$model."'  ;");
 while ($donn = $rep->fetch()){ ?><br>

			   	<div class="p">
			<p>
		       <?php echo $donn['text'];  ?></br> <br>
			   <br>
			   <br>
		<?php
			   } 
		    	
           	} else{
           		echo "<script language='javascript'>alert('cest article né pas paier cliké ok pour paier');</script>"; 
          	    header('location:paiement.php'); 
                  }  
		   }
				?>
				

<a ></a>



	</div>
	
        <div class="row">
        	<?php 
				   $date = date("d-m-Y");
				   echo "date : $date";
				   $horaire = date("H:i"); 
				   echo "  $horaire"; 
				   echo"<br>";
				?>
        	
        	</div>
         
	<center><a titlt="print screen" alt="print screen" traget="_blank" onclick="window.print();" style="cursor:pointer;">
	<form action="facteur.php" method="POST"><input name="beton" type="submit" class="imprimer" value="imprimer attestation"></form></a></center>		
		</div>
</div>

</body>
</html>
