<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Akardoo - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="/img/favicon.png" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="/lib/materialize/materialize.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/extras.css">
    <link rel="stylesheet" href="/lib/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="/lib/alertify/css/themes/default.min.css">
    <script src="/js/jquery-2.1.1.min.js"></script> <!-- jquery necesario -->
    <script src="/lib/alertify/alertify.min.js"></script> <!-- Alertify, necesario al inicio -->
</head>

<!-- Se incluye menu de navegacion --> 
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/menu.php') ?>

<div class="principal">
    <div class="row">
        <div class="col m8 s12">
            <div class="dashboard-div">
                <div class="sec-titulo">Mantenimiento de proyectos</div>
                <!-- Zona de administracion -->
                <div class="info-nav">
                    BARRA SEPARADORA
                </div>
                <div class="top-1em center">
                    <!-- Opción -->
                    <a class='btn-index waves-effect waves-light' href='/dashboard/plantilla_admin/'> 
                        <div class=''>
                            <i class='material-icons center'>assignment_ind</i><br> EJEMPLO  
                        </div>
                    </a>
                    <!-- Opción -->
                    <a class='btn-index waves-effect waves-light' href='/dashboard/plantilla_admin/'> 
                        <div class=''>
                            <i class='material-icons center'>assignment_ind</i><br> EJEMPLO NOMBRE LARGO 
                        </div>
                    </a>                
                </div>
                <!-- Zona de administracion, estar atento a top-1em que solo aplica en la segunda fila -->
                <div class="info-nav top-1em">
                    BARRA SEPARADORA
                </div>
                <div class="top-0em center">
                    <!-- Opción -->
                    <a class='btn-index waves-effect waves-light' href='/dashboard/plantilla_admin/'> 
                    <div class=''>
                            <i class='material-icons center'>assignment_ind</i><br> EJEMPLO  
                        </div>
                    </a>
                    <!-- Opción -->
                    <a class='btn-index waves-effect waves-light' href='/dashboard/plantilla_admin/'> 
                    <div class=''>
                            <i class='material-icons center'>assignment_ind</i><br> EJEMPLO NOMBRE LARGO 
                        </div>
                    </a>                
                </div>

            </div>
        </div>

        <div class="col m4 s12">
            <div class="dashboard-div">
                <div class="sec-titulo">Última actividad</div>

                <div class="collection">
                    <a href="#!" class="collection-item"><span class="badge">12/04/2017</span>"EJEMPLO PARA BITACORA"</a>
                    <a href="#!" class="collection-item"><span class="badge">12/04/2017</span>"EJEMPLO PARA BITACORA"</a>
                    <a href="#!" class="collection-item"><span class="badge">12/04/2017</span>"EJEMPLO PARA BITACORA"</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

 
<!-- Se incluye pie de pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/footer.php') ?>
