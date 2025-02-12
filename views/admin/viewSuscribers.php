<?php 
    session_start();
    require '../secure/disconnected.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="../../public/assets/css/style.css"></link>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <title>Admin | Suscribers</title>
    </head>
    <body>
        <?php
        include "./includes/adminHeader.php";
        include "./includes/sidebar.php";
        ?>
        <div id="main-content" class="container allContent-section py-4">
            <div>
                <h3>Suscribers List</h3>
                <table id="list">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Joining date</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <script type="text/javascript" src="../../public/assets/js/utils/script.js"></script>
        <script src="../../public/assets/js/displaysuscriber.js"></script>   
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>
