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
      $email= $_POST["email"];
      $mobileno= $_POST["mobno"];
      $passwor= $_POST["pwd"];
    $sql = "INSERT INTO user(username, email, mobileno, pass_word) VALUES ('$username','$email','$mobileno','$passwor')";
    if ($connect->query($sql)) {
        echo "Table Student created successfully";
      } else {
        echo "Error creating table: ";
      }
      $connect->close();
    ?>
</body>
</html>