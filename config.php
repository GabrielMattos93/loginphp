<?php

$host = "localhost"; 
$dbname= "login"; 
$senha=""; 
$usuario="root"; 

try{
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $usuario, $senha);  
    //echo"Conexão com banco de dados realizada com sucesso!"; 
}catch(PDOException $erro){
    //echo"Conexão com banco de dados não realizada com sucesso. Erro gerado:" . $erro->getMessage();  
}