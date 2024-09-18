<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Conductores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50; /* Fondo oscuro */
            color: #0000; /* Texto claro */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
        }
        h1 {
            color: #f39c12; /* Amarillo dorado */
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
        }
        h2 {
            color: #f39c12; /* Amarillo dorado */
            font-family: 'Arial', sans-serif;
        }
        p {
            color: #ecf0f1; /* Texto claro */
            font-family: 'Arial', sans-serif;
        }
        .table {
            margin-top: 30px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
            color: #2c3e50; /* Texto oscuro */
        }
        .table thead th {
            color: #2c3e50; /*  */
        }
        .table tbody td {
            color: #2980b9; /* Azul */
        }
        .btn-primary {
            background-color: #3498db; /* Azul claro */
            border-color: #3498db;
            color: #fff; /* Texto blanco */
        }
        .btn-primary:hover {
            background-color: #2980b9; /* Azul */
            border-color: #2980b9;
        }
        .btn-warning {
            background-color: #f39c12; /* Amarillo */
            border-color: #f39c12;
            color: #fff; /* Texto blanco */
        }
        .btn-warning:hover {
            background-color: #e67e22; /* Naranja */
            border-color: #e67e22;
        }
        .btn-success {
            background-color: #2ecc71; /* Verde claro */
            border-color: #2ecc71;
            color: #fff; /* Texto blanco */
        }
        .btn-success:hover {
            background-color: #27ae60; /* Verde */
            border-color: #27ae60;
        }
        .btn-danger {
            background-color: #e74c3c; /* Rojo */
            border-color: #e74c3c;
            color: #fff; /* Texto blanco */
        }
        .btn-danger:hover {
            background-color: #c0392b; /* Rojo oscuro */
            border-color: #c0392b;
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        .header img {
            max-width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="" alt="Logo"> <!-- Ruta a tu imagen -->
        <h1>LISTA DE CONDUCTORES</h1>
    </div>

    <div class="container">
        <a href="<?php echo base_url(); ?>index.php/gerenteprop/logout">
            <button type="button" class="btn btn-primary">Cerrar sesión</button>
        </a>

        <h2>Bienvenido <?php echo $this->session->userdata('login'); ?></h2>

        <p><?php echo date('Y/m/d H:i:s'); ?></p>

        <a href="<?php echo base_url(); ?>index.php/conductor/deshabilitados">
            <button type="button" class="btn btn-warning">CONDUCTOR NO FUNCIONALES</button>
        </a>

        <a href="<?php echo base_url(); ?>index.php/conductor/agregar">
            <button type="button" class="btn btn-primary">AGREGAR USUARIO</button>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Licencia</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th>Antecedentes</th>
                    <th>Cuenta Email</th>
                    <th>Contraseña</th>
                    <th>Creado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                    <th>Deshabilitar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contador = 1;
                foreach ($alumnos->result() as $row) {
                ?>
                <tr>
                    <td><?php echo $contador; ?></td>
                    <td>
                        <?php 
                         $foto=$row->foto;
                         if($foto=="")
                         {
                            ?>
                 <img src="<?php echo base_url(); ?>/uploads/conductor/perfil.jpg" width="50">  
                            <?php
                         }
                         else
                         {
                           
                            ?>
                 <img src="<?php echo base_url(); ?>/uploads/conductor/<?php echo $foto; ?>" width="50">  
                            <?php
                         }
                        ?>
                    </td>
                    <td><?php echo $row->nombre; ?></td>
                    <td><?php echo $row->primerApellido; ?></td>
                    <td><?php echo $row->segundoApellido; ?></td>
                    <td><?php echo $row->licencia; ?></td>
                    <td><?php echo $row->telefono; ?></td>
                    <td><?php echo $row->domicilio; ?></td>
                    <td><?php echo $row->antecedentes; ?></td>
                    <td><?php echo $row->cuenta; ?></td>
                    <td><?php echo $row->contrasenia; ?></td>
                    <td><?php echo formatearFecha($row->fecha_registro); ?></td>
                    <td>
                        <?php echo form_open_multipart("conductor/modificar"); ?>
                        <input type="hidden" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
                        <button type="submit" class="btn btn-success">Modificar</button>
                        <?php echo form_close(); ?>
                    </td>
                    <td>
                        <?php echo form_open_multipart("conductor/eliminarbd"); ?>
                        <input type="hidden" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <?php echo form_close(); ?>
                    </td>
                    <td>
                        <?php echo form_open_multipart("conductor/deshabilitarbd"); ?>
                        <input type="hidden" name="id_conductor" value="<?php echo $row->id_conductor; ?>">
                        <button type="submit" class="btn btn-warning">Deshabilitar</button>
                        <?php echo form_close(); ?>
                    </td>
                </tr>
                <?php
                $contador++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>


