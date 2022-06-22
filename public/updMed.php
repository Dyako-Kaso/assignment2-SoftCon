<?php

require_once "connection.php";

$id = intval($_POST['id']);
$medicName = $_POST['medicineName'];
$medicCode = $_POST["medicineCode"];
$medicQuant = intval($_POST['medicineQuantity']);
$medicDesc = $_POST["medicineDescription"];
$whenToTake = $_POST["whenToTake"];
$medicDosage = intval($_POST['medicineDosage']);
$medicPrice = intval($_POST['medicinePrice']);
$medicType = $_POST["medicineType"];


if(!empty($id) || !empty($medicName) || !empty($medicCode)|| !empty($medicQuant) || !empty($medicDesc) || !empty($whenToTake) || !empty($medicDosage) || !empty($medicPrice) || !empty($medicType))
{

    if($medicType == "antiviral")
    {
        $databaseQuery = "UPDATE antiviral SET `medName` = '$medicName',`medCode` = '$medicCode' , `medQ` = '$medicQuant' , `medDesc` = '$medicDesc', `medTake` = '$whenToTake' , `medDosage` = '$medicDosage' , `medPrice` = '$medicPrice'  WHERE id = '$id'";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "antibacterial")
    {
        $databaseQuery = "UPDATE antibacterial SET `medName` = '$medicName',`medCode` = '$medicCode' , `medQ` = '$medicQuant' , `medDesc` = '$medicDesc', `medTake` = '$whenToTake' , `medDosage` = '$medicDosage' , `medPrice` = '$medicPrice'  WHERE id = '$id'";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "antimycotic")
    {
        $databaseQuery = "UPDATE antimycotic SET `medName` = '$medicName',`medCode` = '$medicCode' , `medQ` = '$medicQuant' , `medDesc` = '$medicDesc', `medTake` = '$whenToTake' , `medDosage` = '$medicDosage' , `medPrice` = '$medicPrice'  WHERE id = '$id'";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($medicType == "cancermedicine")
    {
        $databaseQuery = "UPDATE cancermedicine SET `medName` = '$medicName',`medCode` = '$medicCode' , `medQ` = '$medicQuant' , `medDesc` = '$medicDesc', `medTake` = '$whenToTake' , `medDosage` = '$medicDosage' , `medPrice` = '$medicPrice'  WHERE id = '$id'";

        $queryResult = mysqli_query($conn , $databaseQuery);
    }
 

 if($queryResult)
 {
     echo "Medicine has been updated in the Table";
 }
 else
 {
     echo "medicine HAS NOT been updated in the table";
 }

}
else
{
    echo "values have null in them in update medicine";
}

?>