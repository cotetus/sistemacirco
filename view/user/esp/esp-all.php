  <div class="slideshow-container">
  <?php foreach($this->model->listAll() as $item): ?>
  <div class="mySlides fade">
  <img <?php echo "src = '../../assets/image/banner/".$item['banner']."'";?> style="width: 100%"/>
  <h1 class="text"><?php echo $item['artista']; ?>
  </h1>
</div>
<?php endforeach; ?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="icon-menu">
            </label>
            
                <div  class="menu">  
                <ul style="background-color: #8E8E8E">
                    <li ><a href="?c=esp&a=Index">En gira</a>
                    </li>
                    <?php foreach($this->ciudad->listAll() as $ciu): ?>
                    <li ><a href="?c=ciu&a=Index"><?php echo $ciu['nombre'] ?></a>
                    <?php endforeach; ?>
                    </li>
                </ul>
                </div>

          <div  style="background-color: white" id="row">
                <!-- Posibles cambios con JavaScript--> 
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img class="tooltip"id="esp-img" <?php echo "src = '../../assets/image/".$item['img']."'";?>/> 
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo substr($item['artista'], 0,20)."...";?></p>
          <button class="cienx"><strong><a <?php echo "href='?c=esp&a=One&id= ".$item['id']."'";?>>Ver más</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>