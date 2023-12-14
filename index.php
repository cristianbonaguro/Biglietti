<?php

session_start();

if(isset($_POST['logout'])){
unset($_SESSION['active_login']);
}


if(!isset($_SESSION['active_login']))
header("Location: login.php");

$user = $_SESSION['active_login'];

if(isset($_POST['compra'])){
    echo "ciao";
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['cognome'] = $_POST['cognome'];
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['day'] = $_POST['day'];
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['radio'] = $_POST['bigletti'];
    header("Location: riepilogo.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="logout">
    <form method="post">
        <input type="submit"name="logout" value="Logout">
    </form>
</div>

<div id="contenitore">
    <div id="right">
        <img src="images/matrix.jpg" alt="image">
    </div>
    <div id="left">
        <form method="post">
            <div id="pops">
            <input type="text" name="nome" placeholder="nome" required>
            <input type="text" name="cognome" placeholder="cognome" required>
            <input type="text" name="tel" placeholder="num. telfono" required>
            <input type="text" name="email"placeholder="email"required>
            <input name="day" type="datetime-local" placeholder="data"required>
            <input type="number" name="number"min="0" max="5"placeholder="n. bigletti"required>
            </div>
            <div id="fin">
            <div class="radio">
            <h2>Seleziona il posto</h2>
            </div>
            <div id="con">
            <div class="radio">
            <input type="radio" name="bigletti"value="Sadute Base"required>Sedute Base 12€
            </div>
            <div class="radio">
            <input type="radio" name="bigletti"value="Sadute Plus"required>Sedute Plus 21€
            </div>
            <div class="radio">
            <input type="radio" name="bigletti"value="Poltrone Vip"required>Poltrone Vip 32€
            </div>
            </div>
            <div id="submit">
            <input type="submit" name="compra" value="Compra">
        </div>
         </div>
        </from>
    </div>
</div>
</body>
</html>