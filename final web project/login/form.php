<?php
require('connect.php');

//recupération des données saisies
$Mail=$_POST['Mail'];
$mdp=$_POST['Pass'];

$req="SELECT Email, Pass From students WHERE Email='$mail' and Pass='$mdp'"
$res=mysqli_query($req);
if (mysqli_num_rows($res)==0)
{
    
    echo"<div>
    <h3> Vous n étes pas inscrit.</h3>
    <p>Cliquer ici pour vous <a href='signup.html'>connecter</a></p>
    </div>";
    
} else 
    


?>
