<!-- Se incluye el encabezado de la pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php') ?>

<!-- Titulo y contenido principal -->
<div class="principal">
    <div class="row">
       <div class="col s12 m12 l9">
            <div class="cont_left bg_white">
                <div class="st_title"> 
                    <span class="st_text">Mis conversaciones </span>
                </div>
                <div class="">
                    <div class="search_messenger">
                        <input type="text" class="" placeholder="Buscar al usuario"/>
                        <span><i class="material-icons">search</i></span>
                    </div>
                    <ul class="messages_list collection">
                        <!-- Conversacion -->
                        <li class="collection-item avatar" onclick="window.location = 'message.php'">
                            <span class="avatar_messenger_list transi"><img src="/img/avatars/blog_face.png"></span>
                            <div class="messages_list_cont">
                               <strong class="">@Admin_ShidoriS2</strong>
                               <span class="">Tú: mensaje PTO normalito en el cual normalmente pasan caritas :D D: xdxdxd</span>
                            </div>
                            <span href="#!" class="secondary-content a_msc">Hoy a las 14:10</span>
                            <span href="#!" class="secondary-content a_msi tooltipped link-simulado" data-position="top" data-tooltip="Hoy a las 14:10"><i class="material-icons v-middle">date_range</i></span>
                        </li>
                        <!-- Fin conversacion -->
                        <!-- Conversacion -->
                        <li class="collection-item avatar" onclick="window.location = 'message.php'">
                            <span class="avatar_messenger_list transi"><img src="/img/avatars/blog_face.png"></span>
                            <div class="messages_list_cont">
                               <strong class="">@Admin_ShidoriS2</strong>
                               <span class="">Tú: mensaje PTO normalito</span>
                            </div>
                            <span href="#!" class="secondary-content a_msc">Ayer a las 15:39</span>
                            <span href="#!" class="secondary-content a_msi tooltipped link-simulado" data-position="top" data-tooltip="Ayer a las 15:39"><i class="material-icons v-middle">date_range</i></span>
                        </li>
                        <!-- Fin conversacion -->
                        <!-- Conversacion -->
                        <li class="collection-item avatar" onclick="window.location = 'message.php'">
                            <span class="avatar_messenger_list transi"><img src="/img/avatars/blog_face.png"></span>
                            <div class="messages_list_cont">
                               <strong class="">@Admin_ShidoriS2</strong>
                               <span class="">Tú: mensaje PTO normalito en el cual normalmente pasan caritas :D D: xdxdxd</span>
                            </div>
                            <span href="#!" class="secondary-content a_msc">17/9/2017</span>
                            <span href="#!" class="secondary-content a_msi tooltipped link-simulado" data-position="top" data-tooltip="17/9/2017"><i class="material-icons v-middle">date_range</i></span>
                        </li>
                        <!-- Fin conversacion -->
                        <!-- Conversacion -->
                        <li class="collection-item avatar" onclick="window.location = 'message.php'">
                            <span class="avatar_messenger_list transi"><img src="/img/avatars/blog_face.png"></span>
                            <div class="messages_list_cont">
                               <strong strong="">@Admin_ShidoriS2</strong>
                               <span class="">Tú: Vamos a probar que tan largo puede ser el mensaje para que se pueda ver de manera correcta en esta wea</span>
                            </div>
                            <span href="#!" class="secondary-content a_msc">15/09/2016</span>
                            <span href="#!" class="secondary-content a_msi tooltipped link-simulado" data-position="top" data-tooltip="15/09/2016"><i class="material-icons v-middle">date_range</i></span>
                        </li>
                        <!-- Fin conversacion -->
                        <!-- Cargar más -->
                        <a href="#!"><div class="load_more transi">Cargar más... <i class="material-icons v-middle">expand_more</i></div></a>
                    </ul>
                </div>
            </div>
       </div>
       <div class="col s12 l3 m12">
            <div class="cont-right bg_white">
                <!-- Bloque -->
                <div class="entry_right">
                    <div class="st_title"> 
                        <span class="st_text">¡Apoyanos! </span>
                    </div>
                    <hr class="hr_line" />
                    <div class="cont-r-block">
                        <a href="" class="special-right"><i class="material-icons v-middle">shopping_basket</i> Ir a la tienda</a>
                        <p>Donando ayudarás a la continuidad de la comunidad, además, recibirás grandes beneficios, ¿A qué esperas?</p>
                    </div>
                    <hr class="hr_line" />
                </div>
                <!-- Fin del bloque -->
                <!-- Bloque -->
                <div class="entry_right">
                    <div class="st_title"> 
                        <span class="st_text">¿Necesitas ayuda? </span>
                    </div>
                    <hr class="hr_line" />
                    <div class="cont-r-block">
                        <a href="topics.php" class="special-right s_blue"><i class="material-icons v-middle">forum</i> Visitar el foro</a>
                        <a href="" class="special-right s_orange"><i class="material-icons v-middle">live_help</i> Ayuda y soporte</a>
                    </div>
                    <hr class="hr_line" />
                </div>
                <!-- Fin del bloque -->
            </div>
       </div>
    </div>
</div>

<!-- Se incluye el footer de la pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php') ?>