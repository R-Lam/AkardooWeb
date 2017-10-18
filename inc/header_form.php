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
  <div class="navbar-fixed">
      <nav class="nav_home">
      <div class="menu_content">
        <div class="nav-wrapper">
            <span data-activates="slide-out" class="button-collapse nav-menu-admin tooltipped" data-position="bottom" data-delay="375" data-tooltip="Navegación"><i class="material-icons">menu</i></span>
            <a href="/public/index.php" class="brand-logo center"><span class="logo_ark transition_s5"></span></a>
        </div>
     </nav>
    </div>
     
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
        <li class="opciones-nav"><a href="/public/articulos.php"><i class="material-icons">art_track</i>Blog</a></li>
        <li class="opciones-nav"><a href="/public/articulos.php"><i class="material-icons">new_releases</i>Tienda</a></li>
        <li class="opciones-nav"><a href="/public/forum/topics.php"><i class="material-icons">trending_up</i>Foro</a></li>
      <!-- -->
      <li><div class="divider"></div></li>
      <li><a class="subheader subheader-txt">Nosotros</a></li>
        <li class="opciones-nav"><a href="/public/nosotros.php"><i class="material-icons">description</i>¿Quiénes somos?</a></li>
        <li class="opciones-nav"><a href="/public/contacto.php"><i class="material-icons">mail</i>Contacto</a></li>
        <li class="opciones-nav"><a href="/public/faq.php"><i class="material-icons">question_answer</i>Soporte</a></li>
        <li class="opciones-nav"><a href="/public/terminos.php"><i class="material-icons">chrome_reader_mode</i>Términos de uso</a></li>
    </ul>

    <!-- Zona de logo y banner -->
    
    <div class="row">
      <div class="col s12 header_wrapper">

      </div>
    </div>

</header>
<body>