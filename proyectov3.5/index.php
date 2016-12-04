<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ("db/utilidades_sql.php");
include_once ("php/utilidades.inc");
?>

<?php
	include_once('php/header.inc');
?>
						
	<div class="banner" id="banner">
        <div class="container">
	        <div class="contenedor-banner">

	            <h2>Ahorre tiempo!!!</h2>
	            <p>Al hacer su compra por Internet no tiene que venir hasta acá por su producto se lo entregamos en la puerta de su casa</p>
	            <a href="#">Hacer pedido</a>
	        </div>
        </div>       
    </div>

    <div class="acerca-de" id="acerca-de">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Acerca de Distribuidora Electimar</h2>
                    <p>Somos una empresa con mas de 10 años de experiencia en la venta de productos ferre-eléctricos para hogares y/o empresas con certificación de calidad y garantía de nuestros productos.</p>
                    <p>PRODUCTOS AL DETAL Y AL POR MAYOR</p>                 
                </div>

                <div class="col-sm-6">
                    <img src="img/img1.jpg" alt="acerca de" width="100%">
                </div>

            </div>
        </div>
        
    </div>

    <div class="servicios" id="servicios">
        <div class="container">
            <div class="row style-servicios">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    <h2>Instalaciones</h2>
                    <p>Si no conoce como instalar su producto NO HAY PROBLEMA. Nosotros le hacemos la instalación de cualquier producto comprado en nuestra tienda. Cotiza aquí</p>
                    <a href="#contacto" class="scroll">Cotizar</a>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                    <h2>Venta de Productos</h2>
                    <p>Tenemos los productos para su casa y/o empresa.Contamos con la mas alta calidad en el mercado: Cables,Toma corrientes,Tuberías,Cajas. </p>
                    <a href="#contacto"  class="scroll">Hacer pedido</a>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    <h2>Asesoría</h2>
                    <p>Le asesoramos sobre como instalar nuestros productos,claves para la seguridad de su red eléctrica. solo contáctenos.</p>
                    <a href="#contacto" class="scroll">Contactar</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="contacto" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <h2>Contacto</h2>
                    <form>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" rows="8" placeholder="Mensaje"></textarea>
                    </div>                  
                    
                    <button type="submit" class="boton">Enviar</button>
                </form>
                </div>
                <div class="col-sm-6">
                   <img src="img/mapa.jpg" alt="">                    
                </div>
            </div>
        </div>
    </div>	

<?php 
	include_once('php/footer.inc')
?>