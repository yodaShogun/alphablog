<?php
    
    require '../../vendor/autoload.php';

    use src\models\Category;
    use src\data\CategoryDao;

    $response = [];

    $daoCategory = new CategoryDao();
    
    if(isset($_POST)){
        extract($_POST);
        $desc = htmlspecialchars($c_name);

        $category =  new Category(null,$desc);

        if($daoCategory->createCategory($category))
            $response = ['status'=>true, "message"=>"New Category Added Successfully"];
        else
            $response = ['status'=>false, "message"=>"Failed To Add New Category Added"]; 
    }

    echo json_encode($response);
        
?>