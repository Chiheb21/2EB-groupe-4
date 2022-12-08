<?php
$conn = mysqli_connect("localhost", "root", "","bdprojet");

if (isset($_POST['s1'])) 
    echo "";
    else ($typedecours = $_POST['s1']);


    if (isset($_POST['add-course-name']))echo"";

        else $namecourse =$_POST['add-course-name'];

isset($_POST['r']);
     $levelcourse = $_POST['r'];
    


//$sql=mysqli_query( $conn,"INSERT INTO coursajouter VALUES('$typedecours','$namecourse','$levelcourse')"); 

?> 

    <!DOCTYPE html> 
    <html>
    <head>
    <title></title> 
    <style>
        
    </style>
    
 </head> 
 <body style="background-image: url(background1.avif); background-repeat:no-repeat ; 
 background-size: cover;"> 
 <button style="background-color:transparent ;"><a href="index-home.html"  style=" color:white; font-size:20px;text-decoration: none; padding: 15px; top: 0;">BACK HOME</a></button>

    
 
    <div style="width:500px; height: 500; border:1px black solid; border-radius:6px;
    background-color: #24262b6d; 
    margin-top:100px; margin-left: 560px;  "> 
            <div style="margin-top:220px; margin-left:10px;">
        <span style=" color:#fff ;text-align: center; font-size: 36px; 
        font-family: Verdana, Geneva, Tahoma, sans-serif;"> successfully!!<br>the course has been add</span>
    </div>
</div>  
</body>
</html> 
