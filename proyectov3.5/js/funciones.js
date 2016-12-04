$(document).ready(inicio);

function inicio(){

	get_categoria();
    get_cuenta();
    get_producto();
    get_estanteria();
    $(".btncuenta").click(confirmarcuenta);
	$(".btncategoria").click(confirmarcategoria);
    $(".btnproducto").click(confirproducto);
    $(".btnestanteria").click(confirestanteria);
}

function confirmarcategoria(){

    if ($("#nombre").val()!=''){
        
	var parametros = {
                "nombre" : $("#nombre").val(),
                "descripcion" : $("#descripcion").val()
        };
        
    $.ajax({
                data:  parametros,
                url:   'php/registrocategoria.php',
                type:  'post',
                beforeSend: function () {
                        $("#datoscategoria").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                      get_categoria();
                }
        });	
        
    }else {
        alert("El nombre esta vacio");
    }
}

function get_categoria(){
	$("#datoscategoria").load("consultacategoria.php");

}

//-----------------------------------------------------------------------------------------------

function confirmarcuenta(){
     
   if ($("#nombre").val()!=''){
        if ($("#apellido").val()!='' ) {
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if ( expr.test($("#email").val()) ) {
                
    var parametros = {

                "nombre" : $("#nombre").val(),
                "apellido" : $("#apellido").val(),
                "email" : $("#email").val(),
                "contrasena" : $("#contrasena").val(),
                "contrasenaver" : $("#contrasenaver").val(),
                "fec_nac" : $("#fec_nac").val(),
                "direccion" : $("#direccion").val(), 
                "telefono" : $("#telefono").val(),
                "rol" : $("#rol").val()      
        };
        
     $.ajax({
                data:  parametros,
                url:   'php/registro.php',
                type:  'post',
                beforeSend: function () {
                        $("#datoscuenta").html("Procesando, espere por favor...");
                        
                },
                success:  function (response) {
                      get_cuenta();
                }
        }); 
        }else{
            alert("El formato del email no es valido");
        }
    } else{
        alert("El Apellido esta vacio")
    }
}else{
    alert("El Nombre esta vacio");
}
}
function get_cuenta(){
    $("#datoscuenta").load("consultacuenta.php");
}

//--------------------------------------------------------------------------------------------------

function confirproducto(){

    if ($("#nombre").val()!=''){
        if ($("#referencia").val()!=''){
           if ($("#valor").val()!=''){
                if ($("#existencia").val()!=''){
                    if ($("#stock").val()!=''){

    var parametros = {

                "nombre" : $("#nombre").val(),
                "descripcion" : $("#descripcion").val(),
                "referencia" : $("#referencia").val(),
                "peso" : $("#peso").val(),
                "unidad" : $("#unidad").val(),
                "alto" : $("#alto").val(),
                "ancho" : $("#ancho").val(), 
                "valor" : $("#valor").val(),
                "existencia" : $("#existencia").val(),
                "stock" : $("#stock").val(),
                "id_categoria" : $("#id_categoria").val(),
                "cod_estanteria" : $("#cod_estanteria").val(),
                 };
        
    $.ajax({
                data:  parametros,
                url:   'php/registroproducto.php',
                type:  'post',
                beforeSend: function () {
                        $("#datosproducto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                      get_producto();

                }
        }); 
                   }else
                   { alert("El Stock esta vacio"); }
                }else
                { alert("La Existencia esta vacia")}
            }else
            { alert("El Valor esta vacio")}
        }else
        { alert("La Referencia esta vacia")}
   }else
    { alert("El nombre esta vacio")}

}

function get_producto(){

    $("#datosproducto").load("consultaproducto.php");

}

//--------------------------------------------------------------------------------------------------

function confirestanteria(){

     if ($("#cod_estanteria").val()!=''){

    var parametros = {

                "cod_estanteria" : $("#cod_estanteria").val(),
                "descripcion" : $("#descripcion").val(),

        };
        
    $.ajax({
                data:  parametros,
                url:   'php/registroestanteria.php',
                type:  'post',
                beforeSend: function () {
                        $("#datosestanteria").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                      get_estanteria();
                }
        }); 
    }else
    { alert("El Codigo de la Estanteria esta vacio");}
}

function get_estanteria(){
    $("#datosestanteria").load("consultaestanteria.php");

}

//--------------------------------------------------------------------------------------------------

function ocultar(){
document.getElementById('ver').style.display = 'none';
}

function recargar(){
    location.reload();
}