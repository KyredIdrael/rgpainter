<?php
/**
 * Pattern GET Data
 * login=0 is some empty filds
 * error=0 is incorrect data
 */
if (empty(addslashes($_POST['user'])) || empty(addslashes($_POST['pw']))) {
    header("Location: ../v/login.html?login=0");
} else {
        require_once '../m/user.php';
        $user = new User();
        $user->username = addslashes($_POST['user']);
        $user->password = hash("sha512", addslashes($_POST['pw']));

        if ($user->login() == true) {
            header("Location: ../v/dashboard.php");

        } else {
            header("Location: ../v/login.php?error=0");
        }
}
?>