 <!-- nav --> 
<nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5 rounded" href="./index.php">
        <img src="http://localhost/alphablog/public/uploads/teams/<?= str_replace(" ","",$_SESSION['user']['name'])?>/<?= $_SESSION['user']['profile']?>" width="80" height="80" alt="Swiss Collection">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <a href="http://localhost/alphablog/src/controllers/logout.ctrl.php" style="text-decoration:none;">
            <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
        </a>
    </div>  
</nav>
