<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hel<strong>lo</strong></h1>


    
<?php
abstract class Acceuil {
        protected $conn;  
        protected $table;     

        public  function __construct() {  
        include __DIR__.'/../../src/database.php';
        $this->conn = database::getPdo();
        
    }


    
        public function findAll() {

        $sql = "SELECT * from $this->table";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
    
        public function findOne($id) {
    
        $sql = "SELECT * FROM $this->table WHERE idAnnonces=$id";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
    
        public function deleteOne($id) {
    
        $sql = "DELETE FROM $this->table WHERE idAnnonces=$id";
        $resultat = $this->conn->query($sql);
    
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
}
?>
</body>
</html>