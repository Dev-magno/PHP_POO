<?php
require 'GerenciadorCursos.php';

// Verifica se o índice do curso foi enviado via GET
if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    // Cria uma instância do GerenciadorCursos
    $gerenciadorCursos = new GerenciadorCursos();

    // Deleta o curso no índice fornecido
    $gerenciadorCursos->deletarCurso($indice);

    // Redireciona para a página principal após deletar o curso
    header('Location: index.php');
    exit;
} 
?>
