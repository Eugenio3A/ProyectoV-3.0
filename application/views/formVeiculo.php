<br><br>
<h1>AGREGAR VEHICULO</h1>
<br>

<?php
echo form_open_multipart("vehiculo/agregarbd");
?>

<input type="text" class="form-control" name="numMovil" placeholder="Escribe numero de movil" required>
<input type="text" class="form-control" name="modelo" placeholder="Escribe modelo de veiculo" minlength="3" maxlength="20" required>
<input type="text" class="form-control" name="marca" placeholder="Escribe marca del veiculo" required>
<input type="text" class="form-control" name="placa" placeholder="Escribe placa del veiculo" required>
<input type="text" class="form-control" name="tipo" placeholder="Escribe tipo del veiculo" required>
<input type="text" class="form-control" name="foto" placeholder="Inserte Foto del veiculo">

<button type="submit" class="btn btn-success">Agregar Veiculo</button>
	
<?php
echo form_close();
?>


