<?php

// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$directorio = 'C:/wamp/www/FormularioPHP/assets/';
$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$contenido = isset($_POST['contenido']) ? (int) $_POST['contenido'] : 0;
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? Filtro($_POST['apellido']) : '';
$fechanacimiento = isset($_POST['fechanacimiento']) ? Filtro($_POST['fechanacimiento']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$region = isset($_POST['region']) ? $_POST['region'] : 0;
$areasdeinteres = isset($_POST['areasdeinteres']) ? Filtro($_POST['areasdeinteres']) : '';
$pagina = isset($_POST['pagina']) ? Filtro($_POST['pagina']) : '';
$correo = isset($_POST['correo']) ? Filtro($_POST['correo']) : '';
$color = isset($_POST['color']) ? Filtro($_POST['color']) : '';
$error = '';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elecciones Municipales 2016</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Home</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <h2 class="centrar">Elecciones Municipales 2016</h2>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Rellenar formulario</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">¡Información enviada con éxito!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-info fa-fw"></i>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="container">
      <span style="padding-top: 10px;"></span>
            <?php
            // Mostrar contenido
            if($enviado == 1 && $contenido == 1) {
              echo '<pre>';
              print_r($_POST);
              echo '</pre>';
              exit;
            }
            // Vista de éxito
            
            ?>
          <div class="panel-body">
            <p>Muchas gracias, <b><?php echo $nombre; ?> <?php echo $apellido; ?></b>,</p>
              <p>La siguiente información ha sido registrada:</p></ br>
            <p>Fecha de nacimiento: <b><?php echo $fechanacimiento; ?></b></p>
            <p>Sexo: <b>
              <?php echo ($sexo == 'm' ? 'Masculino' : 'Femenino'); ?></b>
            </p>
            <p>Región: <b><?php echo $region; ?></b>
            </p>
            <p>Áreas de interés: <b><?php
                if(isset($_POST['submit'])){//to run PHP script on submit
                    if(!empty($_POST['check_list'])){
                    // Loop to store and display values of individual checked checkbox.
                        foreach($_POST['check_list'] as $selected){
                        echo $selected;
                        }
                    }
                }
                ?></b></p>
            <p>Página personal: <b><?php echo $pagina?></b></p>
            <p>Correo electrónico: <b> <?php echo $correo; ?></b></p>
            <p>Color favorito: <b> <?php echo $color; ?></b></p>
                </div>

                            </div>
                            <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
