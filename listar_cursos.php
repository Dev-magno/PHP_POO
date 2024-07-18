<?php
require 'GerenciadorCursos.php'; 

// CRUD gerenciado usando o GerenciadorCursos
$gerenciadorCursos = new GerenciadorCursos();
$cursos = $gerenciadorCursos->getCursos();

// Faz a exibição da lista de cursos
if (!empty($cursos)) {
    foreach ($cursos as $indice => $curso) {
        echo "<div class='item-curso'>";
        echo "Curso: " . htmlspecialchars($curso['curso'], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Descrição: " . htmlspecialchars($curso['descricao'], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Carga Horária: " . htmlspecialchars($curso['cargahoraria'], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Professor: " . htmlspecialchars($curso['professor'], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum curso encontrado.</p>";
}
?>
