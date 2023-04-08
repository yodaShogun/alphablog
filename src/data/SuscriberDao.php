<?php

    namespace src\data; 
    use src\config\Instance;
    use src\models\Suscriber;

    class SuscriberDao{

        private $dbInit = null;
        
        function __construct(){
            if($this->dbInit == null)
                $this->dbInit = Instance::getData();
        }

        function beSuscriber(Suscriber $subs){
            $createSuscriber = "INSERT INTO suscribers (suscriber, mail) VALUES (?,?)";
            $createSuscriberQuery = $this->dbInit->prepare($createSuscriber);
            $createSuscriberQuery->execute([$subs->getNo(), $subs->getEmail()]);
            if($createSuscriberQuery)
                return $createSuscriberQuery;
        } 

        function getSuscriber(){
            $readSuscriber = "SELECT * FROM suscribers";
            $readSuscriberQuery = $this->dbInit->query($readSuscriber);
            if($readSuscriberQuery)
                return $readSuscriberQuery;
        }
    }