<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server PHP</title>
</head>
<body>
    <h1>Server Site</h1>
   <?php
   echo "<pre>";
   var_dump($_REQUEST);
   echo "<br>";
   echo "My name is ".$_REQUEST["first-name"]." ".$_REQUEST["second-name"];
   echo "<br>";
   echo "Gender is ".$_REQUEST["gender"];
    echo "<br>";
   var_dump($_FILES);
   ?>
    
</body>
</html>