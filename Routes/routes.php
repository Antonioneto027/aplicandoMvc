<?php 


namespace Routes;


use Controller\TemplateController;



$routes = [
    '/aplicandoMvc' => [ TemplateController::class, 'index'],
    '/aplicandoMvc/hello' =>[ TemplateController::class, 'hello'],
    '/aplicandoMvc/save' => [ TemplateController::class, 'save']  
]



?>
