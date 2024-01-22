<?php include "template/header.php";
 ?>
    <nav class="nav bg-dark" >
              <a class="nav-link active" href="index.php" style="color:white;">Inicio</a>
              <a class="nav-link active" href="paginas/departamento.php" style="color:white;">Departamento</a>
              
              <a class="nav-link active" href="paginas/grado.php" style="color:white;">Grado</a>
              <a class="nav-link active" href="paginas/persona.php" style="color:white;">Persona</a>
              <a class="nav-link active" href="paginas/profesor.php" style="color:white;">Profesor</a>
            </nav>
    <section>

        <hr>
          <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                      name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="img/foto.jpg">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="img/banner.png">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="img/banner2.jpg">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
<br>
        <h5><p>La Universidad La República (abreviada ULARE) es una universidad privada chilena, fundada el 12 de septiembre de 1988. Adquirió su autonomía en 2001, con la Ley N.°18.962, Orgánica Constitucional de Enseñanza y el Acuerdo N.°13.

La semana del 15 de enero, la Corte de Apelaciones de Santiago confirmó su cierre definitivo, tras rechazar su plan de recuperación.

Actualmente no se encuentra acreditada por la Comisión Nacional de Acreditación (CNA-Chile).​ Figura en la posición 86 dentro de las universidades chilenas según la clasificación webométrica del CSIC (julio de 2020).</p></h5>

  <br>


<div class="new-cards">
      <div>
          <img src="img/card1.jpg" alt="">
          <h3>Profesores</h3>
          <p>Contamos con una planta docente de 600 profesionales en diversas áreas.</p>
          <a href="paginas/profesor.php">Descubre más</a>
      </div>
            <div>
          <img src="img/card2.jpg" alt="">
          <h3>Alumnos</h3>
          <p>Conformada por más de 2.200 estudiantes en las distintas sedes.</p>
          <a href="paginas/persona.php">Descubre más</a>
      </div>
             <div>
          <img src="img/card3.jpg" alt="">
          <h3>Grados</h3>
          <p>Más de 20.000 titulados en 33 años de historia.</p>
          <a href="paginas/grado.php">Descubre más</a>
      </div>
            <div>
          <img src="img/card4.jpg" alt="">
          <h3>Departamento</h3>
          <p>En ULARE tenemos una gran comunidad con presencia en 200 comunas de Chile.</p>
          <a href="paginas/departamento.php">Descubre más</a>
      </div>
  </div>

    </section>
  </div>




<?php include "template/footer.php"; 
?>