<?php 
    require '../../vendor/autoload.php';
    use src\data\CategoryDao;
    $daoCategory = new CategoryDao();
    $categoryRows = $daoCategory->listCategory();
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
      <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
      <title>Admin | New Post</title>
  </head>
  <body>
    <?php
        include "./includes/adminHeader.php";
        include "./includes/sidebar.php";
    ?>
    <div id="main-content" class="container allContent-section py-4">
        <h2>New Post</h2>
        <div>
            <form id="add-post" enctype='multipart/form-data'  method="POST">
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
                <input type="text" class="form-control" name="title" id="title" required>
                </div>
                <div class="form-group">
                <label for="qty">Content</label>
                <textarea class="form-control" name="content" id="content" columns="50" rows="50"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Choose Image:</label>
                    <input type="file" class="form-control-file" name="cover" id="cover" accept=".jpg,.png">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/assets/js/utils/script.js"></script>
    <script src="../../public/assets/js/utils/editor.js"></script>
    <script src="../../public/assets/js/addpost.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  </body>
</html>