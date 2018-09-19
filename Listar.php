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
        <link rel="stylesheet" type="text/css" href="estilo/divs-espectaculos.css">
        <link rel="stylesheet" type="text/css" href="estilo/estilos.css">
        

    </head>
    

    <body>
        <header>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="icon-menu">
            </label>
            
                <nav class="menu">  
                <ul>
                    </li>
                    <li class="submenu"><a href="#">Espectaculos</a>
                    </li>
                    <li class="submenu"><a href="#">Agenda</a>
                    </li>
                    <li class="submenu"><a href="#">Contactenos</a>
                    </li>
                    <li class="submenu"><a href="#">Comprar</a>
                    </li>
                </ul>
                </nav>
                 
        </header>
        <div id="wrapper-esp-all">
        	<div class="menu-div-esp">
        		<ul id="menu-esp-ul">
        			<li><a href="#">Todos los Espectaculos</a></li>
        			<li><a href="#">En Gira</a></li>
        			<li><a href="#">Todas las Ciudades</a></li>
        		</ul></div>
        	<div id="row">
                <!-- Posible cambios con JavaScript-->
      	<?php foreach($esp as $item): ?>
        	<div id="esp-wrapper">
        	<img id="esp-img" <?php echo "src = 'image/".$item['img']."'";?>/>
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['artista'];?></p>
           </div>
  		<?php endforeach; ?>
       </div>
       </div>
    
    </body>
</html>