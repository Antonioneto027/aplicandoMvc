<?php 

namespace Support\DB;
use PDO;
use PDOException;


class Database {

    private $db;


    public function __construct(PDO $db) {  

        $this->db = $db;
    }

    public function queryData() {
        try {
            
            $stmt = $this->db->query('SELECT * FROM user ORDER BY ID DESC LIMIT 1
');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
             echo 'Erro: '.$e->getMessage();
        }
    }


    public function saveData($name) {
        try {
            $stmt = $this->db->prepare("INSERT INTO user (name) VALUES (:name)");
            $stmt->bindParam(':name', $name);
            return  $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao conectar: ". $e->getMessage());
        }
    }

}

/*class Database {

private $db;

public function __construct($user, $pass) {
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=aplicandomvc', $user, $pass);
    } catch (PDOException $e) {
         echo 'Erro: '.$e->getMessage();
    }

}

public function queryData() {
    // use a conexão aqui
    $sth = $this->db->query('SELECT * FROM user');

    // e agora terminamos; feche-a
    $sth = null;
    $this->db = null;
}

} */


 



?>