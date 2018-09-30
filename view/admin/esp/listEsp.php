          <div id="row">
                <!-- Posibles cambios con JavaScript-->
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <a <?php echo "href='?c=esp&a=Img&id= ".$item['id']."'";?>>
          <img class="tooltip"id="esp-img" <?php echo "src = 'assets/image/".$item['img']."'";?>/> 
          <span class="tooltiptext">Editar Imagen.</span></a>
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['artista'];?></p>
          <button class="button delete"><strong><a <?php echo "href='?c=esp&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a></strong></button>
          <button class="button edit"><strong><a <?php echo "href='?c=esp&a=Crud&id= ".$item['id']."'";?>>Editar</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>

    
