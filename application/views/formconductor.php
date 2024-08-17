<br><br>
<h1>AGREGAR CONDUCTOR</h1>
<br>

<?php
echo form_open_multipart("conductor/agregarbd2");
?>

<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" required>
<input type="text" class="form-control" name="primerApellido" placeholder="Escribe primer Apellido" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="segundoApellido" placeholder="Escribe segundo Apellido" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="licencia" placeholder="Escribe numero de licencia" required>
<input type="number" min="1000000" max="99999999" class="form-control" name="telefono" placeholder="Escribe telefono" required>
<input type="text" class="form-control" name="direccion" placeholder="Escribe direccion" required>
<input type="text" class="form-control" name="antecedentes" placeholder="Escribe antecedentes" required>
<button type="submit" class="btn btn-success">Agregar Conductor</button>

<?php
echo form_close();
?>
