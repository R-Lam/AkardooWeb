<!DOCTYPE html>
<?php 
// Se valida si esta logueado
include($_SERVER['DOCUMENT_ROOT'] . '/lib/page.php');
Page::header("Bienvenid@");
// Se validan los permisos
if($_SESSION['p_comentarios'] == 3){
	// Se permite su estadia
}
else{
	// Se redirecciona
	Page::no_permisos();
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Moderar comentarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/lib/materialize/materialize.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/lib/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="/lib/alertify/css/themes/default.min.css">
    <script src="/lib/alertify/alertify.min.js"></script> <!-- Alertify, necesario al inicio -->
</head>

<?php
//Se incluye la base y la clase para las validaciones
if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    //Se obtiene el id
}
else
{
    print ("<script>window.location='index.php'</script>;");
    //devuelve al inicio si no hay
}

if(!empty($_POST))
{
	$id = $_POST['id'];
	try 
	{
		$sql = "DELETE FROM comentarios WHERE id_comentario = ?";
	    $params = array($id);
	    Database::executeRow($sql, $params);
        print ("<script>window.location='/public/secciones/comentarios/exito.php'</script>;");
        //Se hace el delete y se redirecciona a la pagina de inicio
	} 
	catch (Exception $error) 
	{
		print("error");
        print ("
            <script>alertify.alert('¡Error al eliminar!', 'No se ha podido eliminar, confirme que el registro no esta siendo utilizado', function(){ alertify.error('No se elimino el registro'); });</script>
        ");		
    }
}
?>

<div class="principal">
    <div class="row">
        <div class="col s12">
            <div class="dashboard-div">
                
                <?php
                    try 
                    {
                        $id = $_GET['id'];
                        $sql = "SELECT COUNT(id_comentario) AS comentario FROM comentarios WHERE id_comentario = ?";
                        $params = array($id);
                        $data = Database::getRow($sql, $params);
                        $usuario = $data['comentario'];                 
                        if($usuario != 0){
                            print("
                                <div class='sec-subtitulo sec_eliminar bottom_1em'>
                                    <span>¿Está seguro de eliminar este comentario?</span>
                                </div>
                                <!-- Contenedor -->
                                <div class='box-productos'>
                                    <form method='post'>
                                        <div class='row center-align'>
                                            <input type='hidden' name='id' value=" . $id . "'/>
                                            <button type='submit' class='btn waves-effect red capitalizar'><i class='material-icons left'>delete</i> Eliminar</button>
                                            <!-- Aqui estan los botones para eliminar -->
                                        </div>
                                    </form>
                                </div>
                            ");
                        }
                        else{
                            print("
                                <div class='sec-subtitulo sec_vista bottom_1em'>
                                    <span>¡Este registro ya fue eliminado, refresque la pagina!</span>
                                </div>
                            ");
                        }
                    } 
                    catch (Exception $error) 
                    {
                        print("error");
                        print ("
                            <script>alertify.alert('¡Error al eliminar!', 'No se ha podido eliminar, contacte con el administrador', function(){ alertify.error('No se elimino el registro'); });</script>
                        ");		
                    }
                ?>

                
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/admin/footer.php') ?>