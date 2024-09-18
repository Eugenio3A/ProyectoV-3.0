<h1>LISTA DE USUARIOS</h1>

<br>

<a href="<?php echo base_url(); ?>index.php/estudiante/curso">
<button type="button" class="btn btn-warning">VER HABILITADOS</button>
</a>


<table class="table">
	<thead>
		<th>No.</th>
		<th>Nombre</th>
		<th>Primer Apellido</th>
		<th>Segundo Apellido</th>
		<th>Email</th>
		<th>Contraseña</th>
		<th>Direccion</th>
		<th>Telefono</th>
	</thead>
	<tbody>
		<?php
		$contador=1;
		foreach($alumnos->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $contador; ?></td>
			<td><?php echo $row->nombre; ?></td>
			<td><?php echo $row->primerApellido; ?></td>
			<td><?php echo $row->segundoApellido; ?></td>
			<td><?php echo $row->cuenta; ?></td>
			<td><?php echo $row->contrasenia; ?></td>
			<td><?php echo $row->telefono; ?></td>
			<td><?php echo $row->direccion; ?></td>
			<td>
<?php
echo form_open_multipart("estudiante/habilitarbd");
?>
<input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
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
