<?php
    class Core{

        public function run(){
            $url = '/';
            if(isset($_GET['url'])){
                $url .= $_GET['url'];
            }

            $parametros = array();

            if(!empty($url) && $url != '/'){
                $url = explode('/', $url);
                array_shift($url);

                $currentController = $url[0].'Controller';
                array_shift($url);

                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }

                if(count($url) > 0){
                    $parametros = $url;
                }

            }else{
                $currentController = 'homeController';
                $currentAction = 'index';
            }

            $controller = new $currentController;
            //$controller->$currentAction(); // Poderia ser usado mas não é possível passar parâmetros, por isso, foi utilizada a função abaixo:
            call_user_func_array(array($controller, $currentAction), $parametros);
            
        }

    }
?>