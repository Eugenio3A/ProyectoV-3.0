<h1>LISTA DE USUARIOS</h1>

<br>

<a href="<?php echo base_url(); ?>index.php/veiculo/empresa">
<button type="button" class="btn btn-warning">VER HABILITADOS</button>
</a>


<table class="table">
	<thead>
        <th>No.</th>
        <th>No.Movil</th>
	    <th>Modelo</th>
        <th>Marca</th>
        <th>Placa</th>
		<th>Tipo</th>
	</thead>
	<tbody>
		<?php
		$contador=1;
		foreach($moviles->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $contador; ?></td>
			<td><?php echo $row->numMovil; ?></td>
			<td><?php echo $row->modelo; ?></td>
			<td><?php echo $row->marca; ?></td>
			<td><?php echo $row->placa; ?></td>
            <td><?php echo $row->tipo; ?></td>
			<td>
<?php
echo form_open_multipart("veiculo/habilitarbd");
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
