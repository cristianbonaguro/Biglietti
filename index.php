<?php

session_start();

if(isset($_POST['logout'])){
unset($_SESSION['active_login']);
}


if(!isset($_SESSION['active_login']))
header("Location: login.php");

$user = $_SESSION['active_login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina login</title>
</head>
<body>
    <form method="post">
        <?= "Benvenuto ".$user ?>
        <input type="submit"name="logout" value="logout">
    </form>
</body>
</html>