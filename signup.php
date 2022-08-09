<section class="signup-now">
    <h2><br>Join Us Today on <span class="rainbow-text">amogus.com</span></h2>
    <div class="signup">
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name..."><br>
            <input type="text" name="email" placeholder="Email..."><br>
            <input type="text" name="uid" placeholder="Username..."><br>
            <input type="password" name="pwd" placeholder="Password..."><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>
            <button type="submit" name="submit">Create Now</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p> Fill in the fields, dummy!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username</P>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email</P>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't Match</P>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, vewwy sowwy!</P>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>You can now log in! :D</P>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username is taken</P>";
        }
}
    ?>
</section>

<?php
    include_once 'index.php';
?>