<?php
require('connect.php');

//recupération des données saisies
$Mail=$_POST['Mail'];
$mdp=$_POST['Pass'];

$req = "INSERT into students ( Email, Pass) VALUES ('$Mail','$mdp')";
$res=mysqli_query($conn,$req);
if($res){
    echo "<div>
    <h3> ajouté avec succes </h3>
    
    </div>";
    
}else echo 'requete non executée';
?>
