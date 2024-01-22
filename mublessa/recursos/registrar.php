<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtImg"]) || empty($_POST["txtCodmar"])){
        header('Location: ../paginas/intranet.php?mensaje=falta');
        exit();
    }

    include_once '../recursos/model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $precio = $_POST["txtPrecio"];
    $img = $_POST["txtImg"];
    $codmar = $_POST["txtCodmar"];
  
    
    $sentencia = $bd->prepare("INSERT INTO producto(nombre,precio,img,codmar) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$precio,$img,$codmar]);

    if ($resultado === TRUE) {
        header('Location: ../paginas/intranet.php?mensaje=registrado');
    } else {
        header('Location: ../paginas/intranet.php?mensaje=error');
        exit();
    }
    
?>