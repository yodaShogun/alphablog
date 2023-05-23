<?php
    require '../../vendor/autoload.php';

    use src\data\ManagerDao;
    $instance = new ManagerDao();

    $taskQuery = $instance->selectTask();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <?php
        include "./includes/adminHeader.php";
        include "./includes/sidebar.php";
    ?>
    <div id="main-content" class="container allContent-section py-4">
        <h2>Invite Members</h2>
        <div>
            <form action="" method="post" id="members">
                <label for="role">Role</label>
                <select name="role" id="role">
                  <?php while($taskList = $taskQuery->FETCH(PDO::FETCH_OBJ)){ ?>
                    <option value="<?= $taskList->task?>"><?=$taskList->task_desc?></option>
                  <?php } ?>
                </select>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Invite</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../public/assets/js/utils/script.js"></script>
    <script src="../../public/assets/js/invite.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>