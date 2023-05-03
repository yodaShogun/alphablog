<?php
    require '../../vendor/autoload.php';

    use src\data\PostDao;

    $daoPost = new PostDao();
    $response = [];

    if(isset($_POST)){
        extract($_POST);

        $postId = htmlspecialchars($data);

        if($daoPost->publishPost($postId))
            $reponse = ['status'=>true, 'message'=>"The Post Was Published"];
        else
            $reponse = ['status'=>false, 'message'=>"The Post Wasn't Published"]; 
    }

    echo json_encode($response);