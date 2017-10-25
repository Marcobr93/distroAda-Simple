<?php
include_once 'config.php';
include_once 'connect_db.php';
include_once 'helpers.php';

$queryResult = $pdo->query("SELECT * from distribuciones");
?>

 <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista distribuciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Lista de distribuciones</h1>

    <ul>
        <li><a class="btn btn-primary" href="index.php">Inicio</a></li>
    </ul>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>OS Type</th>
            <th>Basado en</th>
            <th>Origen</th>
            <th>Arquitectura</th>
            <th>Escritorio</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Popularidad</th>
        </tr>
        <?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><?=$row['ostype']?></td>
                <td><?=$row['basado']?></td>
                <td><?=$row['origen']?></td>
                <td><?=$row['arquitectura']?></td>
                <td><?=$row['escritorio']?></td>
                <td><?=$row['categoria']?></td>
                <td><?=$row['estado']?></td>
                <td><?=$row['popularidad']?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>

