<br><br>
<h1>CREAR CUENTA DE ADMINISTRADOR</h1>
<br>

<?php
echo form_open_multipart("administrador/agregarbd3");
?>

<input type="text" class="form-control" name="ciNit" placeholder="Escribe numero de CI" required>
<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre de Administrador" required>
<input type="text" class="form-control" name="primerApellido" placeholder="Escribe Primer Apellido" required>
<input type="text" class="form-control" name="segundoApellido" placeholder="Escribe Segundo Apellido" required>
<input type="email" class="form-control" name="login" placeholder="Escribe nombre" required>
<input type="password" class="form-control" name="codigo" placeholder="Escribe contraseña" minlength="3" maxlength="250" required>
<input type="text" class="form-control" name="cargo" placeholder="Escribe Turno" minlength="3" maxlength="100" required>
<button type="submit" class="btn btn-success">Agregar Administrador</button>

<?php
echo form_close();
?>
