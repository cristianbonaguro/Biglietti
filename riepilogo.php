<?php

session_start();

if(isset($_POST['logout'])){
unset($_SESSION['active_login']);
}


if(!isset($_SESSION['active_login']))
header("Location: login.php");

$user = $_SESSION['active_login'];

if(isset($_POST['indietro']))
header("Location: index.php");

if(isset($_POST['conf']))
header("Location: fattura.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="riepilogo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma</title>
</head>
<body>
<div id="time">
       <p> First Acess: <br> <?php echo $_COOKIE['time']; ?></p> 
    </div>
<div id="logout">
    <form method="post">
        <input type="submit"name="logout" value="Logout">
    </form>
</div>
<div id="contenitore">
<div id="risposte">
    <div class="info">
        <div class="titolo">
            <h1>Nome:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['nome']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Cognome:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['cognome']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Num. telefono:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['tel']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Email:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['email']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Data e ora:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['day']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Numero bigletti:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['number']?></p>
        </div>
    </div>
    <div class="info">
        <div class="titolo">
            <h1>Posto:</h1>
        </div>
        <div class="description">
            <p><?php echo $_SESSION['radio']?></p>
        </div>
    </div>
    </div>
    <div id="form">
        <form method="post"> 
        <input type="submit" name="indietro" value="Indietro">
        <input type="submit" name="conf"value="Conferma">
        </form>
    </div>
</div>
</body>
</html>