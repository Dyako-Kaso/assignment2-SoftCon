<?php

require_once "connection.php";

$id = intval($_POST['index']);
$med = $_POST['medType'];
$queryResult = "SELECT * FROM antiviral";
echo $id;
echo $med;
if(isset($id) || isset($med))
{
    if($med == "antiviral")
    {
        $databaseQuery = "DELETE FROM antiviral WHERE id='$id'";
        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($med == "antibacterial")
    {
        $databaseQuery = "DELETE FROM antibacterial WHERE id='$id'";
        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($med == "antimycotic")
    {
        $databaseQuery = "DELETE FROM antimycotic WHERE id='$id'";
        $queryResult = mysqli_query($conn , $databaseQuery);
    }
    else if($med == "cancermedicine")
    {
        $databaseQuery = "DELETE FROM cancermedicine WHERE id='$id'";
        $queryResult = mysqli_query($conn , $databaseQuery);
    }


    
    if($queryResult)
    {
        echo "Medicine Deleted";
    }
    else
    {
        echo "Medicine NOT DELETED";
    }
}
else
{
    echo "the variables id and medicine type is not set";
}

?>