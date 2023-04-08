<?php 
    require '../../vendor/autoload.php';
    use src\data\CategoryDao;
    $daoCategory = new CategoryDao();
    $categoryRows = $daoCategory->countCategory();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../public/assets/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Admin</title>
    </head>
    <body>
        
        <?php
            include "./includes/adminHeader.php";
            include "./includes/sidebar.php";
        ?>

        <div id="main-content" class="container allContent-section py-4">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                        <h4 style="color:white;">Users</h4>
                        <h5 style="color:white;">0</h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                        <h4 style="color:white;">Categories</h4>
                        <h5 style="color:white;"><?=$categoryRows?></h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                            <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                            <h4 style="color:white;">Products</h4>
                            <h5 style="color:white;">0</h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                        <h4 style="color:white;">Orders</h4>
                        <h5 style="color:white;">0</h5>
                    </div>
                </div>
            </div> 
        </div>
  
        <script type="text/javascript" src="../../public/assets/js/utils/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    </body>
 
</html>