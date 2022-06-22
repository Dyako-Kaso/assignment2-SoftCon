<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require_once 'db.php';

$app = new \Slim\App();

/**
 * Name : Diyako Kaso 
 * Section : 2
 */

$app->get('/GET/antibacterial' , function($request , $response , $args){
    try{

        $query = "SELECT * FROM antibacterial";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
});

$app->get('/GET/antimycotic' , function($request , $response , $args){
    try{

        $query = "SELECT * FROM antimycotic";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
});

$app->get('/GET/antiviral' , function($request , $response , $args){
    try{

        $query = "SELECT * FROM antiviral";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
});

$app->get('/GET/cancermedicine' , function($request , $response , $args){
    try{

        $query = "SELECT * FROM cancermedicine";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
});


$app->get('/GET/medicine' , function($request , $response , $args){
    try{

        $query = "SELECT * FROM medicine";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

       
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;

        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
});


// to add data to the table

$app->post('/POST/antiviral' , function( $request , Response $response , $args){

    // $medName = intval($request->getParam('medName'));
    // $medCode = $request->getParam('medCode');
    // $medQ = intval($request->getParam('medQ'));
    // $medDesc = $request->getParam('medDesc');
    // $medTake = $request->getParam('medTake');
    // $medDosage = intval($request->getParam('medDosage'));
    // $medPrice = intval($request->getParam('medPrice'));
    $input = $request->getParams();

    try{
        $sql = "INSERT INTO antiviral (`medName`, `medCode` , `medQ` , `medDesc` , `medTake` ,
        `medDosage`,`medPrice`) VALUES (?,?,?,?,?,?,?)";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->execute([$input['medName'],$input['medCode'],$input['medQ'], $input['medDesc'],  $input['medTake'], $input['medDosage'],$input['medPrice']]);

        $count = $stmt->rowCount();

        $db = null;

        $data = array(
            "status" => "success",
            "rowCount" => $count
        );


        echo json_encode($data);

    }
    catch(PDOException $e)
    {
        $data = array(
            "status" => "fail"
        );

        echo json_encode($data);
        
    }
});

$app->post('/POST/antibacterial' , function( $request , Response $response , $args){

    // $medName = intval($request->getParam('medName'));
    // $medCode = $request->getParam('medCode');
    // $medQ = intval($request->getParam('medQ'));
    // $medDesc = $request->getParam('medDesc');
    // $medTake = $request->getParam('medTake');
    // $medDosage = intval($request->getParam('medDosage'));
    // $medPrice = intval($request->getParam('medPrice'));
    $input = $request->getParams();

    try{
        $sql = "INSERT INTO antibacterial (`id`,`medName`, `medCode` , `medQ` , `medDesc` , `medTake` ,
        `medDosage`,`medPrice`) VALUES (?,?,?,?,?,?,?,?)";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->execute([$input['id'],$input['medName'],$input['medCode'],$input['medQ'], $input['medDesc'],  $input['medTake'], $input['medDosage'],$input['medPrice']]);

        $count = $stmt->rowCount();

        $db = null;

        $data = array(
            "status" => "success",
            "rowCount" => $count
        );


        echo json_encode($data);

    }
    catch(PDOException $e)
    {
        $data = array(
            "status" => "fail"
        );

        echo json_encode($data);
        
    }
});
   
//  try{
//         $query = "INSERT INTO employees (`employee_id` , `first_name` , `last_name` , `department_id` , `salary` ,
//         `commision_pct`) values (?,?,?,?,?,?) ";

//         $db = new Db();
//         $db = $db->connect();

//         if($db == false)
//         {
//             echo "the database is not connected";
//         }
//         else
//         {
//             echo "the database is connected";
//         }

//         echo $inputs['employee_id'];
//         echo $inputs['first_name'];
//         echo $inputs['last_name'];
//         echo $inputs['department_id'];
//         echo $inputs['salary'];
//         echo $inputs['commision_pct'];

//         $stmt = $db->prepare($query);
//         $stmt->execute([$inputs['employee_id'] , $inputs['first_name'] , $inputs['last_name'] , $inputs['department_id'] , $inputs['salary'] , $inputs['commision_pct']]);

//         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//         $db = null;

//         $data = array(
//             "status" => "added"
//         );

//         echo json_encode($data);

//     }catch(PDOException $e)
//     {
//         $data = array(
//             "status" => "failed"
//         );

//         echo json_encode($data);
//     }

// });


// delete data from the database columns

$app->delete('/antiviral/delete/{med_id}' , function($request , $response , $args){
    $med_id = $args['med_id'];

    try{
        
        $query = "DELETE FROM antiviral where id = $med_id";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;
        $data = array(
            "status" => "removed"
        );
        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
    
});


$app->delete('/antibacterial/delete/{med_id}' , function($request , $response , $args){
    $med_id = $args['med_id'];

    try{
        
        $query = "DELETE FROM antibacterial where id = $med_id";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;
        $data = array(
            "status" => "removed"
        );
        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
    
});


$app->delete('/antimycotic/delete/{med_id}' , function($request , $response , $args){
    $med_id = $args['med_id'];

    try{
        
        $query = "DELETE FROM antimycotic where id = $med_id";

        $db = new Db();
        $db = $db->connect();

        $stmt = $db->prepare($query);
        $stmt->execute();

        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;
        $data = array(
            "status" => "removed"
        );
        echo json_encode($data);

    }catch(PDOException $e){
        $data = array(
            "status" => "failed"
        );

        echo json_decode($data);
    } 
    
});

$app->run();