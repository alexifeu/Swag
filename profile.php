<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    $useruid = ($_SESSION["useruid"]);
    echo "<h1><br> Here is your profile $useruid </h1>";
?>
    <p>You can change everything to your liking :^)</p>
    <a href="edit.php">Edit your Profile</a>
<?php
    include_once 'footer.php';
?>