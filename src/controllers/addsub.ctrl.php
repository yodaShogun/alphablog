<?php
    require '../../vendor/autoload.php';
    use src\models\Suscriber;
    use src\data\SuscriberDao;

    $response  = [];
    $sub = new SuscriberDao();
    
    if(isset($_POST)){
        extract($_POST);

        $name =  htmlspecialchars($form3);
        $email = htmlspecialchars($form2);

        if($sub->countSubscribers() > 0)
            $response = ["status"=>false,"message"=>"This Email already Exist"];
        else{
            $newSubscriber = new Suscriber(null,$name,$email);
            if($sub->beSuscriber($newSubscriber))
                $response = ['status'=>true, "message"=>"Welcome To The Team"];
            else
                $response = ["status"=>false,"message"=>"Something Went Wrong Try Again"];
        }
    }

    echo json_encode($response);