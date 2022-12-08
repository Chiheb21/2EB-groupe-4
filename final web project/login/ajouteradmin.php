<?php
require('connect.php');

//recupération des données saisies
$Mail=$_POST['Mail'];
$mdp=$_POST['Pass'];

$req = "INSERT into admins ( Email, Pass) VALUES ('$Mail','$mdp')";
$res=mysqli_query($conn,$req);
if($res){
    
    
}else echo 'requete non executée';
?>