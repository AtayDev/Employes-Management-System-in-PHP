<?php
$link = mysqli_connect("localhost", "root", "", "GRH");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$login = mysqli_real_escape_string($link, $_REQUEST['login']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);


	
$sql="SELECT * FROM users WHERE login='$login'AND password='$password'";
$result = mysqli_query($link,$sql);
	
$count  = mysqli_num_rows($result);

if($count==0) {
	header("Location:index.php");
	exit();

} else {
	
	header("Location:allEmpls.php");
	exit();
}

mysqli_close($link);


?>