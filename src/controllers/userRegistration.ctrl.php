<?php 
    require '../../vendor/autoload.php';

    use src\models\Manager;
    use src\data\ManagerDao;

    $response  = [];
    $registerInstance = new ManagerDao();

    if(isset($_POST)){
        
        extract($_POST);

        $directory = "../../public/uploads/teams/".str_replace(' ','',htmlspecialchars($name));

        $task = (int) htmlspecialchars($task);
        $name = explode(' ',htmlspecialchars($name));
        $email = htmlspecialchars($email);
        $postion = htmlspecialchars($postion);
        $pass = htmlspecialchars($pass);
        $re_pass = htmlspecialchars($re_pass);
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if($pass == $re_pass){
                if(strlen($pass)>=8){
                    if(!is_dir($directory)){
                        mkdir($directory,0777,true);
                        if(isset($_FILES['profile'])){
                            $profile = fileImages($directory,$_FILES['profile']);
                            $newManager =  new Manager(null,$profile,$task,$name[0],$name[1],$email,$position,password_hash($pass,PASSWORD_DEFAULT));
                            if($registerInstance->createManager($newManager))
                                $response = ['status'=>true,"message"=>'Registration Succesfull'];
                            else
                                $response = ['status'=>false,"message"=>'Registration Failed'];
                        }
                        else
                            $response = ['status'=>false,"message"=>'Files Issues'];
                    }
                    else
                        $response = ['status'=>false,"message"=>'Files Exists'];
                }else
                    $response = ['status'=>false, "message"=>"Too Short Password"];
            }else
                $response = ['status'=>false, "message"=>"Password Don't Match"];
        }else
            $response = ['status'=>false, "message"=>"Non Valide Email"];
        
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
			return $newImg;
		} else
			return false;
	}