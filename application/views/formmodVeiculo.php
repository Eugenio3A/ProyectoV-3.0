<br><br>
<h1>MODIFICAR VEICULO</h1>
<br>


<?php
foreach($infoveiculo->result() as $row)
{
?>
<?php
echo form_open_multipart("veiculo/modificarbd");
?>
<input type="hidden" name="id_vehiculo" value="<?php echo $row->id_vehiculo; ?>">
<input type="text" class="form-control" name="numMovil" placeholder="Escribe numero de Movil" value="<?php echo $row->numMovil; ?>" required>
<input type="text" class="form-control" name="modelo" placeholder="Escribe Modelo del veiculo" minlength="3" maxlength="20" value="<?php echo $row->modelo; ?>" required>
<input type="text" class="form-control" name="marca" placeholder="Escribe Marca del veiculo" value="<?php echo $row->marca; ?>" required>
<input type="text" class="form-control" name="placa" placeholder="Escribe Placa del veiculo" value="<?php echo $row->placa; ?>" required>
<input type="text" class="form-control" name="tipo" placeholder="Escribe Tipo del veiculo" value="<?php echo $row->tipo; ?>" required>
<button type="submit" class="btn btn-success">Modificar Veiculo</button>
	
<?php
echo form_close();
}
?>

