<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
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
<body class="bg-dark" style="overflow:hidden;">
    <div class="row mt-5">
        <div class="col-3 ms-5 p-5 justify-content-end">
           <div class="text-center mx-auto">
           <div> <a href="login.php" class="btn btn-primary mb-3">Log in</a>           </div>
         <div>  <a  href="register.php" class="btn btn-success mb-3">Register</a></div>
          <div>  <a  href="logout.php" class="btn btn-danger mb-3">Log out</a></div>
           </div>
        </div>
        <div class="col-5 mx-auto">
           <div class="card p-5">
           <form action="" method="POST">
             <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
             <div class="mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control">
            </div>
            <div  class="mt-5 "><a href="#" type="submit" class="btn btn-dark float-end" >Log in</a></div>
           </div>
           </form>
        </div>
    </div>
</body>
</html>