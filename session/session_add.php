<?php
session_start();

$_SESSION[$_POST['key']] = $_POST['value'];

header('Location: /session.php?add=1&key=' . htmlspecialchars($_POST['key']) . '&value=' . htmlspecialchars($_POST['value']));
