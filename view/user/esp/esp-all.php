
          </button>
          <div id="row">
                <!-- Posibles cambios con JavaScript--> 
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img class="tooltip"id="esp-img" <?php echo "src = '../../assets/image/".$item['img']."'";?>/> 
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['artista'];?></p>
          <button class="button edit"><strong><a <?php echo "href='?c=esp&a=One&id= ".$item['id']."'";?>>Ver espectaculo</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>