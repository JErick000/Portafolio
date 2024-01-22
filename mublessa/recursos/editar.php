<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<?php
    if(!isset($_GET['codigo'])){
        header('Location: ../paginas/intranet.php?mensaje=error');
        exit();
    }

    include_once '../recursos/model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from producto where codigo = ?;");
    $sentencia->execute([$codigo]);
    $producto = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="../recursos/editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $producto->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="number" class="form-control" name="txtPrecio" autofocus required
                        value="<?php echo $producto->precio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">imagen: </label>
                        <input type="text" class="form-control" name="txtImg" autofocus required
                        value="<?php echo $producto->img; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca: </label>
                        <select name="txtCodmar" required>
                        <option value="" disabled selected>Selecciona una marca</option>
                        <?php
                     $sentencia = $bd -> query("select * from marca");
                     $marca = $sentencia->fetchAll(PDO::FETCH_OBJ);
                    /* $sentencia2 = $bd -> query("select codmar from producto where ".$producto->nombre." =nombre");
                     $producto2 =$sentencia2-> fetch(PDO::FETCH_OBJ);*/
                     foreach($marca as $dato){ 
                        if($producto->codmar == $dato->codmar){ 
                            echo "<option selected value='" . $dato->codmar . "'>" . $dato->nommar . "</option>"; 
                        }
                        else{
                        echo "<option value='" . $dato->codmar . "'>" . $dato->nommar . "</option>"; }}
                    ?>

                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $producto->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

