<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'header.php';
    $user = ($_SESSION["useruid"]);
    if (isset($_SESSION["useruid"])) {
        echo '<h1><br>Go ahead ' . $user . ',<br>you know what to do</h1>';
    include_once 'dbh.inc.php';
    $sql = "SELECT * FROM users WHERE usersUid = '$user';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    }
    echo "<form>";
        echo "<input type='text' name='uid' placeholder='Change Username'>";
        echo "<input type='password' name='pwd' placeholder='Change Password'>";
        echo "<button type='submit' name='submit'><span class='material-symbols-outlined'>
        save
        </span></button>";
    echo "</form>";
    echo '<div class="profil">';
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<br>Username: ";
                echo $row['usersUid'];
                echo "<br><br>Name: ";
                echo $row['usersName'];
                echo "<br><br>Email: ";
                echo $row['usersEmail'];
                echo "<br><br>ID: ";
                echo $row['usersId'];
                echo "<br><br>Change Password";
                echo "<br><br>Confirm Password";
            }
        }
    echo "</div>";
    include_once 'footer.php';
?>