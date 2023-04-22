<?php
include 'head.php';
?>
<?php
    include 'nav.php';
?>
<body>
    <!--Slider-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/carro1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="img/carro2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="img/carro3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"data-bs-interval="10000">
            <img src="img/carro4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!--Fin Slider-->
    <br><br>
     <!-- Contenedor Servicios-->
    <div class="container_servicios" id="container_servicios">
      <h1 class="titulo_container_servicios">Servicios</h1>
      <br><br>
      <div class="botones_servicios">
        <a class="boton_mantenimiento"href="">Mantenimiento</a>
        <a class="boton_Alineacion" href="">Alineacion</a>
      </div>
    </div>
    <!--Container Trabaja Con Nosotros-->
    <br><br>
    <div class="container_trabajaConNosotros" id="container_trabajaConNosotros">
      <h1 class="titulo_container_trabajaConNosotros">Trabaja Con Nosotros</h1>
      <p class="contenido_container_trabajaConNosotros">Envía tu hoja de vida al siguiente correo: 
        santanderf333@gmail.com, si tenemos una vacante para ti nos cominicaremos contigo 
        inmediatamente para reaizar el respectivo procedimiento</p>
      
    </div>
    <br><br>
    <!-- Fin Contenerdor Trabaja Con Nosotros-->
    <!--Contenerdor Quienes Somos-->
    <div class="container_quienesSomos" id="container_quienesSomos">
      <h1 class="titulo_container_quienesSomos">Quines Somos</h1>
      <p class="contenido_container_quienesSomos">Somo estudiantes de quinto semestre de Ingeniera En Software
        de la Universidad Fundación de Estudios Superiores Comfanorte (Fesc), en esta pagina web estamos
        realizando un taller para la mteria de desarrollo basico en red, maria dictada por el profesor 
        Angel, en la cual podemos poner en practica la funcion de php include que nos puede ayudar
        a implementar cambios en una sola pagina y que se aplique en las demas sin la necesidad de apicar
        en una por un, esta funcion nos ayuda a agilizar el proceso de desarrollo y a la hora de realizar
        un cambio, no es necesario aplicar el cambio a pagina por pagina sino que solo se la aplicamos a una 
        y automaticamente se aplica en las otras.</p>
    </div>
    <!-- Fin Contenerdor Quienes Somos-->
</body>
    <?php
      include 'footer.php';
    ?>