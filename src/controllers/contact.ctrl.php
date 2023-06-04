<?php
    require '../../vendor/autoload.php';

    date_default_timezone_set('America/Port-au-Prince');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $response = [];

    if($_POST){
        extract($_POST);

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $subject = htmlspecialchars($subject);
        $message = htmlspecialchars($message);

        if(sendMessage($email,$subject,$message))
            $response = ['status'=>true,"message"=>"Your Message Was Sent Succesfully"];
        else
            $response = ['status'=>false,"message"=>"Your Message Don't Sent"];
    }

    echo json_encode($response);

    function sendMessage($person,$sj,$msg){
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
          $mailer->Subject = "$sj";
          $mailer->Body = "$msg";
          $mailer->AltBody = 'Le texte comme simple élément textuel';
          if ($mailer->send())
            return true;
        }catch (Exception $e) {
            echo "Mailer Error: ".$mailer->ErrorInfo;
            return false;
        }
      }
