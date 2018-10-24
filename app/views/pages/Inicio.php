<?php require_once RUTA_APP .'/views/inc/header.php'; ?>
          <div id="row">
                <!-- Posibles cambios con JavaScript-->
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img class="tooltip"id="esp-img" <?php echo "src = 'assets/image/".$datos['img']."'";?>/> 
        	<h3><?php echo $datos['nombre'];?></h3>
        	<p><?php echo $datos['artista'];?></p>
          <button class="button delete"><strong><a <?php echo "href='?c=esp&a=Eliminar&id= ".$datos['id']."'";?>>Eliminar</a></strong></button>
          <button class="button edit"><strong><a <?php echo "href='?c=esp&a=Crud&id= ".$datos['id']."'";?>>Editar</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>
<?php require_once RUTA_APP .'/views/inc/footer.php'; ?> 