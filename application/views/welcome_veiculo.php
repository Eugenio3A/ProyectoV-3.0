
	</style>
</head>
<body>

<div id="container">

	<h1>LISTA DE VEICULO</h1>

<div align="center">
<table border="1">
	<thead>
		<th>No.</th>
        <th>No.Movil</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Placa</th>
		<th>Tipo</th>
	</thead>
	<tbody>
		<?php
		$contador=1;
		foreach($alumnos->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $contador; ?></td>
			<td><?php echo $row->numMovil; ?></td>
			<td><?php echo $row->modelo; ?></td>
			<td><?php echo $row->marca; ?></td>
			<td><?php echo $row->placa; ?></td>
            <td><?php echo $row->tipo; ?></td>
		</tr>
		<?php
		$contador++;
		}
		?>
	</tbody>
</table>
</div>

	<h1>Welcome to CodeIgniter!!!</h1>
	<h1>Ruta base:</h1>
	<h1><?php echo base_url(); ?></h1>

	<img src="<?php echo base_url();?>img/usuario.jpg">

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

