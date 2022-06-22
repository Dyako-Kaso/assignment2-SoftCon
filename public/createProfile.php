<?php

require "connection.php";

$result = mysqli_query($conn , "SELECT * FROM profiles");

// used to get the number of the rows in the table
$indexToSet = mysqli_num_rows($result);

// increments the number of rows by one to be used as the id for the next element inserted
$indexToSet++;

$firName = $_POST["firstName"];
$lasName = $_POST["lastName"];
$emp_id = $_POST["empID"];
$userName = $_POST["user"];
$passWord = $_POST["pass"];


if(!empty($firName) || !empty($lasName)|| !empty($emp_id) || !empty($userName) || !empty($passWord))
{
    $databaseQuery = "INSERT INTO profiles (`id`,`firstName`,`lastName`,`employee_id`,`username`,`password`) VALUES ('$indexToSet','$firName','$lasName' , '$emp_id' , '$userName' , '$passWord')";

    $queryResult = mysqli_query($conn , $databaseQuery);

    if($queryResult)
    {
        echo "account created and inserted into the database";
    }
    else
    {
        echo "Account NOT CREATED";
    }
}
else
{
    echo "Null values in account creation";
}

?>