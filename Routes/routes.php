<?php 


namespace Routes;


use Controller\TemplateController;


/* 
$routes = [
    '/aplicandoMvc' => [(new TemplateController())->index()],
    '/answer' =>[(new TemplateController())->question()] // Verificar o que está causando o erro.
] */
 

$routes = [
    '/aplicandoMvc' => [ TemplateController::class, 'index'],
    '/aplicandoMvc/hello' =>[ TemplateController::class, 'hello'],
    '/aplicandoMvc/save' => [ TemplateController::class, 'save'] // Verificar o que está causando o erro.
]



?>