<?php
    namespace src\models;

    class Suscriber{

        private $_no;
        private $_name;
        private $_email;

        function __construct($no,$ne,$mail){
            $this->_no = $no;
            $this->_name = $ne;
            $this->_email = $mail;
        } 

        function getNo(){
            return $this->_no;
        } 

        function getName(){
            return $this->_name;
        }

        function getEmail(){
            return $this->_email;
        } 

    }