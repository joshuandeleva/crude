<?php
if(isset($_POST["email"])) {
    require 'DB1.php';
    extract($_POST);


    $sql = "SELECT * from users where email='$email' and password='$password' LIMIT 1";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) ==1){
        //echo"SUCCESS";
        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:show.php");
    }else{
            $message="Wrong username or password";
    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container"style="background-color:darkviolet">
    <div class="row justify-content-center">

        <div class="col-sm-6">

            <div class="card"style="background-color:darkgray">

                <div class="card-header">
                   LOGIN
                </div>
                <div class="card_body">
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <br>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" id="password" name="password" class="form-control">

                    </div>

                    <button class="btn btn-info btn-block">Sign in</button>

                </form>
            </div>
        </div>

    </div>

</div>

</div>

</div>
</body>
</html>





































