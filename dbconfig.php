<?php

try{
$pdo = new PDO('mysql:host=localhost;port=8082;dbname=SEM4', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION);

echo "connect Done";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>