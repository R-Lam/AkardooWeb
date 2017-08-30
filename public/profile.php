<!-- Se incluye el encabezado de la pagina -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php') ?>

<!-- Titulo y contenido principal -->

<div class="principal">
    <div class="row">
       <div class="col s12 m8">
            <div class="cont_left bg_white_p">
                <div class="">
                    <!-- Cabezera de perfil-->
                    <div class="cont_profile">
                        <div class="wrapper_profile">
                            <div class="avatar_profile tooltipped" data-position="top" data-delay="50" data-tooltip="Online">
                                <a href="#"><img class="p_avatar_img" src="/img/avatars/blog_face.png" /></a> <span class="p_avatar_status">Administrador</span>
                            </div>
                            <!-- Flecha -->
                            <div class="arrow arrow_p"><i class="material-icons">play_arrow</i></div>
                            <div class="title_profile">
                                @MegaZeroxs
                            </div>
                            <div class="desc_profile">
                                Ehh, vegeta, ehh, vegeta, es el mejor youtuber ♫
                            </div>
                        </div>
                        <div class="footer_profile">
                            <span class="v-middle footer_p_div"><i class="material-icons v-middle">timer</i><strong>1000</strong> horas de juego</span>
                            <span class="v-middle footer_p_div"><i class="material-icons v-middle">whatshot</i><strong>45 </strong> Asesinatos</span>
                            <span class="v-middle"><i class="material-icons v-middle">cancel</i><strong>354 </strong> muertes</span>
                        </div>
                    </div>
                <hr class="hr_line" />
                <!-- MURO  -->
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/public/profile/wall.php') ?>
                </div>
                <!-- Fin bloque izquiero de perfil -->
            </div>
       </div>
       <div class="col s12 m4">
            <div class="cont-right bg_white">
                <!-- Bloque -->
                <div class="entry_right">
                    <div class="st_title"> 
                        <span class="st_text"><i class="v-middle material-icons">people</i> Medallas</span>
                    </div>
                    <div class="cont-r-block cont_friends">
                        <span class="medal tooltipped" data-position="top" data-delay="50" data-tooltip="Staff Oficial"><i class="v-middle material-icons">star</i></span>
                        <span class="medal tooltipped m_purple" data-position="top" data-delay="50" data-tooltip="VIP"><i class="v-middle material-icons">local_bar</i></span>
                        <span class="medal tooltipped m_cyan" data-position="top" data-delay="50" data-tooltip="Moderador"><i class="v-middle material-icons">security</i></span>
                        <span class="medal tooltipped m_green" data-position="top" data-delay="50" data-tooltip="+50 horas de juego"><i class="v-middle material-icons">games</i></span>
                        <span class="medal tooltipped m_platinum" data-position="top" data-delay="50" data-tooltip="+100 horas de juego"><i class="v-middle material-icons">games</i></span>
                    </div>
                    <hr class="hr_line" />
                </div>
                <!-- Fin del bloque -->
                <!-- Bloque -->
                <div class="entry_right">
                    <div class="st_title"> 
                        <span class="st_text"><i class="v-middle material-icons">people</i> Amigos</span>
                    </div>
                    <div class="cont-r-block cont_friends">
                        <?php
                        $prueba = 21;
                        while($prueba > 0){
                            print("
                                <a href='!#' class='tooltipped' data-position='top' data-delay='50' data-tooltip='TEST01'><img src='/img/avatars/default.png' /></a>
                            ");
                            $prueba--;
                        }
                        ?>
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
