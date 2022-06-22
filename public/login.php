<?php

require "connection.php";

$username = $_POST["userName"];
$password = $_POST["passWord"];

if(!empty($username) || !empty($password))
{
    $databaseQuery = "SELECT * FROM profiles WHERE username = '$username' and passkey = '$password'";

    $queryResult = mysqli_query($conn , $databaseQuery);

    if($queryResult)
    {
        echo "match has been found";
    }
    else
    {
        echo "No Match Has been found";
    }

}
else
{
    echo "Values are NULL";
}




?>