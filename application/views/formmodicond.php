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
<input type="text" class="form-control" name="domicilio" placeholder="Escribe direccion de domicilio" value="<?php echo $row->domicilio; ?>" required>
<input type="text" class="form-control" name="foto" placeholder="Inserte foto del conductor" value="<?php echo $row->foto;?>">
<input type="email" class="form-control" name="cuenta" placeholder="crea tu cuenta email" required>
<input type="password" class="form-control" name="contrasenia" placeholder="crea tu contraseña" required>

<button type="submit" class="btn btn-success">Agregar Conductor</button>
<?php
echo form_close();
}
?>
