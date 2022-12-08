<?php
$conn = mysqli_connect("localhost", "root", "", "bdprojet");
$val=$_POST['reclamation'];
$sql=mysqli_query($conn,"INSERT INTO reclamation VALUES('$val')");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reclamation</title>
</head> 
<style>
    body{
        background-image: url(background1.avif); 
        background-repeat: no-repeat;   
        background-size: cover;
    } 
    button{
        padding: 10px; 
        background-color: transparent;
    }button a{ 
        text-decoration: none; 
        color: brown;  
        font-size: 20px;

    } 
    .con{
        position:absolute;
        width: 500px; 
        height: 500px;
        top: 15%; 
        left: 35%; 
        background-color: pink; 
        text-align:center; 
        border-radius: 10px;
    } 
    .con span{
        font-size: 25px; 
        text-align: center; 
        margin-top: 120px; 
        color: white; 
        font-family: 'Courier New', Courier, monospace ;
    } .msg{
        margin-top: 120px;
    }
</style>
<body> 
    <script>
        alert("reclamation envoyer avec succés");
    </script> 
    <button><a href="index-home.html">back home page</a> </button> <br>
    <div class="con">
        <div class="msg">
        <span>THANK YOU ! YOU CAN BACK TO HOME PAGE BY CLICKING ON THE BUTTON ABOVE</span>
    </div>
    </div>

    
</body>
</html>