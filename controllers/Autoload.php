<?php
class Autoload{
    public function __construct(){
        spl_autoload_register(function ($clasname){
            $models_path='./models/'.$clasname.'.php';
            $controller_path='./controllers/'.$clasname.'.php';

            if(file_exists($models_path)){
                require_once ($models_path);
            }
            if(file_exists($controller_path)){
                require_once ($controller_path);
            }



        });

    }
}
