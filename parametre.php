
 <?php include 'header.php'; ?>
<div class="contaier">
			<div class="col-lg-4">
				entrer les hotel résérver pas confirence					
				<form method="POST" action="parametre.php">
                          Nom  :    <input type="text" name="nom" placeholder="Nom de l'hôtel*"/> <br>   
                        Ville  :    <input type="text" name="ville" placeholder="ville*"/><br>    
                        Prix   :    <input type="text" name="prix" placeholder="Prix par jour*"/><br>    
                        Nombre de chambres:    <input type="numbre" name="nbrc"/> <br>   
                        date de entrer:    <input type="date" name="date"/> <br>
                   <input type="submit" name="valider" value="Enregistrer"/>    <input type="reset" name="annuler" value="Annuler"/>    

               </form>
<?php 
      if(!empty($_POST['valider'])){
	  $nom = $_POST['nom'];$prix = $_POST['prix'];$ville = $_POST['ville'];$nbrc = $_POST['nbrc'];$date = $_POST['date'];
	  $con = mysqli_connect("localhost","root","","projet");
	  $res = mysqli_query($con,"insert into hotel values('','$nom','$ville','$prix','$nbrc','$date')");
	  echo "<script language='javascript'>alert('Hôtel  à été enregistrer avec succées');</script>";
     }
?>			
			</div>		
		       <div class="col-lg-4">				
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
                 echo "<script language='javascript'>alert('activité à été enregistrer avec succées');</script>";   

               }
               }
 ?>		
	              <form action="parametre.php"  method="post">
		                       entrer les activité contient dans c'est confirence
                       
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
	<div class="col-lg-4">
		prix et le type des auteur
<?php
       $No="null";
         if(isset($_POST['typearticle'])){	
 	        $Nom=$_POST['Nom']; 	
 	         $prix=$_POST['prix'];    
         if($Nom&&$prix){    
            $connect=mysql_connect('localhost','root','');
            mysql_select_db("projet");
            $rep=mysql_query("insert into type_article values('','$Nom','$prix')");
             echo "<script language='javascript'>alert(' les type des auteurs et les prix à été enregistrer avec succées');</script>"; 
          }
          }
 ?>		
	              <form action="parametre.php"  method="post">
		                    <div class="col-lg-12">
			                    <div class="col-lg-3"><label>Nom</label></div> 
			                    <div class="col-lg-8"><input name="Nom" type="text" placeholder="Nom"></div>
	                        </div>	    
	                        <div class="col-lg-12">
			                    <div class="col-lg-3"><label>prix</label></div> 
			                    <div class="col-lg-8"><input name="prix" type="text" placeholder="prix">
		                    </div>
	                        </div>
		                    <div class="col-lg-12"><center><input name="typearticle" type="submit" value="inscription"></center></div>
	              </form>
        </div>
     <div class="col-lg-4">
        <form action="parametre.php"  method="post">
		<div class="col-lg-12">
			<div class="col-lg-3"><label><MAP>MODELE :</MAP></label></div> 
			<div class="col-lg-8"><input name="model" type="text" placeholder="Nom"></div>
	    </div>
	    
	    <div class="col-lg-12">
			<div class="col-lg-3"><label>text :</label></div> 
			<div class="col-lg-8"><input name="pr" type="text" placeholder="prix">
		</div>
	    </div>
		<div class="col-lg-12"><center><input name="modele" type="submit" value="inscription"></center></div>
	</form>
	<?php
$No="null";
if(isset($_POST['modele'])){	
 	$model=$_POST['model']; 	
 	$text=$_POST['pr'];     
   if($model&&$text){    
      $connect=mysql_connect('localhost','root','');
      mysql_select_db("projet");
     $rep=mysql_query("insert into modele_attestation values('','$model','$text')");
     echo "<script language='javascript'>alert(' les modeles des attestation à été enregistrer avec succées');</script>";
   }
}
	 ?>
</div>
<div class="col-lg-12">
        <form action="parametre.php"  method="post">
		
	    
	    
		<div class="col-lg-12"><center><input name="importation" type="submit" value="importation fichier"></center></div>
	</form>
	<?php

if(isset($_POST['importation'])){	
 	    include 'db.php';
   
}
	 ?>
</div>
<div class="col-lg-4">
		modifier password et username
<?php
         if(isset($_POST['modifier'])){	
 	        $username=$_POST['username']; 	
 	         $password=$_POST['password'];    
         if($username&&$password){    
            $connect=mysql_connect('localhost','root','');
            mysql_select_db("projet");
            $rep=mysql_query("UPDATE `admin` SET `username`='$username',`password`='$password'");
             echo "<script language='javascript'>alert('modification de username et de mot de passe est validier');</script>"; 
          }
          }
 ?>		
	              <form action="parametre.php"  method="post">
		                    <div class="col-lg-12">
			                    <div class="col-lg-3"><label>Nom</label></div> 
			                    <div class="col-lg-8"><input name="username" type="text" placeholder="Entrer usrname"></div>
	                        </div>	    
	                        <div class="col-lg-12">
			                    <div class="col-lg-3"><label>prix</label></div> 
			                    <div class="col-lg-8"><input name="password" type="password" placeholder="Entrer password">
		                    </div>
	                        </div>
		                    <div class="col-lg-12"><center><input name="modifier" type="submit" value="inscription"></center></div>
	              </form>
        </div>

</div>

 <?php include 'footer.php'; ?>