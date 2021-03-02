<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Adding Employees</title>
</head>
<body>
<form action="formAddEmpl.php" method="post">
	<div class="add-empl">
		<h1>Créer un compte employée</h1>
		<input type="text" name="nom" placeholder="Nom"><br>
		
		<input type="text" name="prenom" placeholder="Prenom"><br>
		
		<select name="sexe">
			<option disabled>Sexe</option>
			<option value="M">Male</option>
			<option value="F">Femelle</option>
		</select><br>
		
		<input type="text" name="adresse" placeholder="Adresse"><br>
		
		<input type="text" name="dateNaissance" placeholder="Date de Naissance"><br>
		
		<select name="numService">
			<option disabled value="Type de Service">Type de Service</option>
			<option value="1">Vente</option>
			<option value="2">Approvisionnement</option>
			<option value="3">Réclamation</option>
		</select><br>
		<hr style="width: 50%;">
		<input type="submit" name="submitFormButton" value="Ajouter"><br>
		<a href="allEmpls.php">List of all employees</a>
	</div>

</form>
<?php
if(isset($_POST["submitFormButton"]))
{
	include 'valAddEmpl.php';
}
?>

</body>
</html>