<?php
if(isset($_POST["email"])) {
    require 'DB1.php';
    extract($_POST);


    $sql = "INSERT INTO `users`(`user_id`, `names`, `email`, `password`) VALUES 
                                (NULL ,'$names','$email','$password')";
    mysqli_query($conn, $sql);


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register user</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container"style="background-color:darkviolet">
    <div class="row justify-content-center">

        <div class="col-sm-6">

            <div class="card"style="background-color:darkgray">

                <div class="card-header"style=">
                   LOGIN
                </div>
                <div class="card_body">
                    <form action="form.php" method="post" enctype="multipart/form-data">
                        <div class="form-group"style="text-emphasis-color: red">
                            <label for="names"> Names</label>
                            <input type="text" class="form-control" name="names" id="names">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="Email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password"id="password"name="password"class="form-control-lg rounded-0">

                        </div>

                        <button class="btn btn-info btn-block">SUBMIT</button>

                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

</div>
</body>
</html>




































