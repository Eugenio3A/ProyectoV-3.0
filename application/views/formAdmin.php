<br><br>
<h1>AGREGAR ADMINISTRADOR</h1>
<br>

<?php
echo form_open_multipart("administrador/agregarbd3");
?>

<input type="text" class="form-control" name="login" placeholder="Escribe nombre" required>
<input type="text" class="form-control" name="codigo" placeholder="Escribe contraseña" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="cargo" placeholder="Escribe cargo" minlength="3" maxlength="20" required>
<button type="submit" class="btn btn-success">Agregar Administrador</button>

<?php
echo form_close();
?>
