<br><br>
<h1>AGREGAR USUARIO</h1>
<br>

<?php
echo form_open_multipart("estudiante/agregarbd");
?>

<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" required>
<input type="text" class="form-control" name="familia" placeholder="Escribe familia" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="direccion" placeholder="Escribe direccion" required>
<input type="number" min="1000000" max="99999999" class="form-control" name="telefono" placeholder="Escribe telefono" required>
<button type="submit" class="btn btn-success">Agregar Usuario</button>
	
<?php
echo form_close();
?>
