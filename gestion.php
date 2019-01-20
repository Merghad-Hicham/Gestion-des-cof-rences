<?php include 'header.php'; ?>
<div class="container">
	            <div class="col-lg-12">						
					<center>
							<form action="gestion.php" method="POST">
								<h4>Entrer CIN d'un auteur pour recherecher et pour consulter sur les données de l'auteur <br>et enregistrer le présence<br> </h4> 
								<!--<spann><img src="imag/sarch.svg"></spann>-->
								<input name="cin" type="text" placeholder="Entrer cin pour Rechercher">  <br>
						       <input name="boton" type="submit" value="Rechercher">
						  </form>
					</center>						
					<?php    
					session_start();
					if (empty($_SESSION['clelog'])) {
						header("location:conect.php");
					}
					if(isset($_POST['boton'])){
					 	$cin=$_POST['cin'];
					 	$_SESSION['cin']=$cin; 
					 	if($cin){
					?>
				</div>

				<div class="col-lg-12">
					<?php
					$con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con,"projet");
					$reponse=" SELECT* FROM article as a ,auteur as au, organisation as o where au.cin='".$cin."' and o.cin=au.cin and a.id=o.id_article ";
	                $res = mysqli_query($con,$reponse); 
					//$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
					//$reponse = $bdd->query('SELECT* FROM article as a ,auteur as au, organisation as o where au.cin="'.$cin.'" and o.cin=au.cin and a.id=o.id_article'); 
					//$numrows=mysqli_num_rows($res); 
					if(mysqli_num_rows($res)!=0){


						?> 
					 <center><form action="gestion.php" method="POST">
						<label>les article </label> <br>

							<select name="id">
									<?php
									while($donnees = mysqli_fetch_array($res)){   ?>
									       <option><?php echo $donnees['titre']; ?> 
										<?php   
										}?>
								     </option>
							</select> <br>	     
					   
					    <input name="botton" type="submit" value="ok">
					</form></center>
				</div>
				<div class='col-lg-12'>

							<?php 
                            
							}
							 else {echo "<script language='javascript'>alert('ce  CIN né existe pas dans la base de données  ');</script>";}
                            } 
    
                            else {echo "<script language='javascript'>alert('entrer CIN pour rechercher ');</script>";}
							}
							?> 

							<?php 
							if(isset($_POST['botton'])){
							$cin=$_SESSION['cin'];
							$id=$_POST['id'];
							 $_SESSION['id']=$id;
							$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');         
							$reponse = $bdd->query('SELECT* FROM article as a ,auteur as au, organisation as o 
							where au.cin="'.$cin.'" and o.cin=au.cin and a.id=o.id_article and a.titre="'.$id.'"'); 
							while ($donnees = $reponse->fetch()){ ?>

							<table class="table">
								<thead>
									<tr>
										<th>nom d'auteur</th>
										<th>prénom d'auteur</th>
										<th>titre d'article</th>
										<th>ville d'article</th>
										<th>pays d'article</th>
										<th>présence d'article</th>
										<th>dete d'article</th>
									</tr>
								</thead>
								<th><?php echo $donnees['nom'];?></th>
								<th><?php echo $donnees['prenom'];?></th>
								<th><?php echo $donnees['titre'];?></th>
								<th><?php echo $donnees['ville'];?></th>
								<th><?php echo $donnees['pays'];?></th>
								<th><?php echo $donnees['presence'];?></th>
								<th><?php echo $donnees['datee'];?></th>
			              </table >
			
							<?php

					}


					?>	
							 <center>
							 	 
									<form action="gestion.php" method="POST">
										<h2>inscription de présence d'article </h2>								
										 oui   :<input name="rad" type="radio" value="oui"> 
										 non   :<input name="rad" type="radio" value="non" checked="checked"> <br> <br>
									
									
									 <div class="col-lg-12"><input name="valider" type="submit" value="valider"></div>
									</form>
					 	
			               </center>
							<?php
                   


                   
					}
					  ?></div>

<?php 
if(isset($_POST['valider'])){
                   	     $rad=$_POST['rad'];
                   	     $id=$_SESSION['id'];
                   	    $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');   
                           $rep = $bdd->query('UPDATE `article` SET `presence` = "'.$rad.'" WHERE titre="'.$id.'" ');
                           echo "<script language='javascript'>alert('présence de article est valider');</script>"; 
                        
}

 ?>
					 

 </div>





<?php include 'footer.php'; ?>
