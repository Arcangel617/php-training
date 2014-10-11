<?php

session_start();
require_once 'lib.php';

if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
    try {

        $user = getUser($_POST['name']);
        if (!isset($_SESSION['blockedUsers'])) {
            $_SESSION['blockedUsers'] = array();
        }

        if ($user) {
            array_push($_SESSION['blockedUsers'], $user['name']);
        }


        if (!is_null($user) && $user['password'] == md5($_POST['password'])) {

            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
        } else {

            $_SESSION['loginAttempt'] = $_SESSION['loginAttempt'] + $_POST['loginAttempt'];

            if ($_SESSION['loginAttempt'] <= 3) {

                Header('Location: index.php?loginAttempt=' . $_SESSION['loginAttempt']);
            } else {
                blockUser($_SESSION['blockedUsers']);
                Header('Location: index.php?error=You Have tried many times!');
                
            }
        }
    } catch (Exception $exc) {
        logger('Error trying to get user: ' . $exc->getMessage());

        header('Location: error.php');
    }
} else {
    Header('Location: index.php?error=login');
}
?>
