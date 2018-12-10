          
          <button class="button edit"><a href='?c=esp&a=agregar'>Agregar nuevo espectaculo</a>
          </button>
          <div id="row">
                <!-- Posibles cambios con JavaScript--> 
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img align="center" id ="esp-img" <?php echo "src = 'assets/image/".$item['img']."'";?>/> 
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo substr($item['artista'], 0,20)."...";?></p>
          <button class="button delete"><strong><a <?php echo "href='?c=esp&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a></strong></button>
          <button class="button edit"><strong><a <?php echo "href='?c=esp&a=Crud&id= ".$item['id']."'";?>>Editar</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>

    
