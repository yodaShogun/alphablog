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
            $createPostStmt = "INSERT INTO articles(article, category, cover, manager,title,content) VALUES (?,?,?,?,?,?)";
            $createPostQuery = $this->dbInit->prepare($createPostStmt);
            $createPostQuery->execute([$post->getArticle(),$post->getCategory(),$post->getCover(),$post->getManager(),$post->getTitle(),$post->getContent()]);
            if($createPostQuery)
                return $createPostQuery;
            $this->dbInit->close();
        }

        function readManagerPost($mn){
            $readPostStmt = "SELECT article, cover, title, publish_date, actived, deleted FROM articles WHERE manager = ?";
            $readPostQuery = $this->dbInit->prepare($readPostStmt);
            $readPostQuery->execute([$mn]);
            if($readPostQuery)
                return $readPostQuery;
            $this->dbInit->close();
        } 

        function recentsPosts(){
            $recentPostStmt = "SELECT a.*, m.fname, m.lname FROM articles a JOIN managers m ON a.manager = m.manager WHERE a.actived = 1 AND a.deleted = 0 ORDER BY a.article DESC LIMIT 6";
            $recentPostQuery = $this->dbInit->query($recentPostStmt);
            if($recentPostQuery)
                return $recentPostQuery;
            $this->dbInit->close();
        } 

        function allPosts(){
            $allPostStmt = "SELECT *, fname, lname FROM articles JOIN managers ON articles.manager = managers.manager WHERE actived = 1 AND deleted = 0 ORDER BY article DESC";
            $allPostQuery = $this->dbInit->query($allPostStmt);
            if($allPostQuery)
                return $allPostQuery;
            $this->dbInit->close();
        }
        
        function readOnePosts($article){
            $onePostStmt = "SELECT *, fname, lname FROM articles JOIN managers ON articles.manager = managers.manager and article = ?";
            $onePostQuery = $this->dbInit->prepare($onePostStmt);
            $onePostQuery->execute([$article]);
            if($onePostQuery)
                return $onePostQuery;
            $this->dbInit->close();
        }

        function updatePost($cat,$title,$content,$article){
            $updatePostStmt = "UPDATE articles SET category=?, title=?, content=? WHERE article = ? ";
            $updatePostQuery = $this->dbInit->prepare($updatePostStmt);
            $updatePostQuery->execute([$cat,$title,$content,$article]);
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

        function unPublishPost($post){
            $publishDateStmt = "UPDATE articles SET publish_date=?,actived=? WHERE article = ?";
            $publishDateQuery = $this->dbInit->prepare($publishDateStmt);
            $publishDateQuery->execute([date("Y-m-d"),0,$post]);
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

        function countAllPost(){
            $countAllStmt = "SELECT COUNT(*) as allpost FROM articles";
            $countAllQuery = $this->dbInit->query($countAllStmt);
            while($countAllQueryResult = $countAllQuery->fetch()){
                return $countAllQueryResult['allpost'];
            } 
            $this->dbInit->close();
        }

        function countMyPost($userID){
            $countStmt = "SELECT COUNT(*) as myposts FROM articles JOIN managers WHERE managers.manager = articles.article AND managers.manager = ?";
            $countQuery = $this->dbInit->prepare($countStmt);
            $countQuery->execute([$userID]);
            while($countQueryResult = $countQuery->fetch()){
                return $countQueryResult['myposts'];
            } 
            $this->dbInit->close();
        }

        function getPostTitle($article){
            $titleStmt = "SELECT title FROM articles WHERE article = ?";
            $titleQuery = $this->dbInit->prepare($titleStmt);
            $titleQuery->execute([$article]);
            $oldTitle = $titleQuery->fetch();
            return $oldTitle['title'];
        }

    }