          <div id="row">
                <!-- Posibles cambios con JavaScript-->
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <a <?php echo "href='?c=esp&a=Img&id= ".$item['id']."'";?>>
          <img id="esp-img" <?php echo "src = 'assets/image/".$item['img']."'";?>/> 
          </a>
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['artista'];?></p>
          <a <?php echo "href='?c=esp&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a>
          <a <?php echo "href='?c=esp&a=Crud&id= ".$item['id']."'";?>>Editar</a>
           </div>
  		<?php endforeach; ?>
       </div>

    
