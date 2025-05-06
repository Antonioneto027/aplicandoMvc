<?php 

namespace Controller;
use Support\DB\Database;
use PDO;
use PDOException;
use Support\Templates\Templates;


class TemplateController {

    private static function getDatabase(): Database {
        $dsn = 'mysql:host=localhost;dbname=aplicandomvc;charset=utf8';
        $username = 'root';
        $password = '';

    
        $pdo = new PDO($dsn, $username, $password);  
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return new Database($pdo);
    }


    public static function save() {
        
         $name = $_POST['name'] ?? '';

        if(!empty($name)) {
            $pdo = self::getDatabase();
            $pdo->saveData($name);
            return self::hello();
         }
        header('Location: /aplicandoMvc/hello');
        exit;
    }

    
    public static function index() {
        try {
  
            // Render the template using Twig
            $loader = new \Twig\Loader\FilesystemLoader('./Templates');
            $twig = new \Twig\Environment($loader);

            echo $twig->render('index.twig');

        } catch (PDOException $e) {
            echo 'Erro ao conectar: ' . $e->getMessage();
        }
    }

    public static function hello() {
   
        try {
            $database = self::getDatabase(); 
            $user = $database->queryData();
            //var_dump($user);
           // var_dump($database);
            // Render the template using Twig
            $loader = new \Twig\Loader\FilesystemLoader('./Templates');
            $twig = new \Twig\Environment($loader);
            $context = ['name' => $user[0]['name']];
            //var_dump($context);
 

            echo $twig->render('hello.twig', $context);

        } catch (PDOException $e) {
            echo 'Erro ao conectar: ' . $e->getMessage();
        }
    
    }
     
     

}
 










?>