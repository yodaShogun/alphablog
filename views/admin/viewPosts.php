<?php 
  session_start();
  require '../../vendor/autoload.php';
  require '../secure/disconnected.php';
  use src\data\PostDao;
  $post = new PostDao();
  $postListQuery = $post->readManagerPost($_SESSION['user']['id']);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Admin | Posts</title>
  </head>
  <body>
        
    <?php
        include "./includes/adminHeader.php";
        include "./includes/sidebar.php";
    ?>

    <div id="main-content" class="container allContent-section py-4">
      <div >
        <h2>My Post</h2>
        <table id="#tb" class="table hover data-table-export nowrap">
          <thead>
            <tr>
              <th class="text-center">S.N.</th>
              <th class="text-center">Cover</th>
              <th class="text-center">Title</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <?php while ($data = $postListQuery->FETCH(PDO::FETCH_OBJ)) {?>
              <tr>
                <td><?= $data->article?></td>
                <td><img src="../../public/uploads/blog/<?=$data->title?>/<?=$data->cover?>" alt="" class="w-25 img-fluid img-thumbnail"/></td>
                <td><?=$data->title?></td>
                <td>
                  <a href="http://localhost/alphablog/views/admin/editpost.php?post=<?=$data->article?>"><i style='color: #53D46B;' class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  &nbsp;&nbsp;
                  <?=!$data->actived? "<a class='publish' href='$data->article' title='Enabled'><i style='color: #5DA0CD;' class='fa fa-upload'></i></a>&nbsp;" : ''; ?>
                  <?= $data->actived? "<a class='unpublish' href='$data->article' title='Disabled'><i style='color: #ff0000;' class='fa fa-undo'></i></a>&nbsp;" : ''; ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <!-- Trigger a new page -->
        <button type="button" class="btn btn-secondary " style="height:40px">
          <a class="text-white" href="http://localhost/alphablog/views/admin/createPost.php" target="_blank">Create Article</a>
        </button>

      </div>
    </div>
    <script src="../../public/assets/js/utils/script.js"></script>
    <script src="../../public/assets/js/publishpost.js"></script>
    <script src="../../public/assets/js/unpublishpost.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
 
</html>
