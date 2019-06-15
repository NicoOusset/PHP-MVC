<?php

    class usuarioController{

        public function mostrarTodos(){
            require_once 'models/usuario.php';

            $usuario = new usuario();
           $todosUsuarios = $usuario->conseguirTodos('usuarios');
            require_once 'views/usuarios/mostrar-todos.php';
        }

        public function crear(){
            require_once 'views/usuarios/crear.php';
        }



    }
?>
