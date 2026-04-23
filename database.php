<?php
// Mude de "localhost" para "mysql" (o nome do serviço no seu app.yaml)
$servername = "mysql"; 
$username = "root";
$password = "rootpassword"; 
$database = "yrprey";

// Tenta a conexão
$mysqli = mysqli_connect($servername, $username, $password, $database);

// Verifica se funcionou
if (!$mysqli) {
    // Em produção não mostramos o erro detalhado, mas para sua apresentação é essencial
    die("Falha na conexão: " . mysqli_connect_error());
}

// Sucesso! O driver mysqli (que instalamos no Dockerfile) agora pode falar com o host "mysql"
?>