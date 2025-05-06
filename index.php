<?php

 
require 'vendor/autoload.php';
require 'Routes/routes.php' ;
require 'Support/Templates.php';
require 'Support/Database.php';
require 'Controller/TemplateController.php';
 
$url = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

 
      
if (isset($routes[$url])) {
    call_user_func(callback: $routes[$url]);
     
} else {
    http_response_code(404);
    
    echo 'Página não encontrada';
    
}

 



 






















?>