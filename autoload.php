<?php
    function autocargar($classname){
        include "controlers/" . $classname. '.php';
    }

    spl_autoload_register('autocargar');

?>