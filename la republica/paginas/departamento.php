<?php include "../template/header2.php";
 ?>
  <nav class="nav bg-dark" >
              <a class="nav-link active" href="../index.php" style="color:white;">Inicio</a>
              <a class="nav-link active" href="../paginas/departamento.php" style="color:white;">Departamento</a>
              
              <a class="nav-link active" href="../paginas/grado.php" style="color:white;">Grado</a>
              <a class="nav-link active" href="../paginas/persona.php" style="color:white;">Persona</a>
              <a class="nav-link active" href="../paginas/profesor.php" style="color:white;">Profesor</a>
              
            </nav>
      <h1>Listar Departamento</h1>
      <section>
            <?php
                include "../modelo/conexion.php";
                $cn=new Conexion();
                $cn->DepartamentoList();

                ?>  
            </section>
         </div>
 <?php include "../template/footer.php"; 
?>
