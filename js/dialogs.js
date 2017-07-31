function agregar(){
    alertify.confirm('Confirmar', '¿Está seguro de guardar estos datos?', function(){ redireccionar() }
    , function(){ alertify.error('Se ha cancelado el guardado')});
}
 
function cancelar_registro(){
    alertify.confirm('Cancelar', '¿Está seguro de cancelar la operación?', function(){ redireccionar() }
    , function(){ Materialize.toast('Continue con el registro', 4000)});
}

function regresar_registro(){
    alertify.confirm('Volver', '¿Está seguro de regresar a la pantalla de inicio?', function(){ redireccionar() }
    , function(){ Materialize.toast('Continue con la lectura', 4000)});
} 

// Eliminar comentario 

function eliminar_comentario(id){
    alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
        return {
            main:function(content){
                this.setContent(content); 
            }
        };
    }); 
    alertify.minimalDialog('<iframe class="tamaño_completo" src="/public/secciones/comentarios/delete.php?id=' + id + '"></iframe>');
}

// Puntuar

function puntuar_prueba(id){
    alertify.minimalDialog || alertify.dialog('minimalDialog',function(){
        return {
            main:function(content){
                this.setContent(content); 
            }
        };
    }); 
    alertify.minimalDialog('<iframe class="tamaño_completo" src="/public/secciones/puntuaciones/agregar_puntuar.php?id=' + id + '"></iframe>');
}

// Mensaje de confirmación

function eliminar(){
    alertify.confirm('Confirmar', '¿Está seguro de eliminar este registro?', function(){ redireccionar() }
    , function(){ alertify.error('Ha cancelado la acción')});
}

function redireccionar(){
    window.location="index.php";
}

// 