<?php 
    require '../../vendor/autoload.php';

    use src\models\Post;
    use src\data\PostDao;

    $response  = [];
    $daoPost = new PostDao();

    if(isset($_POST)){
        extract($_POST);

        $directory = "../../public/uploads/blog/$title";

        if(!is_dir($directory)){
            mkdir($directory,0777,true);
            if(isset($_FILES['cover'])){
                $cover = fileImages($directory,$_FILES['cover']);
                $newPost =  new Post(null,htmlspecialchars($category),$cover,1,htmlspecialchars($title),htmlspecialchars($resume),htmlspecialchars($content));
                if($daoPost->createPost($newPost))
                    $response = ['status'=>true,"message"=>'Post Succesfully Created'];
                else
                    $response = ['status'=>false,"message"=>'Creation Failed'];
            }
            else
                $response = ['status'=>false,"message"=>'Files Issues'];
        }
        else
            $response = ['status'=>false,"message"=>'Files Exists'];
    } 

    echo json_encode($response);


    function fileImages($folder, $content){

		$name  = $content["name"];
		$tmp   = $content["tmp_name"];

		$fileExt = pathinfo($name, PATHINFO_EXTENSION);
		$lowerExt = strtolower($fileExt);

		$allowed = ['jpg','png'];

		if (in_array($lowerExt, $allowed)) {
			$newImg = uniqid(). "." . $lowerExt;
			$uploaded = $folder . '/' . $newImg;

			move_uploaded_file($tmp, $uploaded);
			return $uploaded;
		} else
			return false;
	}