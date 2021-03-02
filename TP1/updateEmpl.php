<?php

$codeEmpl=$_SESSION['codeEmpl'];


$link = mysqli_connect("localhost", "root", "", "GRH");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$sexe = mysqli_real_escape_string($link, $_REQUEST['sexe']);
$adresse = mysqli_real_escape_string($link, $_REQUEST['adresse']);
$dateNaissance = mysqli_real_escape_string($link, $_REQUEST['dateNaissance']);
$numService= mysqli_real_escape_string($link, $_REQUEST['numService']);


$sql="UPDATE Employes SET nom='$nom', prenom='$prenom', sexe='$sexe', adresse='$adresse', dateNaissance='$dateNaissance', numService='$numService' WHERE code='$codeEmpl'";
if (mysqli_query($link, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($link);
}

mysqli_close($link);

?>
