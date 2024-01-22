<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: ../paginas/intranet.php?mensaje=error');
    }

    include '../recursos/model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $precio = $_POST['txtPrecio'];
    $img = $_POST['txtImg'];
    $codmar = $_POST['txtCodmar'];

    $sentencia = $bd->prepare("UPDATE producto SET nombre = ?, precio = ?,img = ?, codmar = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $precio, $img, $codmar, $codigo]);

    if ($resultado === TRUE) {
        header('Location: ../paginas/intranet.php?mensaje=editado');
    } else {
        header('Location: ../paginas/intranet.php?mensaje=error');
        exit();
    }
    
?>