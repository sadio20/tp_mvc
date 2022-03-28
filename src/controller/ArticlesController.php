
<?php
class ArticlesController {
    public function index(){

        
        // test de la BD
        echo "test";
        include __DIR__.'/../../src/Entity/Article.php';
        $a=new Article();
        $a->findAll();
        
        include __DIR__.'/../../templates/Article.php';
    }
}