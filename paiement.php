
<?php include 'header.php'; ?>

<div class="container">
	<div class="col-lg-12">
		
		<center>
			<form action="paiement.php" method="post">
				<h4>entrer CIN pour paier et pour dilibrer facture </h4>
					
				<!--<spann><img src="imag/sarch.svg"></spann>-->
				<input name="cin" type="text" placeholder="Entrer cin pour Rechercher"><br>
		    		    
		    <input name="boton" type="submit" value="Rechercher">
		   </form>
	    </center>
	    </div>
		<?php    
			session_start();
			if (empty($_SESSION['clelog'])) {
				header("location:conect.php");
			}?>
				<?php

			if(isset($_POST['boton'])){
				
			 	$_SESSION['cin']=$_POST['cin']; 
			 	$cin=$_SESSION['cin'];
			 	if($cin){
						?>
	
				   <div class="col-lg-12">

					<?php 
	    $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,"projet");
		$reponse="SELECT * FROM auteur as au ,article as a ,type_article as t,organisation as o,paiement as p 
		where au.cin='".$cin."' and a.id=p.id_article  and t.id=au.type_participent  and o.cin=au.cin and o.id_article=a.id ";
	    $res = mysqli_query($con,$reponse);
					//$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
					//$reponse = $bdd->query('SELECT* FROM auteur as au ,article as a ,type_article as t,service as s,organisation as o 
					//where au.cin="'.$cin.'" and a.titre=s.nom_article and au.cin=s.cin and t.id=a.type and o.cin=au.cin and o.id_article=a.id '); 

               if(mysqli_num_rows($res)!=0){
					?>
					
					   <table class="table table-striped" >
 	                     <?php 	 
							while($donnees = mysqli_fetch_array($res)){ ?> 
					   	 <thead>
						      <tr>
						        <th>nom de auteur</th>
						        <th>prénom de auteur</th>
						        <th>titre d'article </th>
						        
						        <th>type d'auteur</th>
						        <th>prix d'article </th>
						        <th>article paier ou non </th>
						        <th>délevration de factur</th>
						      </tr>

						    </thead>
						     <tr>
						        <th><?php echo $donnees['nom']         ?></th>
						        <th><?php echo $donnees['prenom']      ?></th>
						        <th><?php echo $donnees['titre']       ?></th>						        
						        <th><?php echo $donnees['type_article']?></th>
						        <th><?php echo $donnees['prix']        ?></th>
						        <th><?php echo $donnees['etat_paiement']?></th>
						        <th><?php echo $donnees['delivration']  ?></th>
						      </tr>
						     <?php 
						     $_SESSION['prix']=$donnees['etat_paiement'] ;
						     $_SESSION['id_article']=$donnees['id_article'] ;
				                 }
								
								?>

						   
					    </table ><br><br>
					
					<center> <h4>espace des paiement de article et de hotel et de activite .</h4>
						<form action="paiement.php" method="post">
							<div id="tabs">
								  <ul>
								    <li><a href="#tabs-1">article</a></li>
								    <li><a href="#tabs-2">Hotel</a></li>
								    <li><a href="#tabs-3"> activité</a></li>
								  </ul>
								  <div id="tabs-1">
                                     
                                   


		<?php 
		$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
		$reponse = $bdd->query("SELECT * FROM organisation as o , auteur as au ,article as a
		where au.cin='".$cin."' and o.cin=au.cin and o.id_article=a.id  ;"); ?>
		 paiement  d'article <br><br><br>
								  	oui   :<input type="radio" name="radio" value="oui">
								  	non   :<input type="radio" name="radio" value="non" checked="checked"><br>
								  	<br> 
		<table> 
			
				
					<center><label>les article </label><br>
					<select name="id">
				   <?php 

				   
					while ($donnees = $reponse->fetch()){   ?>	
				   	<option><?php echo $donnees['titre']?>	    
					<?php   
					 
				     }
				     ?>
				     </option>
				     </select>
				     </center>
				
				
			</table>
			
	                               
                             
                                  
								  </div>

								  <div id="tabs-2">
								  	
								  	<div>
								  		<h3>Vous voullez l'hotel?</h3>
								  		oui   :<input type="radio" name="radio1" value="oui"  >
								  	    non   :<input type="radio" name="radio1" value="non" checked="checked"> <br> <br>
                                       
								  	</div>
								  	<div class="hotel">
								  		
								  		<select name="hotel">
								  			<?php
								  			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
		                                $reponse = $bdd->query("SELECT * FROM hotel ;"); 
		              					while ($donnees = $reponse->fetch()){  
		              						 
		              					 ?>	
				   	                      <option><?php echo $donnees['nom_hotel']?>
				   	                      	</option>								  							  		
									  	</select><br><br><br>
				   	                      	<?php
				   	                      	echo "le nombre de chambre total :".$donnees['nombre_chambre'];?> <br><br>
				   	                      	<?php echo " le prix de chaque chambre :".$donnees['prix_hotel'];
				   	                      }	  
								  		?>
				   	                  
									  	<!--<select >
									  		<option> nomber de chambr plus prix</option>
									  		<option> 1 => 20$</option>								  		
									  		<option> 2</option>								  		
									  		<option> 3</option>								  		
									  	</select><br>
									  	<h4>Vous seul ?   'chaque personne dans la chambr'</h4>
									  	oui   :<input type="radio" name="radio2" value="oui"  >
								  	    non   :<input type="radio" name="radio2" value="non" checked="checked"> <br> <br>-->
								  	    </div>
                                   
								    </div>
								   
								  	

								  
								  <div id="tabs-3">
								  	
								  <h3>	Vous voullez une activité  ?</h3>
								  	oui  :<input type="radio" name="radio3" value="oui">
								  	non  :<input type="radio" name="radio3" value="non" checked="checked"> <br> <br>
								  	<select name="activite">
								  		<?php
								  			$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
		                                $reponse = $bdd->query("SELECT * FROM activite ;"); 
		              					while ($donnees = $reponse->fetch()){  
		              						
		              					 ?>	
				   	                      <option><?php echo $donnees['type_activite']?>
				   	                      	</option>								 
								 	</select> <br>
								 	<span>prix: <?php echo $donnees['prix_activite']." DH"?></span>
				   	                      	<?php

				   	                      }	  
								  		?>
				   	                  
								  	 							
								
								</div>
                      							
						<input name="energistrer" type="submit" value="energistrer">
                       </div>
					</form>
                     
					
                     
					
					
				   </center>
                        </div>

						<?php
						} else {echo "<script language='javascript'>alert('ce  CIN né existe pas dans la base de données  ');</script>";}
					 } else {echo "<script language='javascript'>alert('entrer CIN pour rechercher ');</script>";}
					}
				?>
				<?php 
                     if(isset($_POST['energistrer'])){
                     	
                     	 $ciin=$_SESSION['cin'];
                     	 $id_article=$_POST['id'];
                     	 $id_hotel=$_POST['hotel'];
                     	 $id_activite=$_POST['activite'];
                     	 $radio=$_POST['radio'];
                     	 $radio1=$_POST['radio1'];                     	
                     	 $radio3=$_POST['radio3'];

                   $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');

                   if($_SESSION['prix']=="non"){
                   $rep = $bdd->query("UPDATE `paiement` SET `etat_paiement`='$radio',`cin`='$ciin'  WHERE id_article='".$_SESSION['id_article']."'");
                   	}


                 if ($radio1=="oui"||$radio3=="oui"){


		       $re = $bdd->query("INSERT INTO `service`(`idd`,`cin`,`nom_hotel`, `paiement_hotel`, `type_activite`, `paiement_activite`, `delivration`, `nbr_chambre`) 
		            	VALUES ('','$ciin','$id_hotel','$radio1','$id_activite','$radio3','',1)"); 
                  
                   
          } echo "<script language='javascript'>alert('les paiements de article et de hotel et de activité est valider');</script>";
                   ?>
                   <CENTER><form action="facteur.php" method="post" targt="_blank">							
						<input name="beton" type="submit" value="imprimer facture">
					</form></CENTER>
					<?PHP
                     }
   					 ?>
                 </div>

				<?php include 'footer.php'; ?>


	
