<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
<?php
    $user = ($_SESSION["useruid"]);
        if (isset($_SESSION["useruid"])) {
            echo '<h1><br>Go ahead ' . $user . ',<br>you know what to do</h1>';
        }
?>
</body>
</html>
<?php
    include_once 'index.php';
?>