<?php

    namespace src\data;
    use src\models\Post;
    use src\config\Instance;

    date_default_timezone_set('America/Port-au-Prince');

    class PostDao{
        private $dbInit;

        function __construct(){
            if($this->dbInit == null)
                $this->dbInit = Instance::getData();
        }

        function createPost(Post $post){
            $createPostStmt = "INSERT INTO articles(article, category, cover, manager, title, preview, content) VALUES (?,?,?,?,?,?,?)";
            $createPostQuery = $this->dbInit->prepare($createPostStmt);
            $createPostQuery->execute([$post->getArticle(),$post->getCategory(),$post->getCover(),$post->getManager(),$post->getTitle(),$post->getPreview(),$post->getContent()]);
            if($createPostQuery)
                return $createPostQuery;
            $this->dbInit->close();
        }

        function readManagerPost($mn){
            $readPostStmt = "SELECT article, category, cover, title, preview, publish_date, actived, deleted FROM articles WHERE manager = ?";
            $readPostQuery = $this->dbInit->prepare($readPostStmt);
            $readPostQuery->execute([$mn]);
            if($readPostQuery)
                return $readPostQuery;
            $this->dbInit->close();
        } 

        function readPosts(){
            $allPostStmt = "SELECT *, fname, lname FROM articles JOIN managers ON articles.manager = managers.manager";
            $allPostQuery = $this->dbInit->query($allPostStmt);
            if($allPostQuery)
                return $allPostQuery;
            $this->dbInit->close();
        }
        
        function readOnePosts($article){
            $allPostStmt = "SELECT *, fname, lname FROM articles JOIN managers ON articles.manager = managers.manager and article = ?";
            $allPostQuery = $this->dbInit->prepare($allPostStmt);
            $allPostQuery->execute([$article]);
            if($allPostQuery)
                return $allPostQuery;
            $this->dbInit->close();
        }

        function updatePost($cat,$cover,$title,$preview,$content,$article){
            $updatePostStmt = "UPDATE articles SET category=?, cover=?, title=?, preview=?, content=? WHERE article = ? ";
            $updatePostQuery = $this->dbInit->prepare($updatePostStmt);
            $updatePostQuery->execute([$cat,$cover,$title,$preview,$content,$article]);
            if($updatePostQuery)
                return $updatePostQuery;
            $this->dbInit->close();
        }

        function publishPost($post){
            $publishDateStmt = "UPDATE articles SET publish_date=?,actived=? WHERE article = ?";
            $publishDateQuery = $this->dbInit->prepare($publishDateStmt);
            $publishDateQuery->execute([date("Y-m-d"),1,$post]);
            if($publishDateQuery)
                return $publishDateQuery;
            $this->dbInit->close();
        }

        function deletePost($post){
            $delPostStmt = "UPDATE articles SET actived=?, deleted=? WHERE article = ?";
            $delPostQuery = $this->dbInit->prepare($delPostStmt);
            $delPostQuery->execute([0,1,$post]);
            if($delPostQuery)
                return $delPostQuery;
            $this->dbInit->close();
        }
    }