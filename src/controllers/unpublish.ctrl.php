<?php
    require '../../vendor/autoload.php';

    use src\data\PostDao;

    $daoPost = new PostDao();
    $response = [];

    if(isset($_POST)){
        extract($_POST);

        $postId = htmlspecialchars($data);

        if($daoPost->unPublishPost($postId))
            $reponse = ['status'=>true, 'message'=>"The Post Was Draft"];
        else
            $reponse = ['status'=>false, 'message'=>"Draft"]; 
    }

    echo json_encode($response);