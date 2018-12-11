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
        <tr><?php $id = $item['id_ciu']; $ciu = $this->ciudad->listOne($id);?>
            <td><?php echo $ciu['nombre']; ?></td>
            <?php $id = $item['id_esp']; $esp = $this->espectaculo->listOne($id);?>
            <td><?php echo $esp['nombre']; ?></td>
            <td><?php echo $item['date_in']; ?></td>
            <td><?php echo $item['date_end']; ?></td>
        	<td><button class="cienx"><a <?php echo "href='?c=cro&a=Crud&id_ciu= ".$item['id_ciu']."'";?>>Editar</a></button></td>
        	<td><button class="cienx"><a <?php echo "href='?c=cro&a=Eliminar&id= ".$item['id_ciu']."'";?>>Eliminar</a></button></td>
        </tr>
        <?php endforeach; ?>
    </table>
