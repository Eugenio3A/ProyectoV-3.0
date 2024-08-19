
<br><br>
<h1>MODIFICAR ADMINISTRADOR</h1>
<br>


<?php
foreach($infoconductor->result() as $row)
{
?>
<?php
echo form_open_multipart("administrador/modificarbd");
?>
<input type="hidden" name="idAdmin" value="<?php echo $row->idAdmin; ?>">
<input type="text" class="form-control" name="ciNit" placeholder="Escribe numero de CI" value="<?php echo $row->ciNit; ?>" required>
<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre de Admistrador" value="<?php echo $row->nombre; ?>" required>
<input type="text" class="form-control" name="primerApellido" placeholder="Escribe Priner Apellido" value="<?php echo $row->primerApellido; ?>" required>
<input type="text" class="form-control" name="segundoApellido" placeholder="Escribe Segundo Apellido" value="<?php echo $row->segundoApellido; ?>" required>
<input type="text" class="form-control" name="login" placeholder="Escribe nombre Login" value="<?php echo $row->login; ?>" required>
<input type="text" class="form-control" name="codigo" placeholder="Escribe contraseña" minlength="3" maxlength="20" value="<?php echo $row->codigo; ?>" required>
<input type="text" class="form-control" name="cargo" placeholder="Escribe Turno" minlength="3" maxlength="20" value="<?php echo $row->cargo; ?>" required>
<button type="submit" class="btn btn-success">Agregar Administrador</button>
<?php
echo form_close();
}
?>            
