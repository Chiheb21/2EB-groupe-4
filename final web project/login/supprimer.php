<?php
require('connect.php');

//recupération des données saisies
$Mail=$_POST['Mail'];

$req = "DELETE from students where Email='$Mail'";
mysqli_query($conn,$req);

?>