<!-- Se incluye el encabezado de la pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php') ?>

<!-- Titulo y contenido principal -->

<div class="principal">
    <div class="row">
       <div class="col s12 l9 m8">
            <div class="cont_left bg_white">
                <!-- Entrada de blog-->
                <div class="entrada-blog">
                    <div class="title_blog">
                        <div class="avatar-left tooltipped" data-position="top" data-delay="50" data-tooltip="MegaZeroxs">
                            <a href="#"><img class="s_avatar_img" src="/img/avatars/blog_face.png" /></a>
                        </div>
                        <!-- Flecha -->
                        <div class="arrow"><i class="material-icons">play_arrow</i></div>
                        <div class="title_right">
                            <span class="title_date right tooltipped" data-position="top" data-tooltip="23/08/2017"><i class="material-icons">date_range</i></span>
                            <span class="title_nick">Actualización de prueba en el 23 de agosto de 2017</span><br>
                        </div>
                    </div>
                    <!-- Entrada al blog en pantallas pequeñas -->
                    <div class="cont_blog">
                        <img src="https://akardoo.com/content/blog/heading.png" />
                    </div>
                    <hr class="hr_line" />
                    <div class="footer_blog">
                        <div class="social_cont right">
                            <div class="comment-i v-middle comment-i-l tooltipped" data-position="top" data-tooltip="Favoritos"><i class="material-icons v-middle">favorite_border</i> <span>0</span></div>
                            <div class="comment-i v-middle comment-i-c tooltipped" data-position="top" data-tooltip="Comentarios"><i class="material-icons v-middle">chat_bubble_outline</i> <span>0</span></div>
                        </div>
                        <div class="info_cont left">
                            <span class="v-middle">Públicado por: <a href="#">@MegaZeroxs</a></span>
                        </div>
                    </div>
                </div>
                <!-- Fin entrada de blog-->
                <hr class="hr_line" />
                <!-- Comentarios -->
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/public/blog/comments_blog.php') ?>
            </div>
       </div>
       <div class="col s12 l3 m4">
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
                        <a href="" class="special-right s_blue"><i class="material-icons v-middle">forum</i> Visitar el foro</a>
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
