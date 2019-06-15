<h1>Hola Mundo MVC</h1>

<?php
    require_once 'autoload.php';


    
    if(isset($_GET['controller']) && class_exists( $_GET['controller'] )){
        $nombre_controlador = $_GET['controller'];
        $controlador = new $nombre_controlador();

        if(isset($_GET['action']) && method_exists( $controlador, $_GET['action'] )){
            $accion=$_GET['action'];
            $controlador->$accion();

        }else {
            echo "la pag no existe 1 ";
        }
    }else {
        echo "la pag no existe 2 ";
    }
?>