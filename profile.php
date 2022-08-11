<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    include_once 'dbh.inc.php';
    $sql = "SELECT * FROM users WHERE usersUid = '$user';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br><br>Username: ";
            echo $row['usersUid'];
            echo "<br><br>Name: ";
            echo $row['usersName'];
            echo "<br><br>Email: ";
            echo $row['usersEmail'];
            echo "<br><br>ID: ";
            echo $row['usersId'];
            echo "<br><br>Password: lol you wish";
        }
    }

    echo "<p>This button can change everything to your liking :D</p>";
    echo '<a href="edit.php">Edit your Profile</a>';
    include_once 'footer.php';
?>