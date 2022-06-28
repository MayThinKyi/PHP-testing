<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>
<body>
<h1>File Upload Testing</h1>
   <form action="" method="post" enctype="multipart/form-data">
   First Name <input type="text" name="first-name"><br>
   Second Name <input type="text" name="second-name"><br>
   <br>
   <input type="file" name="choose-file" id=""><br>
   <button type="submite" name="send-file">Send</button>

   </form>
   <?php
  if(isset($_POST["send-file"])){
  
   $imgName=$_FILES["choose-file"]["name"];
   $imgTmp=$_FILES["choose-file"]["tmp_name"];
   $target_file="image/". $imgName;
   if( move_uploaded_file($imgTmp,$target_file)){
       move_uploaded_file($imgTmp,$target_file);
       echo "Success Uploading";
   }else{
      echo "Failed to upload!...";
   }
   
  }
   ?>
</body>
</html>