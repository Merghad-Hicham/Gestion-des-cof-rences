<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type"  content="text/html;  charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sstyle.css">
	 <script src='js/jquery.js'></script>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {

 $( "#tabs" ).tabs();
  
});</script>
<script>
function printContent(el){
var restorepage=document.body.innerHTML;
var printcontent=document.getElementById('el').innerHTML;
document.body.innerHTML=printcontent;
window.print();
document.body.innerHTML=restorepage;
}
</script>
<style type="text/css">

@media print {
	header,.imprimer{
		display: none;
	}
}


</style>


</head>
<body>
<header>
	<div class="container-fluid">
	<div class="row">


			<div id="ggg" class="menu">
				<center><ul>
					<li><a href="gestion.php">Recherche</a> </li>
					<li><a href="attestation.php">attestation</a> </li>
					<li><a href="paiement.php">paiement</a></li>
					
					<li><a href="parametre.php">parametre</a></li>
					<li>menu</li>
				</ul></center>
		</div>
		<div class="dec">
			<ul>
				<li><img src="imag/login.svg"></li>
				<li><a href="conect.php">déconnexion</a></li>
			</ul>
		</div>

	</div>
	<div class="imgd-l">

	</div>
</div></header>