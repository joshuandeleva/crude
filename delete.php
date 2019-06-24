<?php

if(isset($_GET['id']))
{
    $id = $_GET["id"];
//extracct($_GET);
    require 'DB1.php';
    $sql = "delete from movies where movie_id =$id";
    mysqli_query($conn, $sql);

}
header("location:show.php");//redirect to show.php


















?>