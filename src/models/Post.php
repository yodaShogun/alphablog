<?php
    namespace src\models;

    class Post{
        private $article;
        private $category;
        private $cover;
        private $manager;
        private $title;
        private $preview;
        private $content;
        private $publish;
        private $actived;
        private $deleted;

        function __construct($ar,$ct,$cv,$mn,$tle,$prv,$cnt){
            $this->article = $ar;
            $this->category = $ct;
            $this->cover = $cv;
            $this->manager = $mn;
            $this->title = $tle;
            $this->preview = $prv;
            $this->content = $cnt;
        } 

        function getArticle(){
            return $this->article;
        }

        function getCategory(){
            return $this->category;
        }

        function getCover(){
            return $this->cover;
        }

        function getManager(){
            return $this->manager;
        }

        function getTitle(){
            return $this->title;
        }

        function getPreview(){
            return $this->preview;
        }

        function getContent(){
            return $this->content;
        }

        function getPublish(){
            return $this->publish;
        }

        function getActived(){
            return $this->actived;
        }

        function getDeleted(){
            return $this->deleted;
        }
    }