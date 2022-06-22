<?php

    $conn = mysqli_connect("localhost" , "root" , "" , "webproject");


    if($conn)
    {
        echo "The connection to the database is successful";
    }
    else
    {
        echo "can NOT connect to the database";
    }

?>