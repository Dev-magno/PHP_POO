<?php
require 'GerenciadorCursos.php';

// Verifica se o índice do curso foi enviado via GET
if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    // Cria uma instância do GerenciadorCursos
    $gerenciadorCursos = new GerenciadorCursos();

    // Obtém os cursos atuais para verificar se o índice é válido
    $cursos = $gerenciadorCursos->getCursos();

    if (isset($cursos[$indice])) {
        // Cria um novo curso com dados fictícios (você deve obter os dados corretamente do formulário ou de outra fonte)
        $cursoEditado = new Curso("Novo Curso", "Nova Descrição", 40, "Novo Professor");

        // Edita o curso no índice fornecido
        $gerenciadorCursos->editarCurso($indice, $cursoEditado);

        // Redireciona para a página principal após editar o curso
        header('Location: index.php');
        exit;
    } else {
        die("Curso não encontrado.");
    }
} else {
    die("Índice do curso não especificado.");
}
?>
