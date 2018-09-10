<?php
 require_once 'Clases/Espectaculos.class.php';
 $esp = Espectaculos::listAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cotetus</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilos.css">

    </head>
    

    <body>
        <header>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="icon-menu">
            </label>
            
                <nav class="menu">  
                <ul>
                    <li class="submenu"><a href="#">LOGO</a>
                    </li>
                    <li class="submenu"><a href="#">Espectaculos</a>
                        <ul>
                            <li><a href="#">TODOS</a></li>
                            <li><a href="#">EN GIRA</a></li>
                            <li><a href="#">CIUDADES</a></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="#">Agenda</a>
                    </li>
                    <li class="submenu"><a href="#">Contactenos</a>
                    </li>
                    <li class="submenu"><a href="#">Comprar</a>
                </nav>
        </header>
        <div>
       <ul>
      <?php foreach($esp as $item): ?>
      <li> <?php echo $item['nombre'] . ' - ' . $item['descripcion'] .' - ' . $item['artista'] . ' - ' . $item['img']; ?> </li>
      <?php endforeach; ?>
      </ul>
      </div>
    </body>
</html>