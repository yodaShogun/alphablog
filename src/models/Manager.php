<?php
        namespace src\models; 

        class Manager{
            
            private $_no;
            private $_task;
            private $_fname;
            private $_lname;
            private $_email; 
            private $_password;

            function __construct($n,$tk,$fn,$ln,$ml,$pwd){
                $this->_no = $n;
                $this->_task = $tk; 
                $this->_fname = $fn;
                $this->_lname = $ln;
                $this->_email = $ml;
                $this->_password = $pwd;
            } 
    
            //Accesseur
            function getNo(){
                return $this->_no;
            }

            function getTask(){
                return $this->_task;
            } 
    
            function getFname(){
                return $this->_fname;
            } 

            function getLname(){
                return $this->_lname;
            } 

            function getEmail(){
                return $this->_email;
            }
    
            function getPassword(){
                return $this->_password;
            } 
    
            // Mutateur
            function setFname($fn){
                return $this->_fname = $fn;
            } 

            function setLname($ln){
                return $this->_lname =$ln;
            } 

            function setEmail($ml){
                return $this->_email = $ml;
            }
    
            function setTask($tk){
                return $this->_task = $tk;
            } 
    
            function setPassword($pwd){
                return $this->_password = $pwd;
            } 

        }
    