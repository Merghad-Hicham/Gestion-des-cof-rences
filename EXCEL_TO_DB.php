<?php

// connect to localhost and the database ! 
 require_once("CONNEXION.php");

//deleting data from database
  $reqe = "DELETE  FROM `author`" ;
		//execution de la requette
		mysql_query($reqe);
		
		
	//appel du biblio !	

 include("PHPEXCEL/IOFactory.php");

//importation du fichier EXCEL 
 $objPHPExcel = PHPExcel_IOFactory::load("PARTICIPANT.xlsx");

		//selection du feuil dans le fichier excel
	$worksheet = $objPHPExcel->getSheet(0);

	//recevoir le nombre des lignes dans li fichier excel
	 $highestRow = $worksheet->getHighestRow();


	 for($row=2;$row<=$highestRow;$row++)
	   {		  
	   	//recevoir l'elements de chaque ligne du fichier excel 	  
		$id = mysql_real_escape_string($worksheet->getCellByColumnAndRow(0,$row)->getValue());
		$first_name = mysql_real_escape_string($worksheet->getCellByColumnAndRow(1,$row)->getValue());		
		$last_name = mysql_real_escape_string($worksheet->getCellByColumnAndRow(2,$row)->getValue());			   		
		
		//insertion les info vers la base de donnee
	    $req = "INSERT INTO `author`(`ID`, `FIRST_NAME`, `LAST_NAME`) VALUES ('$id','$first_name','$last_name')";
				 
				 //execution de la requette 
		  $resultat = mysql_query($req) or die(mysql_error());		 
		  
	   if(!$resultat) echo "<br/>Echéc d'importation<br/>";
	   }		   

 mysql_close( $connect);
 ?>