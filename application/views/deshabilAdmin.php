

<h1>LISTA DE ADMINISTRADOR</h1>

<br>

<a href="<?php echo base_url(); ?>index.php/administrador/curso">
<button type="button" class="btn btn-warning">VER HABILITADOS</button>
</a>


<table class="table">
	<thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Cargo</th>
	</thead>
	<tbody>
		<?php
		$contador=1;
		foreach($alumnos->result() as $row)
		{
		?>
		<tr>
            <td><?php echo $contador; ?></td>
            <td><?php echo $row->login; ?></td>
            <td><?php echo $row->codigo; ?></td>
            <td><?php echo $row->tipo; ?></td>
            <td>
<?php
echo form_open_multipart("administrador/habilitarbd");
?>
<input type="hidden" name="idAdmin" value="<?php echo $row->idAdmin; ?>">
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
