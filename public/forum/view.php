<!-- Se incluye el encabezado de la pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php') ?>

<!-- Titulo y contenido principal -->

<div class="principal">
    <div class="row">
       <div class="col s12 m12 l9">
            <div class="cont_left bg_white">
                <!-- Se incluye el submenu para mostrar en donde se enuentra  -->
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/public/forum/submenu.php') ?>
                <!-- Entrada de foro (Tema central) -->
                <div class="entrada-blog">
                    <!-- TAGS -->
                    <div class="cont_forum_tags">
                        <!-- TAG con icono --><div class="chip schip"><span class=""><i class="material-icons">new_releases</i><a class="white-text" href="">Avisos</a></span></div>
                        <!-- TAG generico --><div class="chip schip"><span class=""><a class="white-text" href="topic1.php">TEMA 1</a></span></div>
                        <!-- TAG generico --><div class="chip schip"><span class=""><a class="white-text" href="topic1.php">AVISO IMPORTANTE</a></span></div>
                        <!-- TAG generico --><div class="chip schip"><span class=""><a class="white-text" href="topic1.php">PROBANDO TODO</a></span></div>
                        <!-- TAG generico --><div class="chip schip"><span class=""><a class="white-text" href="topic1.php">123</a></span></div>
                    </div>
                    <!-- HEADER DE FORO -->
                    <div class="title_forum">
                        <div class="avatar_forum_left tooltipped" data-position="top" data-delay="20" data-tooltip="MegaZeroxs">
                            <a href="#"><img class="s_avatar_img" src="/img/avatars/blog_face.png" /></a>
                        </div>
                        <div class="title_right">
                            <span class="title_date right tooltipped" data-position="top" data-tooltip="23/08/2017"><div class="chip schip chp2 white-text">¡Entérate!</div></span>
                            <span class="title_nick">¡Akardoo necesita de ti!</span><br>
                        </div>
                        <div class="title_forum_footer"><span class="">Iniciado por: </span><strong>@Admin_ShidoriS2</strong><span>, el 13/10/27 en FORO I</span></div>
                    </div>
                    <!-- CONTENIDO DE FORO -->
                    <div class="cont_forum_admin">
                        <!-- Usuario -->
                        <div class="cont-topic-l">
                            <a href="" class="forum_nick"><span>@Admin_ShidoriS2</span></a>
                            <div class="right">
                            <div class="avatar_profile border_special tooltipped" data-position="top" data-delay="50" data-tooltip="Online">
                                <a href="#" class="left avattar_for_cont"><img class="p_avatar_img avatar_for" src="/img/avatars/blog_face.png" /></a> <span class="p_avatar_left">Administrador</span>
                            </div>
                            <!-- Flecha -->
                            <div class="arrow avatar_for_c"><i class="material-icons">play_arrow</i></div>
                            <!-- Estadisticas -->
                            <div class="cont-topic-l-stats">
                                <div class="comment-i v-middle comment-i-l tooltipped stats_loves" data-position="top" data-tooltip="Puntos recibidos"><i class="material-icons v-middle">favorite_border</i> + <span>1000</span></div>
                                <div class="comment-i v-middle comment-i-c-activo tooltipped stats_loves" data-position="top" data-tooltip="Publicaciones"><i class="material-icons v-middle">chat_bubble_outline</i> + <span>637</span></div>
                            </div>
                        </div>
                        </div>
                        <!-- Contenido -->
                        <div class="cont-topic-r">
                            <img src="https://akardoo.com/content/blog/heading.png" />
                            Hola akardeanos, me complace anunciarles los cambios mas recientes dentro del servidor survival:<br>
                            Los VIP podrán acceder a kits exclusivos cada semana, dependiendo del rango mejor serán los objetos obtenidos mediante el kit.
                            Para fomentar el uso de las elitras, cada kit exclusivo de VIP cuentan con cohetes que incrementan su poder según el rango del VIP, ademas de cuero para reparar tu elitra.
                            Cuando un usuario es asesinado tiene una probabilidad de 20% de soltar su cabeza, mas sin embargo, si matas a un VIP, dicha probabilidad disminuirá progresivamente hasta un 5% con el VIP Diamond.
                            Ya hace un día que el survival cuenta con Jobs! Asi incrementaras las posibilidades de ser el mas rico del servidor.
                            Con el mas reciente cambio en los Jobs, ahora los VIP podrán acceder a 2 trabajos a la vez e inclusive podrán llevarlos mas allá... Podran subir dichos trabajos hasta el nivel 12.
                            De momento estos han sido los cambios mas recientes realizados, los estaremos informando en futuras mejoras y novedades :)
                        <!-- Fin contenido del tema -->
                        <!-- Firma del usuario/ Footer -->
                        <hr class="hr_line" />
                        <div class="footer_blog">
                            <div class="social_cont right">
                                <div class="comment-i v-middle comment-i-l tooltipped" data-position="top" data-tooltip="Favoritos"><i class="material-icons v-middle">favorite_border</i> <span>0</span></div>
                                <div class="comment-i v-middle comment-i-c tooltipped" data-position="top" data-tooltip="Citar"><i class="material-icons v-middle">reply</i></div>
                            </div>
                            <div class="info_cont left">
                                <span class="v-middle"><a href="#">@MegaZeroxs</a> - <a href="#" class="red-text">Administrador</a></span>
                            </div>
                        </div>
                        <!-- Fin contenedor del foro -->
                        </div>
                    </div>
                </div>
                <hr class="hr_line" />
                <!-- Fin entrada de foro-->
                <!-- Entrada de foro (Respuesta) -->
                <div class="entrada-blog">
                    <!-- CONTENIDO DE FORO -->
                    <div class="cont_forum_admin cont_forum_reply">
                        <!-- Usuario -->
                        <div class="cont-topic-l">
                            <a href="" class="forum_nick example_forum_nick_color"><span>@Usuario_Promedio</span></a>
                            <div class="right">
                            <div class="avatar_profile border_special tooltipped" data-position="top" data-delay="50" data-tooltip="Online">
                                <a href="#" class="left avattar_for_cont"><img class="p_avatar_img avatar_for" src="/img/avatars/blog_face.png" /></a> <span class="p_avatar_left">Minecraftero</span>
                            </div>
                            <!-- Flecha -->
                            <div class="arrow avatar_for_c"><i class="material-icons">play_arrow</i></div>
                            <!-- Estadisticas -->
                            <div class="cont-topic-l-stats">
                                <div class="comment-i v-middle comment-i-l tooltipped stats_loves" data-position="top" data-tooltip="Puntos recibidos"><i class="material-icons v-middle">favorite_border</i> + <span>8</span></div>
                                <div class="comment-i v-middle comment-i-c-activo tooltipped stats_loves" data-position="top" data-tooltip="Publicaciones"><i class="material-icons v-middle">chat_bubble_outline</i> + <span>21</span></div>
                            </div>
                        </div>
                        </div>
                        <!-- Contenido -->
                        <div class="cont-topic-r">
                        <div class="title_forum_r_header"><span class="">Publicado el 13/10/27</span></div>
                        ¿Sera posible implementar los BBCodes? (?
                        <!-- Fin contenido del tema -->
                        <!-- Firma del usuario/ Footer -->
                        <hr class="hr_line" />
                        <div class="footer_blog">
                            <div class="social_cont right">
                                <div class="comment-i v-middle comment-i-l tooltipped" data-position="top" data-tooltip="Favoritos"><i class="material-icons v-middle">favorite_border</i> <span>0</span></div>
                                <div class="comment-i v-middle comment-i-c tooltipped" data-position="top" data-tooltip="Citar"><i class="material-icons v-middle">reply</i></div>
                            </div>
                            <div class="info_cont left">
                                <span class="v-middle"><a href="#">@Usuario_Promedio</a> - <a href="#" class="example_forum_nick_color">Minecraftero</a></span>
                            </div>
                        </div>
                        <!-- Fin contenedor del foro -->
                        </div>
                    </div>
                </div>
                <hr class="hr_line" />
                <!-- Fin entrada de foro (Respuesta) -->
                <!-- Paginacion -->
                <ul class="pagination forum_pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active  light-blue darken-1"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
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
