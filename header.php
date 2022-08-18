<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Alex Website</title>
</head>
<body>
    <div class="links">
        <a href="index.php?page=start"><span class="material-symbols-outlined">home
        </span></a>
        <a href="index.php?page=contact"><span class="material-symbols-outlined">
        contact_support
        </span></a>
        <a href="tos.php"><span class="material-symbols-outlined">policy
        </span></a>
        <?php
            if (isset($_SESSION["useruid"])) {
                $headline = 'Herzlich Willkommen ';
                $user = ($_SESSION["useruid"]);
                echo "<a href='profile.php'><span class='material-symbols-outlined'>
                account_circle
                </span></a>&nbsp";
                echo "<a href='logout.inc.php'><span class='material-symbols-outlined'>logout
                </span></a>";
            }
            else {
                $headline = 'Herzlich Willkommen ';
                echo "<a href='signup.php'><span class='material-symbols-outlined'>
                person_add
                </span></a>&nbsp";
                echo "<a href='login.php'><span class='material-symbols-outlined'>
                login</span></a>";
            }
        ?>
    </div>