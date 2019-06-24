<?php
//get the id
//retrieve the movie
//display details
//update the movie

if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    require 'DB1.php';
    $sql ="select * from movies where movie_id = $id";
    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);
    extract($row);

}
if(isset($_POST["price"]))
{
    $price = $_REQUEST["price"];
    $quantity = $_REQUEST["quantity"];
    $id=$_REQUEST["id"];
    require 'DB1.php';
    $sql = "update movies set price=$price, quantity =$quantity where movie_id=$id";
    mysqli_query($conn,$sql) or die (mysqli_error($conn));
   header("location:show.php");

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update movie</title>
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
                updating movie <?php echo $title; ?>
            </div>
            <div class="card-body">
                <div class="text-center">
                <img src="<?php echo $cover; ?>"width="200"alt="">
                </div>
                <?php

                if (isset ($message))
                    echo "<P class='text-danger'> $message</P>"
                ?>

                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?=$movie_id?>">

                    <div class="form-group">
                        <label for="title">quantity</label>
                        <input value="<?=$quantity ?>" type="number " class="form-control" name="quantity" required>
                    </div>

                    <div class="form-group">
                        <label for="title">price</label>
                        <input  value="<?=$price?>" min="0" type="number " step="0.50" class="form-control" name="price" required>

                    </div>
                        <button class="btn btn-info btn-block">update movie</button>

                </form>
            </div>


        </div>
    </div>
</div>

</body>
</html>
