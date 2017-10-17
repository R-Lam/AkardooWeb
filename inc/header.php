<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Akardoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="/img/favicon.png" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="/lib/materialize/materialize.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/extras.css">
    <link rel="stylesheet" href="/lib/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="/lib/alertify/css/themes/default.min.css">
    <script src="/js/jquery-2.1.1.min.js"></script> <!-- jquery necesario -->
    <script src="/lib/alertify/alertify.min.js"></script> <!-- Alertify, necesario al inicio -->
</head>

<header>

<div class="nav_full">
    <nav class="cont_p_logo">
        <div class="v-align">
          <a href="/public/index.php" class="brand-logo center"><span class="logo_ark transition_s5"></span></a>
          <a href="" class="links_header lk_ip"></a>
          <a href="" class="links_header right lk_td amber darken-1"></a>          
        </div>
    </nav>
    <!-- Submenu -->
    <nav class="nav_home">
      <div class="menu_content">
        <div class="nav-wrapper">
            <span data-activates="slide-out" class="button-collapse nav-menu-admin tooltipped" data-position="bottom" data-delay="375" data-tooltip="Navegación"><i class="material-icons">menu</i></span>
            <a class="dropdown-button show-m right menu-user-nav margin_a" href="/public/productos" data-activates="dropdown1"><img class="avatar-menu" src="/img/avatars/blog_face.png"><i class="material-icons menu-dps right margin_z">arrow_drop_down</i></a></li>
            <!-- Menu dinamico -->
            <ul id="nav-mobile" class=" hide-on-med-and-down right nav-txt-admin">
                <span style="float:left"><img class="avatar-menu" src="/img/avatars/blog_face.png"></span>
                <li><a href="/public/profile.php">MegaZeroxs</a></li>
                <li><a href="/public/index.php" class="tooltipped" data-position="bottom" data-tooltip="Inicio"><i class="material-icons">home</i></a></li>
                <li><a href="/public/messenger/message.php" class="tooltipped" data-position="bottom" data-tooltip="Soporte/Mensajes"><i class="material-icons">forum</i></a></li>
                <li><a href="" class="tooltipped" data-position="bottom" data-tooltip="Editar perfil"><i class="material-icons">settings</i></a></li>
                <li><a href="" class="tooltipped" data-position="bottom" data-tooltip="Salir"><i class="material-icons">exit_to_app</i></a></li>
            </ul>
        </div>
     </nav>
</div>

    <!-- Menú usuario -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="/public/orden/orden.php">Mi carrito</a></li>
      <li><a href="/public/usuario/compras.php">Historial de compras</a></li>
      <li><a href="/public/usuario/perfil.php">Editar perfil</a></li>
      <li><a href="/public/logout.php">Salir</a></li>
    </ul>
     
    <!-- Menú aplicaciones -->
    <ul id="slide-out" class="side-nav grey lighten-4 txt-nav-menu">
      <li>
        <div class="userView">
          <div class="row">
            <div class="col s12">
              <a href="/public/index.php" class="left"><span class="logo_ark logo_menu transition_s5"></span></a>
            </div>
          </div>
      </div>
      </li>
      <!-- -->
      <li><div class="divider"></div></li>
      <li><a class="subheader subheader-txt">Navegación</a></li>
        <li class="opciones-nav"><a href="/public/index.php"><i class="material-icons">art_track</i>Blog</a></li>
        <li class="opciones-nav"><a href="/public/forum/topics.php"><i class="material-icons">forum</i>Foro</a></li>
        <li class="opciones-nav"><a href="/public/shop.php"><i class="material-icons">store</i>Tienda</a></li>
      <!-- -->
      <li><div class="divider"></div></li>
      <li><a class="subheader subheader-txt">Nosotros</a></li>
        <li class="opciones-nav"><a href="/public/nosotros.php"><i class="material-icons">description</i>¿Quiénes somos?</a></li>
        <li class="opciones-nav"><a href="/public/contacto.php"><i class="material-icons">mail</i>Contacto</a></li>
        <li class="opciones-nav"><a href="/public/faq.php"><i class="material-icons">question_answer</i>Soporte</a></li>
        <li class="opciones-nav"><a href="/public/terminos.php"><i class="material-icons">chrome_reader_mode</i>Términos de uso</a></li>
    </ul>

    <!-- Zona de banner
    
    <div class="row">
      <div class="col s12 header_wrapper">

      </div>
    </div>

    -->

</header>
<body>