<?php 
    require '../../vendor/autoload.php';
    use src\data\PostDao;

    $postInstance = new PostDao();
    $response = [];

    if(isset($_POST)){
        extract($_POST);

        $category = htmlspecialchars($category);
        $title = htmlspecialchars($title);
        $content = htmlspecialchars($content);
        $article = htmlspecialchars($article);

        $oldTitle = $postInstance->getPostTitle($article);

        
        if(rename("../../public/uploads/blog/$oldTitle","../../public/uploads/blog/$title")){
            if($postInstance->updatePost($category,$title,$content,$article))
                $response = ["status"=>true, "message"=>"Article Updated Succesfully"];
        }
        else
            $response = ["status"=>false, "message"=>"Updated Failed"];
    }

    echo json_encode($response);