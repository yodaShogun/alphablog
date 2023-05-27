<?php 
    require '../../vendor/autoload.php';
    date_default_timezone_set('America/Port-au-Prince');
    use src\data\CategoryDao;
    $daoCategory = new CategoryDao();
    $categoryRows = $daoCategory->listCategory();

    $timeDecoded = urldecode(base64_decode($_GET['time']));
    $currentTime = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../public/assets/css/registerform.css"></link>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      <title>User Registration</title>
  </head>
  <body>
    
    <div id="main-content" class="container allContent-section py-4">
        <!-- <?php //if($currentTime > $timeDecoded) {?>
            <div> 
               <h1>Invitation Link Expired Asked To Another Link</h1>
            </div>
        <?php //} ?> -->
            <div class='bold-line'></div>
            <div class='container'>
                <div class='window'>
                    <div class='overlay'></div>
                    <div class='content'>
                    <div class='welcome'>Hello There!</div>
                    <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
                    <div class='input-fields'>
                        <input type='text' id="uname" name="uname" placeholder='Username' class='input-line full-width'></input>
                        <input type='email' id="umail" name="umail" placeholder='Email' class='input-line full-width'></input>
                        <input type='password' id="upass" name="upass" placeholder='Password' class='input-line full-width'></input>
                        <input type="file" name="ufile" id="ufile" class='input-line full-width' accept=".jpg">
                    </div>
                    <div><button class='ghost-round full-width'>Create Account</button></div>
                    </div>
                </div>
            </div>
        <?php ?>
    </div>
    <script src="../../public/assets/js/utils/script.js"></script>
    <script src="../../public/assets/js/utils/editor.js"></script>
    <script src="../../public/assets/js/register.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  </body>
</html>