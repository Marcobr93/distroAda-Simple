<?php
include_once 'config.php';
include_once 'connect_db.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distro ADA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Gestor de distribuciones</h1>
    <ul>
        <li><a href="list.php">Lista de distribuciones</a></li>
        <li><a href="distro.php">Información de distribuciones</a></li>
        <li><a href="add.php">Añadir distribuciones</a></li>
    </ul>
</div>
</body>
</html>