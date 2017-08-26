<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/header_form.php') ?>

<form method='post' autocomplete = "off" enctype='multipart/form-data'>
<div class="principal">
    <div class="row">
        <div class="col l4 m6 s12 offset-l4 offset-m3">
            <div class="cont-login">
                <div class="st-subtitle pad-bottom"> Iniciar sesión </div>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix alias" type="text" class="validate" value='' name = "usuario" placeholder="Usuario">
                    <label for="icon_prefix"></label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix" type="password" class="validate" name = "clave" placeholder="Contraseña">
                    </div>
                    <button class="waves-effect waves-light btn btn-complete top-1em no-float btn-forms" type="submit" name="action">Ingresar</button>
                    <label for="icon_prefix"></label>
                </div>
                
                <div class="mrg-btn cont-login">
                    <a href="restaurar.php" class="">¿Has olvidado tu contraseña?</a>
                </div>
                
            </div>

        </div>
    </div>
</div>
</form>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer_form.php') ?>