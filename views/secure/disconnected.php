<?php
    if(!isset($_SESSION['user']))
        header('location: http://localhost/alphablog/views/login.php');
?>