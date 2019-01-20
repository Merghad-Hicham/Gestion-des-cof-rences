
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
<form method="POST" action="hotel.php">
<table>
<tr>
	<td>Nom:</td><td><input type="text" name="nom" placeholder="Nom de l'hôtel*"/></td>
</tr>
<tr>
	<td>Ville:</td><td><input type="text" name="ville" placeholder="ville*"/></td>
</tr>
<tr>
	<td>Prix:</td><td><input type="text" name="prix" placeholder="Prix par jour*"/></td>
</tr>
<tr>
	<td>Nombre de chambres:</td><td><input type="number" name="nbrc"/></td>
</tr>
<tr>
	<td><input type="submit" name="valider" value="Enregistrer"/></td><td><input type="reset" name="annuler" value="Annuler"/></td>
</tr>
</table>
</form>
<?php 
if(!empty($_POST['valider']))
{
	$nom = $_POST['nom'];$prix = $_POST['prix'];$ville = $_POST['ville'];$nbrc = $_POST['nbrc'];
	$con = mysqli_connect("localhost","root","","projet");
	$res = mysqli_query($con,"insert into hotel values('','$nom','$ville',$prix,$nbrc)");
	echo "<script language='javascript'>alert('Hôtel $nom à été enregistrer avec succées');</script>";
}
?>
</body>
</html>