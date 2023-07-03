<?php
    require '../../vendor/autoload.php';

    use src\data\SuscriberDao;
    $response = [];
    $daoSuscriber = new SuscriberDao();
    $suscriberQuery = $daoSuscriber->getSuscribers();
    
    while($data = $suscriberQuery->FETCH(PDO::FETCH_OBJ)){
        $response[] = $data;
    }

    echo json_encode($response);

