    <button class="button edit"><strong><a href='?c=ciu&a=agregar'>Agregar nueva ciudad</a></strong>
          </button>
	<table class="main-container" align="center" >
		<thead>
        <tr>
            <th>Id</th>
            <th>Ciudad</th>
            <th>Editar</th>
            <th>Eliminar</th>          
        </tr>
        </thead>
        <?php foreach($this->model->listAll() as $item): ?>
        <tr><td><?php echo $item['id']; ?></td>
        	<td><?php echo $item['nombre']; ?></td>
        	<td><button class="cienx"><a <?php echo "href='?c=ciu&a=Crud&id= ".$item['id']."'";?>>Editar</a></button></td>
        	<td><button class="cienx"><a <?php echo "href='?c=ciu&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
