<?php

    require '../../vendor/autoload.php';

    use src\data\ManagerDao;

    $response = []; 
    $daoManager = new ManagerDao();

    if(isset($_POST)){
        extract($_POST);

        $response = ['status'=>true, 'message'=>$mail.$secret];
    }

    echo json_encode($response);
