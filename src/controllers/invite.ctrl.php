<?php
    require '../../vendor/autoload.php';
    date_default_timezone_set('America/Port-au-Prince');
    
    use src\data\ManagerDao;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $response = [];

    $managerInstance = new ManagerDao();
    $timeLimit = date("Y-m-d H:i:s",time()+ 60 * 5);
    $timeLimit = base64_encode(urlencode($timeLimit));

    if (isset($_POST)){
        extract($_POST);

        $role = htmlspecialchars($role);
        $guessMail = htmlspecialchars($email);

        $emailCounting = $managerInstance->countEmail($guessMail);

        if($emailCounting->rowcount() > 0){
          if(sendInvitation($guessMail,$role,$timeLimit))
            $response = ['status'=>true, "message"=>"Invite Sent Succesfully"];
          else
            $response = ['status'=>false, "message"=>"Invite Not Sent"];
        }else
          $response = ['status'=>false, "message"=>"Mail Already Exists"];
    }

    echo json_encode($response);

    function sendInvitation($person,$task,$chrono){
      $mailer = new PHPMailer (true);
      try {
        $mailer->isSMTP();
        $mailer->Host = "smtp.gmail.com";
        $mailer->SMTPAuth = true;
        $mailer->Username = "pierrechriswesley@gmail.com";
        $mailer->Password = "fobwpwsunobbxlzk";
        $mailer->SMTPSecure = "tls";
        $mailer->Port = 587;
        $mailer->SMTPOptions = [
          'ssl'=>[
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>true
          ]
        ];
        $mailer->setFrom('pierrechriswesley@gmail.com');
        $mailer->addAddress($person);
        $mailer->CharSet = 'UTF-8';
        $mailer->Encoding = 'base64';
        $mailer->isHTML(true);
        $mailer->Subject = 'AlphaAcademy';
        $mailer->Body = "L'Alpha Academy vous invite à faire partie de son équipe afin de former une nouvelle élite. <a href='http://localhost/alphablog/views/admin/register.php?job=$task&time=$chrono'><button>CLICK</button></a>";
        $mailer->AltBody = 'Le texte comme simple élément textuel';
        if ($mailer->send())
          return true;
      }catch (Exception $e) {
          echo "Mailer Error: ".$mailer->ErrorInfo;
          return false;
      }
    }