<?php
function deleteEmploye($parameter){
$link = mysqli_connect("localhost", "root", "", "GRH");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="DELETE FROM EMPLOYES WHERE code= $parameter";

if (mysqli_query($link, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);
}
?>