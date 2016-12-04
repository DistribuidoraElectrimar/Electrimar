<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title>Distribuidora Electrimar</title>
    <link rel="icon" type="image/png" href="img/icono.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <script type="text/javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" src="js/funciones.js"></script>  
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
    </script>
    <script type="text/javascript" src="js/dist/jquery.validate.js"></script>
    
</head>

    <body>

<div class="container">
    <img class="logo" src="img/logo.png" alt="Distribuidora Electrimar"/>
    <?php if (isset($_SESSION['email'])) { ?>
               
        <?php if ($_SESSION['rol']=='admin') {?>
            <nav>
                <ul class="navegador"> 
                    
                    <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span></a>
            
            <?php }else { ?>

               <nav>
                    <ul class="navegador"> 
                        <li><a href="verproductos.php">Productos</a></li>
                        <button class="boton-imprimir glyphicon glyphicon-print " id="btnocultar"  onclick="ocultar(); window.print(); recargar();"></button>
                        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out""></span></a>
                
    <?php }  }else { ?>

        <nav>
            <ul class="navegador"> 
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#acerca-de" class="scroll">Acerca de</a></li>
                <li><a href="#servicios" class="scroll">Servicios</a></li>
                <li><a href="#contacto" class="scroll">Contacto</a></li>
                <li><a href="formulariologin.php"><span class="glyphicon glyphicon-log-in"></span></a>
             
                <?php }?>
                </li>
            </ul>
        </nav>
</div>