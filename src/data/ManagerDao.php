<?php

    namespace src\data; 
    use src\config\Instance;
    use src\models\Manager;

    class ManagerDao{
        
        private $dbInit = null;

        function __construct(){
            if($this->dbInit == null)
                $this->dbInit = Instance::getData();
        }

        function createManager(Manager $manager){
            $createStmt = "INSERT INTO managers(`manager`, `task`,`fname`, `lname`, `email`, `pswd`) VALUES (?,?,?,?,?,?)";
            $createQuery = $this->dbInit->prepare($createStmt);
            $createQuery->execute([$manager->getNo(),$manager->getTask(),$manager->getFname(), $manager->getLname(),$manager->getEmail(),$manager->getPassword()]);
            if($createQuery) return $createQuery;
        } 

        function countEmail($mail){
            $countMailStmt = "SELECT COUNT(*) FROM managers WHERE email=?";
            $countMailQuery = $this->dbInit->prepare($countMailStmt);
            $countMailQuery->execute([$mail]);
            if($countMailQuery) return $countMailQuery;
        } 

        function selectTask(){
            $taskStmt = "SELECT * FROM tasks";
            $taskQuery = $this->dbInit->query($taskStmt);
            if($taskQuery) return $taskQuery;
        }

        function authentificate($address,$key){
            $authStmt = "SELECT pswd FROM managers WHERE email = ?";
            $authQuery = $this->dbInit->prepare($authStmt);
            $authQuery->execute([$address]);
            $authResponse = $authQuery->fetch();
            if(password_verify($key,$authResponse['pswd']))
                return true;
            else
                return false;
        }
    }
    