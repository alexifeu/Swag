<section class="login-now">
    <h2><br>Thanks for being on <span class="rainbow-text">amogus.com</span> :D</h2>
    <h3>Login</h3>
    <div class="login">
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Have a nice day!</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in the fields, dummy!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>You probably made a typo. Try again.</P>";
        }
}
    ?>
</section>

<?php
    include_once 'index.php';
?>