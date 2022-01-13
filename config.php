<?php

$host = "localhost"; 
$dbname= "loginphp"; 
$senha=""; 
$usuario="root"; 

try{
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $usuario, $senha);  
    //echo"Conexão com banco de dados realizada com sucesso!"; 
}catch(PDOException $erro){
    echo"A conexão com banco de dados não foi realizada.";   //$erro->getMessage();  
}