          <div class="mySlides fade">
  <img  src = "../../assets/image/banner/banner.png" style="width: 100%"/>
</div><br>

<input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="icon-menu">
            </label>
            
                <div  class="menu">  
                <ul>
                    </li>
                    <li ><a href="?c=esp&a=Index"></a>
                    </li>
                    <li ><a href="?c=esp&a=Index">Todos losspectaculos</a>
                    </li>
                    <li ><a href="?c=ciu&a=Index">Ciudades</a>
                    </li>
                </ul>
                </div>

          <div  style="background-color: white" id="row">
                <!-- Posibles cambios con JavaScript--> 
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img class="tooltip"id="esp-img" <?php echo "src = '../../assets/image/".$item['img']."'";?>/> 
        	<h3><?php echo $item['nombre'].":";?></h3>
        	<p><?php echo substr($item['artista'], 0,20)."...";?></p>
          <button class="cienx"><strong><a <?php echo "href='?c=esp&a=One&id= ".$item['id']."'";?>>Ver más</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>