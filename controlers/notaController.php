<?php

    class notaController{

        public function listar(){
            //modelo
            require_once 'models/nota.php';

            $nota = new nota();
            
            $notas = $nota->conseguirTodos('notas');

            require_once 'views/nota/listar.php';
        }

        public function crear(){
             //modelo
             require_once 'models/nota.php';

             $nota = new nota();
             $nota->setUsuario_id(1);
             $nota->setTitulo('titulo desde php');
             $nota->setDescripcion('descripc desde php');

             $guardar = $nota->guardar();

            

             header("Location: index.php?controller=notaController&action=listar");

        }

        public function borrar(){

        }




    }