<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $s="localhost";
    $u="root";
    $p="";
    $d="education";
    $connect=new mysqli($s,$u,$p,$d);
    
    if($connect)
    {
        echo "connected to database<br>";
    }
    else
        echo "not connected to database<br>";
    // $sql = "CREATE DATABASE myDB"; 
    // $connect->query($sql); 
      $username= $_POST["username"];
      $passwor= $_POST["pwd"];
      $sql = "Select * from user where username='$username' AND pass_word='$passwor'";
      
    if ($result = $connect->query($sql)) {
        $num = mysqli_num_rows($result);
        if($num>0)
        {echo "succesfully login";}
        
       else {
        echo "Not found";
      }
    }
      $connect->close();
    ?>
</body>
</html>