<?php

$link = mysqli_connect("localhost", "root", "", "GRH");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$sexe = mysqli_real_escape_string($link, $_REQUEST['sexe']);
$adresse = mysqli_real_escape_string($link, $_REQUEST['adresse']);
$dateNaissance = mysqli_real_escape_string($link, $_REQUEST['dateNaissance']);
$numService= mysqli_real_escape_string($link, $_REQUEST['numService']);



// Attempt insert query execution
$sql = "INSERT INTO employes (nom,prenom,sexe,adresse,dateNaissance,numService) VALUES ('$nom', '$prenom', '$sexe', '$adresse', '$dateNaissance','$numService')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
