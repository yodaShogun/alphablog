<?php

    require '../../vendor/autoload.php';

    use src\data\ManagerDao;

    $response = []; 
    $loginInstance = new ManagerDao();

    if(isset($_POST)){
        extract($_POST);
        $address = htmlspecialchars($addr);
        $secret = htmlspecialchars($srt);

        if($loginInstance->authentificate($address,$secret))
            $response = ['status'=>true, "message"=>"Welcome"];
        else
            $response = ['status'=>false, "message"=>"Incorrect Password or Email"]; 
    }

    echo json_encode($response);
