<?php
if(isset($_POST["price"]))
{
    require 'DB1.php';
    extract ($_POST);
// echo "$Title $price $Quantity $Genre ";
    $target_dir = "uploads/";
    $unik=rand(100000,200000);
    $unik_2=rand(5000000,10000000);
    $joined=$unik."_".$unik_2;
    $ext=pathinfo( basename($_FILES["cover"]["name"]),4);

    /* if ($ext !="png" or $ext !="jpg" or $ext !="jpeg")
    {
    echo "invalid file text";
    die();
    }*/
    /* echo $ext;
    die();*/

    $target_file = $target_dir .$joined. ".".$ext;

    if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
//save to db
        $sql="INSERT INTO `movies`(`movie_id`, `title`, `genre`, `quantity`, `price`, `cover` , `user_id`) VALUES 
                                        (null ,'$title','$genre','$quantity','$price' ,'$target_file',1)";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
    }else {
//error msg
        $message= "failed to upload movie";
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<?php
require 'navbar.php';
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card"></div>

            <div class="card-header">
                Add a new movie
            </div>
            <div class="card-body">

                <?php

                if (isset ($message))
                    echo "<P class='text-danger'> $message</P>"
                ?>

                <form action="save.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text " class="form-control" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Genre</label>
                        <select name="genre" id="" class="form-control">
                            <option value="horror">horror</option>
                            <option value="documenntary">documentary</option>
                            <option value="action">action</option>
                            <option value="romance">romance</option>
                            <option value="sci-fix">sci-fix</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">quantity</label>
                        <input type="number " class="form-control" name="quantity" required>
                    </div>

                    <div class="form-group">
                        <label for="title">price</label>
                        <input type="number " step="0.50" class="form-control" name="price" required>

                        <div class="form-group">
                            <label for="title">cover photo</label>
                            <input type="file" accept="image/jpeg,image/x-png,image/jpg" class="form-control"
                                   name="cover" required>
                        </div>

                        <button class="btn btn-info btn-block">save movie</button>

                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

</body>
</html>