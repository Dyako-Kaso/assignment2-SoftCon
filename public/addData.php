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

$medName = $_POST["medName"];
$medCode = $_POST["medCode"];
$medQ = intval($_POST["medQuant"]);
$custLabel = $_POST["custLabel"];
$priceEach = intval($_POST["priceEach"]);

$result = mysqli_query($conn , "SELECT * FROM customerOrder");

// used to get the number of the rows in the table
$indexToSet = mysqli_num_rows($result);

// increments the number of rows by one to be used as the id for the next element inserted
$indexToSet++;


if(!empty($medName) || !empty($medCode)|| !empty($medQ) || !empty($custLabel))
{
    $databaseQuery = "INSERT INTO customerLabel (`id`,`medicineName`,`MedicineCode`,`MedicineQuantity` , `priceEach` , `customerLabel`) VALUES ('$indexToSet' , '$medName' , '$medCode' , '$medQ' , '$priceEach' , '$custLabel')";

    $queryResult = mysqli_query($conn , $databaseQuery);

    if($queryResult)
    {
        echo "dataAdded";
    }
    else
    {
        echo "data not added to customer order table";
    }
}
else
{
    echo "the values contain NULL";
}



if($conn)
{
    echo "connected to the database";
}
else
{
    echo "NOT CONNECTED TO THE DATABASE";
}

?>