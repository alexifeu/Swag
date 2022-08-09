<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    if(isset($_GET['page'])) {
        if($_GET['page'] == 'contact') {
            echo '<h2><br>Kontaktier Uns</h2>';
            }
        elseif($_GET['page'] == 'start') {
            if (isset($_SESSION["useruid"])) {
                echo '<h1><br>' . $headline, $user . '</h1>';
            }
            else {
                echo '<h1><br>' . $headline . '</h1>';
            }
        }
        elseif($_GET['page'] == 'logout') {
                echo '<h1><br>See you next time</h1>';
        }
    }
    include_once 'footer.php';
?>