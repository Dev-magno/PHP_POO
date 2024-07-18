<?php
// Classe Curso para representar o curso
class Curso {
    private $curso;
    private $descricao;
    private $cargahoraria;
    private $professor;

    // Construtor da classe que será público
    public function __construct($curso, $descricao, $cargahoraria, $professor) {
        $this->curso = $curso;
        $this->descricao = $descricao;
        $this->cargahoraria = $cargahoraria;
        $this->professor = $professor;
    }

    // Getters que servem para fazer o acesso às propriedades
    public function getCurso() {
        return $this->curso;
    }

    public function getDescricao() {
        return $this->descricao;
    }
    
    public function getCargahoraria() {
        return $this->cargahoraria;
    }

    public function getProfessor() {
        return $this->professor;
    }
}
?>

