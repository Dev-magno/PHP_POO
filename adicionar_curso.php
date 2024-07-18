<?php
require 'Curso.php';
require 'GerenciadorCursos.php';

// Verifica se os dados do formulário foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cursoNome = $_POST['curso'];
    $descricao = $_POST['descricao'];
    $cargahoraria = $_POST['cargahoraria'];
    $professor = $_POST['professor'];

    // Cria um novo objeto Curso
    $novoCurso = new Curso($cursoNome, $descricao, $cargahoraria, $professor);

    // Cria uma instância do GerenciadorCursos
    $gerenciadorCursos = new GerenciadorCursos();

    // Adiciona o curso usando o método adicionarCurso do GerenciadorCursos
    $gerenciadorCursos->adicionarCurso($novoCurso);

    // Redireciona para a página principal após adicionar o curso
    header('Location: index.php');
    exit;
}
?>
