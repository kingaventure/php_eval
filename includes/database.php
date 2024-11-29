<?php
 
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_eval','root');
} catch (Exception $e) {
    $errors[] = "Erreur de connexion à la bdd {$e->getMessage()}";
}
?>