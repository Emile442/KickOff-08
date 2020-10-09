<?php

$key = $_POST['key'];
$value = $_POST['value'];

if (empty($_POST['time'])) {
    setcookie($_POST['key'], $_POST['value'], 0, '/');
}else  {
    setcookie($_POST['key'], $_POST['value'], time() + intval($_POST['time']), '/');
}

$add = empty($_POST['time']) ? '1' : '0';

header('Location: /cookies.php?add=' . $add . "&key=$key&value=$value&time=" . $_POST['time']);
