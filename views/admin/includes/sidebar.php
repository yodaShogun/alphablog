<!-- Sidebar -->

    <?php if($_SESSION['user']['role'] == 'admin') {?>
        <div class="sidebar" id="mySidebar">
            <div class="side-header">
                <img class="rounded" src="http://localhost/alphablog/public/uploads/teams/<?= str_replace(" ","",$_SESSION['user']['name'])?>/<?= $_SESSION['user']['profile']?>" width="120" height="120" alt="Swiss Collection"> 
                <h5 style="margin-top:10px;">Hello, <?= $_SESSION['user']['name']?></h5>
            </div>

            <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
                <a href="./viewposts.php"><i class="fa fa-list"></i> Posts</a>
                <a href="./invite.php"><i class="fa fa-user"></i> Members</a>
                <a href="./viewcategories.php"><i class="fa fa-list"></i> Category</a>
                <a href="./viewsuscribers.php"><i class="fa fa-list"> Suscribers</i></a>
        </div>
    <?php }else { ?>
        <div class="sidebar" id="mySidebar">
            <div class="side-header">
                <img class="rounded" src="http://localhost/alphablog/public/uploads/teams/<?= str_replace(" ","",$_SESSION['user']['name'])?>/<?= $_SESSION['user']['profile']?>" width="120" height="120" alt="Swiss Collection"> 
                <h5 style="margin-top:10px;">Hello, <?= $_SESSION['user']['name']?></h5>
            </div>
            <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
                <a href="./viewposts.php"><i class="fa fa-list"></i> Posts</a>
        </div>
    <?php } ?>
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


