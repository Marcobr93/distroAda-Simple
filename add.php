<?php
include_once 'config.php';
include_once 'connect_db.php';
include_once 'helpers.php';

$errors = [];
if( !empty($_POST) ){
    // Recibo los datos del formulario
    $nombre = $_POST['nombre'];
    $ostype = $_POST['ostype'];
    $basado = $_POST['basado'];
    $origen = $_POST['origen'];
    $arquitectura = $_POST['arquitectura'];
    $escritorio = $_POST['escritorio'];
    $categoria = $_POST['categoria'];
    $estado = $_POST['estado'];
    $popularidad = $_POST['popularidad'];


    if ( empty($errors) ) {
        $nombre = $_POST['nombre'];
        $ostype = $_POST['ostype'];
        $basado = $_POST['basado'];
        $origen = $_POST['origen'];
        $arquitectura = $_POST['arquitectura'];
        $escritorio = $_POST['escritorio'];
        $categoria = $_POST['categoria'];
        $estado = $_POST['estado'];
        $popularidad = $_POST['popularidad'];

        $sql = "INSERT INTO distribuciones (nombre, ostype, basado, origen, arquitectura, escritorio, categoria,estado,popularidad) VALUES (:nombre, :ostype, :basado, :origen, :arquitectura, :escritorio, :categoria, :estado, :popularidad)";
        $result = $pdo->prepare($sql);
        $result->execute([
            'nombre'       => $nombre,
            'ostype'       => $ostype,
            'basado'       => $basado,
            'origen'       => $origen,
            'arquitectura' => $arquitectura,
            'escritorio'   => $escritorio,
            'categoria'    => $categoria,
            'estado'       => $estado,
            'popularidad'  => $popularidad
        ]);
        // Mando la aplicación a la página de inicio
        header('Location: index.php');
    }
}
//dameDato($errors);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir distribución</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Añadir distribución</h1>
    <ul>
        <li><a class="btn btn-primary" href="index.php">Inicio</a></li>
    </ul>
    <hr>
    <form action="add.php" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" >
        </div>
        <?php if( isset($errors['nombre']) ): ?>
            <?php foreach ($errors['nombre'] as $error): ?>
                <p class="bg-danger"><?=$error?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="ostype">OS Type</label>
            <br>
            <select class="form-control" id="ostype" name="ostype">
                <option value="" selected="selected">- Selecciona -</option>
                <option value="linux">Linux</option>
                <option value="bsd">BSD</option>
                <option value="bsd">Solaris</option>
                <option value="bsd">Otro</option>
            </select>
        </div>
        <?php if( isset($errors['ostype']) ): ?>
            <?php foreach( $errors['ostype'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="basado">Basado en</label>
            <input class="form-control" type="text" id="basado" name="basado">
        </div>
        <?php if( isset($errors['basado']) ): ?>
            <?php foreach( $errors['basado'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="origen">Origen</label>
            <input class="form-control" type="text" id="origen" name="origen">
        </div>
        <?php if( isset($errors['origen']) ): ?>
            <?php foreach( $errors['origen'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="arquitectura">Arquitectura</label>
            <input class="form-control" type="text" id="arquitectura" name="arquitectura">
        </div>
        <?php if( isset($errors['arquitectura']) ): ?>
            <?php foreach( $errors['arquitectura'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="escritorio">Escritorio</label>
            <input class="form-control" type="text" id="escritorio" name="escritorio">
        </div>
        <?php if( isset($errors['escritorio']) ): ?>
            <?php foreach( $errors['escritorio'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input class="form-control" type="text" id="categoria" name="categoria">
        </div>
        <?php if( isset($errors['categoria']) ): ?>
            <?php foreach( $errors['categoria'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="estado">Estado</label>
            <br>
            <select class="form-control" id="estado" name="estado">
                <option value="" selected="selected">- Selecciona -</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>
        <?php if( isset($errors['estado']) ): ?>
            <?php foreach( $errors['estado'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="popularidad">Popularidad</label>
            <input class="form-control" type="number" id="popularidad" name="popularidad">
        </div>
        <?php if( isset($errors['popularidad']) ): ?>
            <?php foreach( $errors['popularidad'] as $valor): ?>
                <p class="bg-danger"><?=$valor?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar cambios" >
        </div>
    </form>
</div>
</body>
</html>
