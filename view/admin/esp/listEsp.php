        	<div id="row">
                <!-- Posibles cambios con JavaScript-->
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
        	<img id="esp-img" <?php echo "src = 'assets/image/".$item['img']."'";?>/>
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['artista'];?></p>
          <a href="#">Ver espectáculo</a>
          <a href="?c=esp&a=Index">Editar</a>
           </div>
  		<?php endforeach; ?>
       </div>

    
