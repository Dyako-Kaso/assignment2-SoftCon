<?php

$conn = mysqli_connect("localhost" , "root" , "" , "webproject");

if($conn)
{
    echo "connected to the database";
}
else
{
    echo "NOT CONNECTED TO THE DATABASE";
}

$id = $_POST['id'];
$medType = $_POST['medType'];


if(!empty($id)||!empty($medType))
{
    
    $databaseQuery = "DELETE FROM customerOrders WHERE id = '$id'";

    $queryResult = mysqli_query($conn , $databaseQuery);

    if($queryResult)
    {
        echo "data removed";
    }
    else
    {
        echo "the query is not working";
    }
}
else
{
    echo "the variable is empty and null";
}



?>