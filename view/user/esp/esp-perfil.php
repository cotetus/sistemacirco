<?php $id = $_GET['id']; ?>
<div class="slideshow-container">
<!-- Foreach-->
<div class="mySlides fade">
  <img  <?php echo "src = '../../assets/image/banner/".$esp['banner']."'";?> style="width: 100%"/>
  <div class="text"><strong><h1><?php echo $esp['nombre'].":"; ?>
  </h1></strong>
  <h3><?php echo $esp['artista'].".."; ?>
  </h3>
  <p><h5 style="width: 60%" align="left"><?php echo $esp['descripcion']; ?></h5></p><br></div>
</div><br>
<!-- Foreach-->
<!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div><br>

           <h1 align = "center" style="color: white">Atracciones</h1>
              <!-- Posibles cambios con JavaScript-->
              <div style="margin-top: auto;" id='row'> 
      	<?php  foreach ($this->atra->listAll() as $item) {
      		if ($id == $item['id_esp']) {
      	echo "
      	<div  id='esp-wrapper'>
          <img class='tooltip'id='esp-img' src = '../../assets/image/".$item['img']."'/> 
        	<h4>".$item['nombre']."</h4>
        	<p>".$item['descripcion']."</p>
          </div>";	
      	}}; ?>
      	</div>
       








