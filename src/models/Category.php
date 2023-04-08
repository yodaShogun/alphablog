<?php
    namespace src\models;

    class Category{

        private $_no;
        private $_desc;
      
        function __construct($n,$desc){
            $this->_no = $n;
            $this->_desc = $desc;
        }

        //accesseur
        function getNo(){
            return $this->_no;
        }

        function getDesc(){
            return $this->_desc;
        }

        //mutateur
        function setNo($no){
            return $this->_no = $no;
        }

        function setDesc($desc){
            return $this->_desc = $desc;
        }
    }

?>