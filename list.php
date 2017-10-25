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

        </tr>
        <?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><a href="update.php?id=<?=$row['id']?>" class="btn btn-success">Editar</a></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="submit" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>

