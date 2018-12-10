    <button class="button edit"><strong><a href='?c=cro&a=agregar'>Agregar nuevo conograma</a></strong>
          </button>
	<table class="main-container" align="center" >
		<thead>
        <tr>
            <th>Ciudad</th>
            <th>Espectaculo</th>
            <th>Fecha/inicio</th>
            <th>Fecha/cierre</th>
            <th>Editar</th>
            <th>Eliminar</th>          
        </tr>
        </thead>
        <?php foreach($this->model->listAll() as $item): ?>
        <tr><td><?php echo $item['date_in']; ?></td>
            <td><?php echo $item['date_end']; ?></td>
        	<td><button class="cienx"><a <?php echo "href='?c=cro&a=Crud&id_ciu= ".$item['id_ciu']."'";?>>Editar</a></button></td>
        	<td><button class="cienx"><a <?php echo "href='?c=ciu&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
