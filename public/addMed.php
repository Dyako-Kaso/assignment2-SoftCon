<?php

// this imports the connection recieved from the database in the connection.php
// file
require "connection.php";

// getting the number of the sql rows



$medicName = $_POST['medicineName'];
$medicCode = $_POST["medicineCode"];
$medicQuant = intval($_POST['medicineQuantity']);
$medicDesc = $_POST["medicineDescription"];
$whenToTake = $_POST["whenToTake"];
$medicDosage = intval($_POST['medicineDosage']);
$medicPrice = intval($_POST['medicinePrice']);
$medicType = $_POST["medicineType"];

if(!empty($medicName) || !empty($medicCode)|| !empty($medicQuant) || !empty($medicDesc) || !empty($whenToTake) || !empty($medicDosage) || !empty($medicPrice) || !empty($medicType))
{
    if($medicType == "antiviral")
    {
        $sql="SELECT * FROM antiviral";
        $sqlQuery = mysqli_query($conn , $sql);
        $rowcount = mysqli_num_rows($sqlQuery);
        $rowcount++;

        

        $databaseQuery = "INSERT INTO antiviral (`id`,`medName`,`medCode`,`medQ`,`medDesc`,`medTake` , `medDosage` , `medPrice` ) VALUES ('$rowcount','$medicName' , '$medicCode' , '$medicQuant' , '$medicDesc' , '$whenToTake' , '$medicDosage' , '$medicPrice'  )";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "antibacterial")
    {
        $sql="SELECT * FROM antibacterial";
        $sqlQuery = mysqli_query($conn , $sql);
        $rowcount = mysqli_num_rows($sqlQuery);
        $rowcount++;


        $databaseQuery = "INSERT INTO antibacterial (`id`,`medName`,`medCode`,`medQ`,`medDesc`,`medTake` , `medDosage` , `medPrice` ) VALUES ('$rowcount','$medicName' , '$medicCode' , '$medicQuant' , '$medicDesc' , '$whenToTake' , '$medicDosage' , '$medicPrice'  )";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "antimycotic")
    {

        $sql="SELECT * FROM antimycotic";
        $sqlQuery = mysqli_query($conn , $sql);
        $rowcount = mysqli_num_rows($sqlQuery);
        $rowcount++;

        $databaseQuery = "INSERT INTO antimycotic (`id`,`medName`,`medCode`,`medQ`,`medDesc`,`medTake` , `medDosage` , `medPrice` ) VALUES ('$rowcount','$medicName' , '$medicCode' , '$medicQuant' , '$medicDesc' , '$whenToTake' , '$medicDosage' , '$medicPrice'  )";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "cancermedicine")
    {
        $sql="SELECT * FROM cancermedicine";
        $sqlQuery = mysqli_query($conn , $sql);
        $rowcount = mysqli_num_rows($sqlQuery);
        $rowcount++;

        $databaseQuery = "INSERT INTO cancermedicine (`id`,`medName`,`medCode`,`medQ`,`medDesc`,`medTake` , `medDosage` , `medPrice` ) VALUES ('$rowcount','$medicName' , '$medicCode' , '$medicQuant' , '$medicDesc' , '$whenToTake' , '$medicDosage' , '$medicPrice'  )";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
   


    if($queryResult)
    {
        echo "Medicine Added to the Table";
    }
    else
    {
        echo "Medicine NOT ADDED";
    }

}
else
{
    echo "the values have null in them";
}

?>