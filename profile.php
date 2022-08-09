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
    <title>Profile</title>
</head>
<body>
    <?php
    $useruid = ($_SESSION["useruid"]);
    echo "<h1><br> Here is your profile $useruid </h1>";
    ?>
    <p>You can change everything to your liking :^)</p>
    <a href="edit.php">Edit your Profile</a>
</body>
</html>
<?php
    include_once 'index.php';
?>