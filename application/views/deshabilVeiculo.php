<h1>LISTA DE VEHICULO</h1>

<br>

<a href="<?php echo base_url(); ?>index.php/vehiculo/curso">
<button type="button" class="btn btn-warning">VER HABILITADOS</button>
</a>


<table class="table">
	<thead>
        
	</thead>
	<tbody>
		<?php
		$contador=1;
		foreach($taxis->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $contador; ?></td>
			<td><?php echo $row->numMovil; ?></td>
			<td><?php echo $row->modelo; ?></td>
			<td><?php echo $row->marca; ?></td>
			<td><?php echo $row->placa; ?></td>
            <td><?php echo $row->tipo; ?></td>
			<td><?php echo $row->foto; ?></td>
			<td>
<?php
echo form_open_multipart("vehiculo/habilitarbd");
?>
<input type="hidden" name="id_vehiculo" value="<?php echo $row->id_vehiculo; ?>">
<button type="submit" class="btn btn-warning">Habilitar</button>
<?php
echo form_close();
?>
			</td>
		</tr>
		<?php
		$contador++;
		}
		?>
	</tbody>
</table>

