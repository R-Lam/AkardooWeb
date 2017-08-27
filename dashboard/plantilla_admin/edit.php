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

<form method='post' autocomplete = "off" enctype='multipart/form-data'>
<div class="principal">
    <div class="row">
        <div class="col s12">
            <div class="dashboard-div">
                <!-- Titulo -->
                <div class="sec-titulo">
                    <li class="left nav_back_admin"><a href="index.php"><i class="material-icons">chevron_left</i></a></li>
                    <span>Mantenimiento - AFP'S</span>
                </div>

                <div class='sec-subtitulo sec_editar bottom_1em'>
                    <span>Editando registro</span>
                </div>
                <!-- Descomentar para ver diseño
                <div class='sec-subtitulo sec_agregar bottom_1em'>
                    <span>Agregando registro</span>
                </div>
                -->
                <!-- Contenedor -->
                <div class="box-productos">
                    <!-- Campos de texto -->
                    <div class="row">
                        <div class="row">
                            <!-- Emjemplo de input -->
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix'>face</i>
                                <input id='nombres' type='text' name='afp' placeholder="Ejemplo: Confia" maxlength="40" value='' required/>
                                <label for='nombres'>AFP</label>
                            </div>

                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix'>monetization_on</i>
                                <input id='porcentaje' type='text' placeholder="Ejemplo: 6.25%" name='afp_porcentaje'  maxlength="40" value='' required/>
                                <label for='porcentaje'>Porcentaje (%)</label>
                            </div>
                            <!-- Ejemplo de textarea -->
                            <div class='input-field col s12 m6'>
                                <i class="material-icons prefix">description</i>
                                <textarea  placeholder="Descripción acerca de esta AFP" id="icon_prefix2"  maxlength="150" class="materialize-textarea" name = "comentario" ></textarea>
                                <label for="icon_prefix2">Comentario</label>
                            </div>
                            <!-- Ejemplo de combobox -->
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">face</i>
                                <select name='p_afp' required>
                                <option value="" disabled selected>Selecciona una opción</option>
                                <option value="0">Sin acceso</option>
                                <option value="1">Solo lectura</option>
                                <option value="2">Solo lectura</option>
                                <option value="3">Solo lectura</option>
                                <option value="4">Solo lectura</option>
                                </select>
                                <label>AFP</label>
                            </div>
                            <!-- Ejemplo de estados -->
                            <div class="input-field col s12 m6">
                                <i class='material-icons left small'>info</i>
                                <span>Estado del registro:</span>
                                    <input id='activo' type='radio' name='estado' class='with-gap' value='1'/>
                                    <label for='activo'><i class='material-icons left'>done</i></label>
                                    <input id='inactivo' type='radio' name='estado' class='with-gap' value='0'/>
                                    <label for='inactivo'><i class='material-icons left'>not_interested</i></label>
                                </div>
                            </div>
                            <!-- Ejemplo de imagenes -->
                            <div class='file-field input-field col s12 m6'>
                                <!-- Imagen despues -->
                                <div class="sec-titulo">
                                    <span>Finalización de proyecto</span>
                                </div>
                                <!-- Previsualización de imagen -->
                                <output id='pre_imagen_despues'><img class='responsive-img-adm materialboxed' src='/img/img_default.png' /></output>
                                <div class="center cont-100">
                                    <div class='waves-effect waves-light btn light-blue link-simulado darken-1 btn-normal top-1em no-float'>
                                        <span><i class='material-icons left'>image</i> Elegir imagen </span>
                                        <input type='file' name='imagen_despues' id="imagen_despues" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row s12">
                            <ul class="bar-acciones-f">
                                <li><button type="submit" class="waves-effect waves-light btn light-green darken-1 btn-normal"><i class="material-icons left">save</i>Guardar</a></li>
                                <li class=""><a href="#" onclick="" class="waves-effect waves-light btn cyan darken-1 btn-normal"><i class="material-icons left">block</i>Cancelar</a></li>                                
                            </ul>
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</form>  

<!-- Se incluye pie de pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/footer.php') ?>
