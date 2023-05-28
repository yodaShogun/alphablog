<?php

    namespace src\data;
    use src\config\Instance;
    use src\models\Category;
    
    class CategoryDao{
    
        private $dbInit;

        function __construct(){
            if($this->dbInit == null)
                $this->dbInit = Instance::getData();
        }

        function createCategory(Category $cat){
            $createCategoryStmt = "INSERT INTO categories (category, title) VALUES (?,?)";
            $createCategoryQuery = $this->dbInit->prepare($createCategoryStmt);
            $createCategoryQuery->execute([$cat->getNo(),$cat->getDesc()]);
            if($createCategoryQuery)
                return $createCategoryQuery;
            $this->dbInit->close();
        } 

        function countCategory(){
            $countStmt = "SELECT COUNT(*) as cats FROM categories";
            $countQuery = $this->dbInit->query($countStmt);
            while($countQueryResult = $countQuery->fetch()){
                return $countQueryResult['cats'];
            } 
            $this->dbInit->close();   
        }

        function listCategory(){
            $readCategoryStmt = "SELECT * FROM categories";
            $readCategoryQuery = $this->dbInit->query($readCategoryStmt);
            if($readCategoryQuery)
                return $readCategoryQuery;
            $this->dbInit->close();
        } 

        function updateCategory($name,$id){
            $updateCategoryStmt = "UPDATE categories SET title= ? WHERE cateogry = ? ";
            $updateCategoryQuery = $this->dbInit->prepare($updateCategoryStmt);
            $updateCategoryQuery->execute([$name, $id]);
            if($updateCategoryQuery)
                return $updateCategoryQuery;
            $this->dbInit->close();
        } 
    
    } 