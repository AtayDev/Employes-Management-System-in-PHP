<?php
function getEmplById($parameter){
	$link = mysqli_connect("localhost", "root", "", "GRH");
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$sql="SELECT * FROM Employes WHERE code=$parameter";
	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	    $id=$row["code"];
	    echo "<div class='container'>";
	    echo "<h1>Mes informations</h1>";
	    echo "Code: " . $row["code"] ."<br>";
	    echo "Nom:" . $row["nom"] ."<br>";
	    echo "Prenom:" . $row["prenom"] ."<br>";
	    echo "Sexe:" . $row["sexe"]. "<br>";
	    echo "Adresse:" . $row["adresse"]."<br>";
	    echo "Date de Naissance:" . $row["dateNaissance"]."<br>";
	    echo "NumService:" . $row["numService"]."<br>";
	   	echo "</div>";


	  
	  }
	} else {
	  echo "0 results";
	}

	 

	
	// Close connection
	mysqli_close($link);
}

?>

<style type="text/css">
	
	.container{
	width:300px;
	height:auto;
   	text-align: center;
   	padding-top:10px;
   	padding-bottom: 10px;
    border: 1px solid red;
	
	position: absolute;
	left: 50%;
	top: 25%;
	margin: -150px 0 0 -150px;
	}


</style>

