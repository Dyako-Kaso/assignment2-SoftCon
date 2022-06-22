<?php

// imports the connection we established with the database in the connection.php page.

require "connection.php";


// database query to be performed on the database.
$databaseQuery = "SELECT * FROM med";

// the connection of the database and the query to be performed on the 
// table have been sent and the result is saved in $queryResult variable 
// whether successful or NOT.
$queryResult = mysqli_query($conn , $databaseQuery);

// checks if the result is recieved and the action has been performed
// if so it gets all the rows from the table and assigns them to the
// $row variable and are in turn assigned to the $arrayOfData
if($queryResult)
{
    while($row = mysqli_fetch_array($queryResult))
    {
        $arrayOfData [] = $row;
    }

    echo json_encode($arrayOfData);
}
else
{
    echo "could not perform the action on the mysql table";
}


?>