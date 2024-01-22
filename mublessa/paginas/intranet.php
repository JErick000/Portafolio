<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link href="../css/estilo1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<title>Intranet</title>
</head>
<body>
     

         <div id="head">
	     <img width="10%" src="../img/logo.jpg"/>
	     <h1>Venta de MueblesSa</h1>
        </div>
	     <hr/>

           
           
                
                
           <section>

           <?php
    include_once "../recursos/model/conexion.php";
    $sentencia = $bd -> query("select * from producto");
    $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de productos
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">precio</th>
                                <th scope="col" style="text-align:center ;">img</th>
                                <th scope="col">marca</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($producto as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->precio; ?></td>
                                <td><img width="100%" src="<?php echo $dato->img; ?>"/></td>
                                <td><?php echo $dato->codmar; ?></td>
                                <td><a class="text-success" href="../recursos/editar.php?codigo= <?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="../recursos/eliminar.php?codigo=<?php
                                 echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="../recursos/registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">precio: </label>
                        <input type="number" class="form-control" name="txtPrecio" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">imagen: </label>
                        <input type="text" class="form-control" name="txtImg" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">marca: </label>
                        <select name="txtCodmar" required>
                        <option value="" disabled selected>Selecciona una marca</option>
                        <?php
                     $sentencia = $bd -> query("select * from marca");
                     $marca = $sentencia->fetchAll(PDO::FETCH_OBJ);
                     foreach($marca as $dato){ 
                        echo "<option value='" . $dato->codmar . "'>" . $dato->nommar . "</option>"; }
                    ?>

                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
         

	    
         
	     
		

        <footer style="height: 4rem;
    background-color: #2AE344; margin-top:17%;">
        <div style="display: flex;margin-top: 20px;">
            <div style="width: 25rem; margin-right:10%; margin-top: 8px;">
                <h1 style="text-align: center;">MueblesSA</h1>
            </div>
            <div class="" style="width: 30rem; margin-right: 10%;">
                
            </div>
            <div class="" style="width: 30rem;margin-top: 15px;">
                <p>copyright @Derechos Reservados</p>
            </div>
        </div>
    </footer>
     
</body>
</html>