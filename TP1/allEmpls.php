<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "GRH");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="SELECT * FROM Employes";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table>
			 <tr>
		      <th>Code</th>
		      <th>Nom</th>
		      <th>Prenom</th>
		      <th>Sexe</th>
		      <th>Adresse</th>
		      <th>Date de Naissance</th>
		      <th>Num de Service</th>
		      <th>DELETE</th>
		      <th>MODIFIER</th>
		    </tr>
		    <tbody>
";

    while($row = mysqli_fetch_assoc($result)) {
    $id=$row["code"];
    echo "<tr>";
    echo "<td>".$row["code"]."</td>";
    echo "<td>" . $row["nom"] ."</td>";
    echo "<td>" . $row["prenom"] ."</td>";
    echo "<td>" . $row["sexe"]. "</td>";
    echo "<td>" . $row["adresse"]."</td>";
    echo "<td>" . $row["dateNaissance"]."</td>";
    echo "<td>" . $row["numService"]."</td>";
    echo "<td><form method='post'>
			<button name='$id'>Delete</button><br>
		</form></td>";

	echo "<td><form method='post'>
		<button name='test$id'>Modifier</button>
			
		</form></td>";
	

   
    if(isset($_POST[$id]))
	{	 
		require 'delEmpl.php';
		deleteEmploye($id);
	}
	
	if(isset($_POST['test'.$id]))
	{
		require 'getEmplById.php';
		header("Location:editEmpl.php");
		$_SESSION['codeEmpl'] = $id;
		
		exit();
		
		
	}

  
  }
     	echo "</tbody>";
    echo "</table>";
} else {
  echo "0 results";
}



 

echo "<a href='formAddEmpl.php'>Add new employees</a>";
// Close connection
mysqli_close($link);

?>


<style type="text/css">
table {
  border-collapse: collapse;
}

td, th {
  border: 1px solid #999;
  padding: 0.5rem;
  text-align: left;
}

</style>