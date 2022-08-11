<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    if(isset($_GET['page'])) {
        if($_GET['page'] == 'contact') {
            echo '<h2><br>Kontaktiere Uns</h2>
            <p>You may do so over email.<br> <strong>EMAIL</strong>: 
            <a class="mail" href="mailto:alexifeulp@gmail.com">
            Alexifeulp@gmail.com
            </a>
            </p>';
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