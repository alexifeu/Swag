<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    $user = ($_SESSION["useruid"]);
    if (isset($_SESSION["useruid"])) {
        echo '<h1><br>Go ahead ' . $user . ',<br>you know what to do</h1>';
    }
    include_once 'footer.php';
?>