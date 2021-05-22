<?php
require "../vendor/autoload.php";
use \Firebase\JWT\JWT;


function JWTChecker($authHeader){
    $secret_key = "YOUR_SECRET_KEY";
    $jwt = null;


    $arr = explode(" ", $authHeader);

    $jwt = $arr[1];

    if($jwt){

        try {
    
            $decoded = JWT::decode($jwt, $secret_key, array('HS256'));
    
            // Access is granted. Add code of the operation here 
    
            return true;
    
        }catch (Exception $e){
    
            http_response_code(401);
    
            echo json_encode(array(
                "message" => "Access denied.",
                "error" => $e->getMessage()
            ));

            die();
        }
    
    }
}







