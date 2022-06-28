<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client PHP</title>
</head>
<body>
    <h1>Client Site</h1>
    <!--Get || Post-->
    <a href="./server.php?name=maythinkyi&age=19&address=yangon">Server Site</a>
    <!--Post method is only availiable in Form-->
    <form action="./server.php" method="post" enctype="multipart/form-data" >
        First Name <input type="text" name="first-name"><br>
        Second Name <input type="text" name="second-name"><br>
        Gender: <select name="gender" id="">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> <br>
        Send Photo <input type="file" name="photo" id=""><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>