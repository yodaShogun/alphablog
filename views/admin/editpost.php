<?php 
    session_start();
    require '../../vendor/autoload.php';
    require '../secure/disconnected.php';
    use src\data\CategoryDao;
    use src\data\PostDao;
    use src\models\Post;
    $daoCategory = new CategoryDao();
    $daoPost = new PostDao();
    $dataPostQuery = null;
    $categoryRows = $daoCategory->listCategory();
    $post = isset($_GET['post']) ? $_GET['post'] : die();
    $postQuery = $daoPost->readOnePosts($post);
    while($data = $postQuery->FETCH(PDO::FETCH_OBJ)){
        $dataPostQuery = new Post($data->article,$data->category,$data->cover,$data->manager,$data->title,$data->content);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
</head>
<body>
    <?php
        include "./includes/adminHeader.php";
        include "./includes/sidebar.php";
    ?>
    <div id="main-content" class="container allContent-section py-4">
        <h2>Edit Post</h2>
        <div>
            <form id="edit-post" enctype='multipart/form-data'  method="POST">
                <div class="form-group">
                <label>Category:</label>
                <select name ="category" id="category" >
                    <option disabled selected>Select category</option>
                    <?php while($element = $categoryRows->FETCH(PDO::FETCH_OBJ)) {?>
                        <option value="<?=$element->category?>"><?=$element->title?></option>
                    <?php }?>
                </select>
                </div>
                <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" value="<?=$dataPostQuery->getTitle()?>" name="title" id="title" required>
                </div>
                <div class="form-group">
                <label for="qty">Content</label>
                <textarea class="form-control" name="content" id="editor" columns="50" rows="50" required><?=$dataPostQuery->getContent()?></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Choose Image:</label>
                    <input type="file" class="form-control-file" value="0" name="cover" id="cover" accept=".jpg,.png" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/assets/js/utils/script.js"></script>
    <script src="../../public/assets/js/utils/editor.js"></script>
    <script src="../../public/assets/js/editpost.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>