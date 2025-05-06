<?php

namespace Support\Templates;
 

 
class Templates {

    private $twig;

    public function __construct() {
        $loader = new \Twig\Loader\FilesystemLoader('./Templates');
        $this->twig = new \Twig\Environment($loader);
    }
   
    public function index($template, $database) {
        echo $this->twig->render($template, $database);
    }

    public function hello($template, $database) {
        echo $this->twig->render($template, $database);
    }

}
















// Removed redundant closing PHP tag
?>