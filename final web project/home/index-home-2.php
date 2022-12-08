<?php 

$conn = mysqli_connect("localhost", "root","", "bdprojet");
$type = $_POST["selecttype2"];
$nom = $_POST["search-course-name"];
$level = $_POST["r1"];
if (isset($type) || isset($nom) || isset($level))
    echo ('');
    
$sql = mysqli_query($conn,"select course_type,course_name,course_level from coursajouter 
WHERE  course_type='$type' AND course_name='$nom' AND course_level='$level'"
);  
if( mysqli_num_rows($sql)==0){

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head> 
<Style> 
body{
    background-image: url(background1.avif); 
        background-repeat: no-repeat;   
        background-size: cover;
}
    .afficher{ 
        position:absolute;
        width: 500px; 
        height: 500px;
        top: 15%; 
        left: 35%; 
        background-color: lightgoldenrodyellow; 
        text-align:center; 
        border-radius: 10px;
        

        
    } 
    .pos{
        margin-top: 180px;
    }
    span{
        font-size: 35px; 
        font-family: 'Courier New', Courier, monospace; 
        margin-top: 20px; 
        font-weight: bold; 
    } 
    button {
        background-color: lightsalmon; 
        color:lightgoldenrodyellow;  
        padding: 8px; 
        border-radius: 5px;
    } 
    button :hover{ 
         background-color: lightgoldenrodyellow; 
        color:pink;  
        background-color: transparent; 
        
        cursor: pointer;

    }
     button a{
        background-color: none; text-decoration: none; 
        color: white;
     } 
     
     
</Style>
<body>  
    <div class="afficher"> 
        <div class="pos">
         <span id="1">there isn't any course !</span> <br>
         <span id="2"> try to search for other</span> <br>
         <button> <a href="index-home.html">BACK HOME</a> </button></div>
    </div>

      
    <?php } else{?> 
     <div style=" background-color: bisque; border-radius: 15px;  position:absolute;top: 15%; left: 35%;  width: 500px; 
        height: 500px;">
<table style="border: 1px solid black; border-collapse: collapse; margin-left:100px; margin-top: 20px;" > 
    <tr style="border: 1px solid black; border-collapse: collapse; background-color:lightblue;">
        <td style=" color:white;border: 1px solid black; border-collapse: collapse;">nom de la cours</td>
        <td style="color:white; border: 1px solid black; border-collapse: collapse;">type de la cours</td>
        <td style="color:white; border: 1px solid black; border-collapse: collapse;">niveau de cours</td>
        </tr>  
        <?php while ($ligne = mysqli_fetch_array($sql)) { ?>
        <tr>
            <td style=" color:white;border: 1px solid black; border-collapse: collapse;"><?php echo $ligne["course_name"] ?></td>
            <td style="color:white;border: 1px solid black; border-collapse: collapse;"><?php echo $ligne["course_type"] ?></td>
            <td style="color:white;border: 1px solid black; border-collapse: collapse;"><?php echo $ligne["course_level"] ?></td>
        </tr> 
        <?php }} ?>
</table> 
</div>
    
</body>
</html>
