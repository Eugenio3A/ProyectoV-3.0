<h1>LISTA DE CONDUCTORES</h1>

<br>

<a href="<?php echo base_url(); ?>index.php/conductor/curso">
<button type="button" class="btn btn-warning">VER HABILITADOS</button>
</a>


<table class="table">
	<thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>primerApellido</th>
        <th>segundoApellido</th>
        <th>licencia</th>
        <th>Teléfono</th>
        <th>direccion</th>
        <th>antecedentes</th>
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
            <td><?php echo $row->licencia; ?></td>
            <td><?php echo $row->telefono; ?></td>
            <td><?php echo $row->direccion; ?></td>
            <td><?php echo $row->antecedentes; ?></td>
            <td>
<?php
echo form_open_multipart("conductor/habilitarbd");
?>
<input type="hidden" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
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
