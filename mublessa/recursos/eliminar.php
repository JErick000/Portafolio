<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php 
    if(!isset($_GET['codigo'])){
        header('Location: ../paginas/intranet.php?mensaje=error');
        exit();
    }

    include '../recursos/model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM producto where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ../paginas/intranet.php?mensaje=eliminado');
    } else {
        header('Location: ../paginas/intranet.php?mensaje=error');
    }
    
?>