<?php

$dsn = "mysql:dbname=projeto_registro;host=127.0.0.1";
$dbname = "root";
$dbpass = "";

try{
    $pdo = new PDO($dsn, $dbname, $dbpass);



    
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

?>