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

        <div class="col s12">
            <div class="dashboard-div">
                <!-- Titulo -->
                <div class="sec-titulo bottom_1em">Mantenimiento - AFP'S</div>
                <!-- Barra de acciones -->
				<ul class='bar-acciones-h'>
					<li><a href='edit.php' class='waves-effect waves-light btn  light-green darken-1 btn-normal'><i class='material-icons left'>add</i> Agregar</a></li>
					<li class=''><a href='reporte.php' class='waves-effect waves-light btn cyan darken-1 btn-normal'><i class='material-icons left'>print</i>Generar reporte</a></li>
				</ul>
				<!-- Barra de listado -->
                <div class="bar-opciones">
					<form method='post'>
					<div class='row row-margin'>
						<div class='col m6 s4'>
							<ul class="bar-botones bar-miniaturas">
								<li><a href="#" class="tooltipped" data-tooltip="Ver en lista"><i class="material-icons">view_list</i></a></li>
								<li><a class="activo tooltipped" data-tooltip="Ver con miniaturas" href="#"><i class="material-icons">view_module</i></a></li>
							</ul>
						</div>

						<div class='col l4 m6 s8 right'>
							<ul class="bar-botones">
								<input id='buscar' placeholder="Buscar por nombre" class="buscador-simple" type='text' name='buscar'/>
							</ul>
						</div>

					</div>
				</form>
                </div>

            <div class="box-productos">
                <ul class="collection">  
                    <!-- Registro -->
                    <li class='collection-item avatar'>
                    <!-- Icono/circulo representativo del registro -->
					<i class='material-icons circle color-cir'>face</i>
                        <div class='cont-list-empleados'>
                            <strong class='title'>Titulo de AFP: </strong> Ejemplo<br>
                            <strong class='title'>Porcentaje: </strong>" Ejemplo<br>
                            <span class='txt-italic'>Comentario</span><br>
                            <!-- Esta parte solo las opciones de eliminar/editar/lo que se quiera-->
                            <span class='secondary-content'> 
                                <a class='tooltipped' data-position='top' data-tooltip='Editar' href='edit.php'><i class='material-icons lista-icon r_editar'>edit </i></a>
                                <a class='tooltipped' data-position='top' data-tooltip='Eliminar' href='delete.php'><i class='material-icons lista-icon r_eliminar'>delete</i></a> 
                            </span>
                        </div>
                    </li> 
                    <!-- Fin del registro -->
                    <!-- Registro -->
                    <li class='collection-item avatar'>
                    <!-- Icono/circulo representativo del registro -->
					<i class='material-icons circle color-cir'>face</i>
                        <div class='cont-list-empleados'>
                            <strong class='title'>Titulo de AFP: </strong> Ejemplo<br>
                            <strong class='title'>Porcentaje: </strong>" Ejemplo<br>
                            <span class='txt-italic'>Comentario</span><br>
                            <!-- Esta parte solo las opciones de eliminar/editar/lo que se quiera-->
                            <span class='secondary-content'> 
                                <a class='tooltipped' data-position='top' data-tooltip='Editar' href='edit.php'><i class='material-icons lista-icon r_editar'>edit </i></a>
                                <a class='tooltipped' data-position='top' data-tooltip='Eliminar' href='delete.php'><i class='material-icons lista-icon r_eliminar'>delete</i></a> 
                            </span>
                        </div>
                    </li> 
                    <!-- Fin del registro -->
                    <!-- Descomentar para ver este estilo
					<div class='sec-subtitulo sec_inexistentes'>
						<span> No existen registros </span>
                    </div>
                    -->
                </ul>
            </div>

            </div>
        </div>
    </div>
</div>


<!-- Se incluye pie de pagina -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/footer.php') ?>

                  