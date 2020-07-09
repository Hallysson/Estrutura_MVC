<?php
    class galeriaController extends controllerGeral{

        public function index(){
            $dados = array(
                'qtd' => 129
            );

            $this->loadTemplate('galeria', $dados);
        }
        
    }
?>