<?php 
    require '../../vendor/autoload.php';
    date_default_timezone_set('America/Port-au-Prince');
    use src\data\CategoryDao;
    $daoCategory = new CategoryDao();
    $categoryRows = $daoCategory->listCategory();

    $timeDecoded = urldecode(base64_decode($_GET['time']));
    $currentTime = date("Y-m-d H:i:s");

    if(!isset($_GET['job']))
        header('location: https://google.com')
?>
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../public/assets/fonts/material-icon/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="../../public/assets/css/registerform.css"></link>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <title>User Registration</title>
  </head>
  <body>
    
        <?php if($currentTime > $timeDecoded) {?>
            <div> 
               <h1>Invitation Link Expired Asked To Another Link</h1>
            </div>
        <?php } ?> 
            <div class="main">
                <!-- Sign up form -->
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Sign up</h2>
                                <form method="POST" class="register-form" id="register-form">
                                    <div class="form-group">
                                        <label for="task"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input hidden type="text" name="task" id="task" value="<?=$_GET['job']?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="pass" id="pass" placeholder="Password" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="profile"><i class="zmdi zmdi-file"></i></label>
                                        <input type="file" name="profile" id="profile" accept=".jpg, .png" required/>
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                    </div> -->
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="../../public/images/signup-image.jpg" alt="sing up image"></figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php ?>
    <script src="../../public/assets/js/register.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  </body>
</html>