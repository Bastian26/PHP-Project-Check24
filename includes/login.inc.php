<?php

// Instantiate SignupContr class
include "../classes/dbh.classes.php";
include "../classes/login.classes.php";
include "../classes/login-contr.classes.php";



if ( === true) {
    ?>
    <div class="index-login-login">
            <h4>LOGIN</h4>
            <form action="../Check24-Project/includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
<?php
}

if(isset($_POST["submit"]))
{

    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];


    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error=none");
}

?>