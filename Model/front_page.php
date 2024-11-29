<?php 
    function display(PDO $pdo) : array {
        
            $query = 'SELECT * FROM article';
            $res = $pdo->prepare($query);
            $res->execute();
            return $res->fetchAll();

    }

?>