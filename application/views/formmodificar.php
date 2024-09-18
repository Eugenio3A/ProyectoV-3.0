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
<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" required>
<input type="text" class="form-control" name="primerApellido" placeholder="Escribe Primer Apellido" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="segundoApellido" placeholder="Escribe Segundo Apellido" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="direccion" placeholder="Escribe direccion" required>
<input type="number" min="1000000" max="99999999" class="form-control" name="telefono" placeholder="Escribe telefono" required>
<button type="submit" class="btn btn-success">Agregar Usuario</button>
<input type="text" class="form-control" name="cuenta" placeholder="Escribe Email" required>
<input type="text" class="form-control" name="contrasenia" placeholder="Escribe Contraseña" required>

<button type="submit" class="btn btn-success">Modificar Usuario</button>
	
<?php
echo form_close();
}
?>