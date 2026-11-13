<?php
$host = "127.0.0.1";
$dbname = "meubanco";
$user = "root";
$password = ""; // No XAMPP a password por defeito é vazia

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $conexao = new PDO($dsn, $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso usando PDO!";
} catch (PDOException $e) {
    echo "Erro na conexao: " . $e->getMessage();
}

$conexao = null;
?>