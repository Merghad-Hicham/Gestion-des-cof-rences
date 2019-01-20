


<?php

// connect to localhost and the database ! 
$connect = mysqli_connect("localhost","root","","projet");


	//appel du biblio !

		
 include("PHPEXCEL/IOFactory.php");
    


//importation du fichier EXCEL 
 $objPHPExcel = PHPExcel_IOFactory::load("file.xlsx");
 
 //deleting data from database
 
		 	//auteur
		 	//importation du fichier EXCEL 
		 	  

		 	  
		 	 $r = "DELETE  FROM `auteur`" ;
		    //execution de la requette

		      mysqli_query($connect,$r);
		
     
		 	$worksheet = $objPHPExcel->getSheet(2);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();


	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	
	   
		$id_a = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$nom = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());	
		$prenom= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		///$email = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());	
		$tel = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());
		$type_participent  = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(4,$row)->getValue());
		
				   		
		
		//insertion les info vers la base de donnee
	    $re = "INSERT INTO `auteur`(`cin`, `nom`, `prenom`, `role`,`type_participent`) VALUES ('$id_a','$nom','$prenom','$tel','$type_participent')";
				 
				 //execution de la requette 
		 		mysqli_query($connect,$re);
		 	}

		 

		//conference
		 	//importation du fichier EXCEL 
 

		 	 $rc = "DELETE  FROM `article`" ;
		//execution de la requette

		mysqli_query($connect,$rc);
		
		 	$worksheet = $objPHPExcel->getSheet(1);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();


	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	  
		$id = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$title = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());
		//$type = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$affiliation = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$ville = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());
		$pays= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(4,$row)->getValue());
		$date = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(5,$row)->getValue());
		$present = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(6,$row)->getValue());		
				$connect->set_charset("utf8");   		
		
		//insertion les info vers la base de donnees
	    $q ="INSERT INTO article (`id`,`titre`,`affiliation`,`ville`,`pays`,`datee`,`presence`) 
	    VALUES('$id','$title','$affiliation','$ville','$pays','$date','$present')";
				 
				 //execution de la requette 
		 		mysqli_query($connect,$q);
		 	}

		 	//date
		 	//importation du fichier EXCEL 
 $objPHPExcel = PHPExcel_IOFactory::load("file.xlsx");

		 	 $red = "DELETE  FROM `organisation`" ;
		//execution de la requette

		mysqli_query($connect,$red);
		
		 	$worksheet = $objPHPExcel->getSheet(3);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();

	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	  
		//$id = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$cin = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());
		$id_article = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		
		
		//insertion les info vers la base de donnees
	    $qd = "INSERT INTO `organisation`(`cin`,`id_article`) 
	    VALUES ('$cin','$id_article')";
				 
				 //execution de la requette 
		 		mysqli_query($connect,$qd);
		 	}



		//presentateur
		 	//importation du fichier EXCEL 
 $objPHPExcel = PHPExcel_IOFactory::load("file.xlsx");

		 	 $rep = "DELETE  FROM `paiement`" ;
		//execution de la requette

		mysqli_query($connect,$rep);
		
		 	$worksheet = $objPHPExcel->getSheet(0);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();


	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	  
		$id_art = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$ciin = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());	
		$etat_paiement= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$dilibration= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());
		
				$connect->set_charset("utf8");   		
		
		//insertion les info vers la base de donnees
	    $qp="INSERT INTO `paiement`(`id_article`,`cin`,`etat_paiement`,`delivration`) VALUES ('$id_art','$ciin','$etat_paiement','$dilibration')";
				 
				 //execution de la requette 
		 		mysqli_query($connect,$qp);
		 	}



		 		//presentation
		 	//importation du fichier EXCEL 
 $objPHPExcel = PHPExcel_IOFactory::load("file.xlsx");

		 	 $repr = "DELETE  FROM `attestation`" ;
		//execution de la requette

		mysqli_query($connect,$repr);
		
		 	$worksheet = $objPHPExcel->getSheet(4);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();


	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	  
		$idd = mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$id_artic= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(1,$row)->getValue());	
		$delivraton= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(2,$row)->getValue());
		$date= mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(3,$row)->getValue());
		
				$connect->set_charset("utf8");   		
		
		//insertion les info vers la base de donnees
	    $qpr = "INSERT INTO `attestation`(`id`, `id_article`,`delivrationA`,`date_delivration`) VALUES ('$idd','$id_artic','$delivraton','$date')";
				 
				 //execution de la requette 
		 		mysqli_query($connect,$qpr);
		 	}

	   	 
echo "<script language='javascript'>alert('importation de fichier excel dans la base de données est valider');</script>";
		 	
 ?>
 
