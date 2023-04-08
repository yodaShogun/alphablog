<?php
    namespace src\models;

    class Suscriber{

        private $_no;
        private $_email;

        function __construct($no,$mail){
            $this->_no = $no;
            $this->_email = $mail;
        } 

        function getNo(){
            return $this->_no;
        } 
        function getEmail(){
            return $this->_email;
        } 

    }