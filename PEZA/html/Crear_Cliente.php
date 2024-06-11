<?php

?>


<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | Crear Cliente </title>
      <link rel="stylesheet" href="http://localhost/PEZA/CSS/styles.css">
      <link rel="stylesheet" href="http://localhost/PEZA/CSS/cliente.css">
      <!-- Font Awesome Cdn Link -->
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="http://localhost/PEZA/imagenes/LogoPeza.png" alt="">
              <span class="nav-item">DashBoard</span>
            </a></li>

            <li><a href="http://localhost/PEZA/html/">
              <i class="fas fa-home"></i>
              <span class="nav-item">INICIO</span>
            </a></li>

            <li><a href="http://localhost/PEZA/html/clientes.html">
              <i class="fas fa-user"></i>
              <span class="nav-item">CLIENTES</span>
            </a></li>

            <li><a href="http://localhost/PEZA/html/inventario.html">
              <i class="fas fa-wallet"></i>
              <span class="nav-item">INVENTARIO</span>
            </a></li>

            <li><a href="">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">GRÁFICAS</span>
            </a></li>

            <li><a href="">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">TAREAS EN PROCESO</span>
            </a></li>

            <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">RESEÑAS</span>
            </a></li>
            
            <li><a href="http://localhost/peza/indexio.php">
              <i class="fas fa-cog"></i>
              <span class="nav-item">CERRAR SESION</span>
            </a></li>

        </nav>
        
          <form class="form-register" action="http://localhost/PEZA/php/clientes.php" method ="POST">
            <h4>Creación de Nuevo Cliente</h4>
            <input class="controls" type="text" name="nombre_persona" id="nombre" placeholder="Nombre">
            <input class="controls" type="text" name="apellido_persona" id="apellidos" placeholder=" Apellido">
            <input class="controls" type="email" name="correo_persona" id="correo" placeholder="Correo">
            <input class="controls" type="phone" name="Telefono_persona" id="celular" placeholder="Teléfono">
            <input class="controls" type="text" name="empresa_persona" id="compañia" placeholder="Empresa">
            <input class="botons" type="submit" value="Registrar Cliente">
          </form>
        
    </body>
    </html></span>