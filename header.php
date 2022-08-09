<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Alex Website</title>
</head>
<body>
    <div class="links">
        <a href="index.php?page=start">Start</a>
        <a href="index.php?page=contact">Kontakt</a>
        <a href="tos.php">Legal</a>
        <?php
            if (isset($_SESSION["useruid"])) {
                $headline = 'Herzlich Willkommen ';
                $user = ($_SESSION["useruid"]);
                echo "<a href='profile.php'>Profile</a>&nbsp";
                echo "<a href='logout.inc.php'><span class='material-symbols-outlined'>logout
                </span></a>";
            }
            else {
                $headline = 'Herzlich Willkommen ';
                echo "<a href='signup.php'>Register</a>&nbsp";
                echo "<a href='login.php'><span class='material-symbols-outlined'>
                login</span></a>";
            }
        ?>
    </div>