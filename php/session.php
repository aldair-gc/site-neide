<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: /login.php?msg=14');
    exit;
}
