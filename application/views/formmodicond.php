<br><br>
<h1>MODIFICAR CONDUCTOR</h1>
<br>


<?php
foreach($infoconductor->result() as $row)
{
?>
<?php
echo form_open_multipart("conductor/modificarbd");
?>
<input type="hidden" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" value="<?php echo $row->nombre; ?>" required>
<input type="text" class="form-control" name="primerApellido" placeholder="Escribe primer Apellido" minlength="3" maxlength="20" value="<?php echo $row->primerApellido; ?>" required>
<input type="text" class="form-control" name="segundoApellido" placeholder="Escribe segundo Apellido" minlength="3" maxlength="20" value="<?php echo $row->segundoApellido; ?>" required>
<input type="text" class="form-control" name="licencia" placeholder="Escribe numero de licencia" value="<?php echo $row->licencia; ?>" required>
<input type="number" min="1000000" max="99999999" class="form-control" name="telefono" placeholder="Escribe telefono" value="<?php echo $row->telefono; ?>" required>
<input type="text" class="form-control" name="direccion" placeholder="Escribe direccion" value="<?php echo $row->direccion; ?>" required>
<input type="text" class="form-control" name="antecedentes" placeholder="Escribe antecedentes" value="<?php echo $row->antecedentes;?>" required>
<button type="submit" class="btn btn-success">Agregar Conductor</button>
<?php
echo form_close();
}
?>

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
<input type="text" class="form-control" name="login" placeholder="Escribe nombre" value="<?php echo $row->login; ?>" required>
<input type="text" class="form-control" name="codigo" placeholder="Escribe contraseña" minlength="3" maxlength="20" value="<?php echo $row->codigo; ?>" required>
<input type="text" class="form-control" name="tipo" placeholder="Escribe cargo" minlength="3" maxlength="20" value="<?php echo $row->tipo; ?>" required>
<button type="submit" class="btn btn-success">Agregar Administrador</button>
<?php
echo form_close();
}
?>
