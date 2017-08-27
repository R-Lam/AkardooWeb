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
                <div class="sec-titulo">
                    <li class="left nav_back_admin"><a href="index.php"><i class="material-icons">chevron_left</i></a></li>
                    <span>Mantenimiento - AFP's</span>
                </div>
                <div class="sec-subtitulo sec_eliminar bottom_1em">
                    <span>¿Está seguro de eliminar este registro?</span>
                </div>
                <!-- Contenedor -->
                <div class="box-productos">
					<form method='post'>
						<div class='row center-align'>
							<input type='hidden' name='id' value='<?php print($id); ?>'/>
							<button type='submit' class='btn waves-effect red capitalizar'><i class='material-icons left'>delete</i> Eliminar</button>
                            <a href="#" onclick="cancelar_registro()" class="waves-effect waves-light btn cyan darken-1 btn-normal"><i class="material-icons left">block</i>Cancelar</a>
							<!-- Aqui estan los botones para eliminar -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/footer.php') ?>

