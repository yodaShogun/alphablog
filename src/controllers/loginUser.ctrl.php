<?php

    session_start();
    require '../../vendor/autoload.php';
    use src\data\ManagerDao;

    $response = []; 
    $loginInstance = new ManagerDao();

    if(isset($_POST)){
        extract($_POST);
        $address = htmlspecialchars($addr);
        $secret = htmlspecialchars($srt);

        $sessionData = $loginInstance->getSessionInfo($address);

        if($loginInstance->authentificate($address,$secret)){

            while($dataSession = $sessionData->FETCH(PDO::FETCH_OBJ)){
                $_SESSION['user']['id'] = $dataSession->manager;
                $_SESSION['user']['name'] = $dataSession->fname." ".$dataSession->lname;
                $_SESSION['user']['role'] = $dataSession->task_desc;
                $_SESSION['user']['profile'] = $dataSession->profile;

            }
            $response = ['status'=>true, "message"=>"Welcome ".$_SESSION['user']['name']];
        }
        else
            $response = ['status'=>false, "message"=>"Incorrect Password or Email"]; 
    }

    echo json_encode($response);
