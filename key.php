<?php

$v = $_POST["key"];

$filename = 'example.txt';

// Abre o arquivo para escrita (cria o arquivo se não existir)
$file = fopen($filename, 'a'); // 'a' para modo append. Use 'w' para sobrescrever.

// Verifica se o arquivo foi aberto com sucesso
if ($file) {
    // Escreve o conteúdo no arquivo
    fwrite($file, $v);
    // Fecha o arquivo
    fclose($file);
    echo "Conteúdo escrito no arquivo com sucesso!";
} else {
    echo "Erro ao abrir o arquivo para escrita.";
}
?>


