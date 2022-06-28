<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register PHP</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="" style="overflow:hidden;">
    <div class="row mt-5 px-5">
        <div class="col-5 mx-5 p-5 justify-content-end">
           <div class="text-center mx-auto">
           <div> <a href="login.php" class="btn btn-primary mb-3">Log in</a>           </div>
         <div>  <a  href="register.php" class="btn btn-success mb-3">Register</a></div>
          <div>  <a  href="logout.php" class="btn btn-danger mb-3">Log out</a></div>
           </div>
        </div>
        <div class="col-5  mx-auto" >
                <div class="card p-5">
                    <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword">
                    </div>
                    <button  type="submit" class="btn btn-dark float-end" name="register">Register</button>

                </form>
                </div>
    </div>
    <br>
 <?php
    if(isset($_POST["register"])){
      $name=$_POST["name"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $hashPassword=password_hash($password,PASSWORD_BCRYPT);
      $confirmPassword=$_POST["confirmPassword"];
      if($name!="" && $email!="" && $password!="" && $confirmPassword!=""){
        if(strlen($password)>=6 && strlen($confirmPassword)>=6){
           if(password_verify($confirmPassword,$hashPassword)){
             echo "<br>";
            echo "You logged in successfully!";
           }else{
             echo "<br>";
            echo "You enter wrong passwords";
           }
        }else{
            echo "<br>";
            echo "Your password should have at leat 6 character.";
        }
      }else{
       echo "<br>";
          echo "You must fill in all fields!";
      }
    }
    ?>
</body>

</html>

   