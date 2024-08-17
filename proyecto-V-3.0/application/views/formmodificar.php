<br><br>
<h1>MODIFICAR USUARIO</h1>
<br>


<?php
foreach($infoestudiante->result() as $row)
{
?>
<?php
echo form_open_multipart("estudiante/modificarbd");
?>
<input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" value="<?php echo $row->nombre; ?>" required>
<input type="text" class="form-control" name="familia" placeholder="Escribe apellido de la familia" minlength="3" maxlength="20" value="<?php echo $row->familia; ?>" required>
<input type="text" class="form-control" name="direccion" placeholder="Escribe dsu direccion" value="<?php echo $row->direccion; ?>" required>
<input type="number" min="1000000" max="99999999" class="form-control" name="telefono" placeholder="Escribe su numero de telefono" value="<?php echo $row->telefono; ?>" required>
<button type="submit" class="btn btn-success">Modificar Usuario</button>
	
<?php
echo form_close();
}
?>