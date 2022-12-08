<?php 
// Information d'identiication 
define('serveur','localhost');
define('utilisateur','root');
define('motsdepasse','');
define('base','Studenty');

// Connexion a la BD 
$conn = mysqli_connect(serveur, utilisateur, motsdepasse, base);

//Verification de la connexion
if($conn===false){
    die("ERREUR: probléme de connexion. " . mysqli_connect_error());
}
?>
