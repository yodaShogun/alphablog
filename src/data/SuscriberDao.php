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
            $createSuscriber = "INSERT INTO suscribers (suscriber,sname, mail) VALUES (?,?,?)";
            $createSuscriberQuery = $this->dbInit->prepare($createSuscriber);
            $createSuscriberQuery->execute([$subs->getNo(), $subs->getName(), $subs->getEmail()]);
            if($createSuscriberQuery)
                return $createSuscriberQuery;
        } 

        function countSubscribers(){
            $countStmt = "SELECT COUNT(*) as sub FROM suscribers ";
            $countQuery = $this->dbInit->query($countStmt);
            while($countQueryResult = $countQuery->fetch()){
                return $countQueryResult['sub'];
            }    
        }

        function getSuscribers(){
            $readSuscriber = "SELECT * FROM suscribers";
            $readSuscriberQuery = $this->dbInit->query($readSuscriber);
            if($readSuscriberQuery)
                return $readSuscriberQuery;
        }

        function getIdSuscriber($mail){
            $suscriberStmt = "SELECT suscriber FROM suscriber WHERE mail = ?";
            $suscriberQuery = $this->dbInit->prepare($suscriberStmt);
            $suscriberQuery->execute([$mail]);
            if($suscriberQuery)
                return $suscriberQuery;
        }
    }