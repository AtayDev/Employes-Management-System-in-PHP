<?php
session_start();

include 'getEmplById.php';
$link = mysqli_connect("localhost", "root", "", "GRH");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$codeEmpl=$_SESSION['codeEmpl'];
getEmplById($codeEmpl);
echo "<button class='toggle-btn' onclick='myFunction()'>Modifier</button>";
echo "<form  method='post'>
	<div id='add-empl'>
		<h1>Modifier Votre Compte</h1>
		<input type='text' name='nom' placeholder='Nom'><br>
		
		<input type='text' name='prenom' placeholder='Prenom'><br>
		
		<select name='sexe'>
			<option disabled>Sexe</option>
			<option value='M'>Male</option>
			<option value='F'>Femelle</option>
		</select><br>
		
		<input type='text' name='adresse' placeholder='Adresse'><br>
		
		<input type='text' name='dateNaissance' placeholder='Date de Naissance'><br>
		
		<select name='numService'>
			<option disabled value='Type de Service'>Type de Service</option>
			<option value='1'>Vente</option>
			<option value='2'>Approvisionnement</option>
			<option value='3'>Réclamation</option>
		</select><br>
		<hr style='width: 50%;''>
		<input type='submit' name='submitFormButton' value='Confirmer'><br>
		<a href='allEmpls.php'>List of all employees</a>
	</div>

</form>";





if(isset($_POST["submitFormButton"]))
{
	include 'updateEmpl.php';
}

?>

<style type="text/css">
	body{
	margin: 0;
}



#add-empl{
	display:none;
	width:500px;
	height:auto;
   	text-align: center;
   	padding-top:10px;
   	padding-bottom: 10px;
    border: 1px solid red;
	
	position: absolute;
	left: 50%;
	top: 85%;
	margin: -250px 0 0 -250px;
}

input{
	width:200px;
	padding-top:5px;
	margin-top: 5px; 
}
select{
	width: 208px;
	padding-top:5px;
	margin-top: 5px; 
}

.toggle-btn{
	margin-top: 250px;
	margin-left: 48%;
}


</style>


<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("add-empl");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>

