<?php

// Routeur a developper ici ...
class Application {
    public static function run(){
        

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }


    if ($path==''){



        include __DIR__.'/../src/Controller/HomeController.php';
        $controller=new HomeController();
        $controller->index(); //Renvoyer la vue du formulaire de connexion
    }

    else if ($path=='/articles'){
        include __DIR__.'/../src/Controller/ArticlesController.php';
        $controller=new ArticlesController();
        $controller->index(); //Renvoyer la vue du formulaire de connexion
    }

        
    }
}