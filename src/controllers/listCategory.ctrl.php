<?php
    require '../../vendor/autoload.php';

    use src\data\CategoryDao;
    $response = [];
    $daoCategory = new CategoryDao();
    $categoryList = $daoCategory->listCategory();

    while($data = $categoryList->FETCH(PDO::FETCH_OBJ)){
        $response[] = $data;
    }

    echo json_encode($response);