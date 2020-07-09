<?php
    class controllerGeral{

        public function loadView($viewName, $viewDados = array()){
            extract($viewDados); // converte um array com estrutura 'chave' e 'valor para variáveis cujos nomes correspondem às chaves e associa os valores respectivamente.
            require 'views/'.$viewName.'.php';
        }

        public function loadTemplate($viewName, $viewDados = array()){
            require 'views/template.php';
        }

        public function loadViewInTemplate($viewName, $viewDados = array()){
            extract($viewDados);
            require 'views/'.$viewName.'.php';
        }

    }
?>