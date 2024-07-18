<?php
class GerenciadorCursos {
    private $cursos = [];
    private $arquivo = 'dados.json';

    // Construtor da classe que carrega os dados JSON
    public function __construct() {
        if (file_exists($this->arquivo)) {
            $dados = file_get_contents($this->arquivo);
            $this->cursos = json_decode($dados, true) ?? [];
        }
    }

    // Adicionar novo curso e salvar em arquivo JSON
    public function adicionarCurso($curso) {
        $this->cursos[] = [
            'curso' => $curso->getCurso(),
            'descricao' => $curso->getDescricao(),
            'cargahoraria' => $curso->getCargahoraria(),
            'professor' => $curso->getProfessor()
        ];
        $this->salvarDados();
    }

     // Edita um curso existente pelo índice e salva no arquivo JSON
     public function editarCurso($indice, $curso) {
        if (isset($this->cursos[$indice])) {
            $this->cursos[$indice] = [
                'curso' => $curso->getCurso(),
                'descricao' => $curso->getDescricao(),
                'cargahoraria' => $curso->getCargahoraria(),
                'professor' => $curso->getProfessor()
            ];
            $this->salvarDados();
        }
    }

    // Remove um curso pelo índice e salva no arquivo JSON
    public function deletarCurso($indice) {
        if (isset($this->cursos[$indice])) {
            array_splice($this->cursos, $indice, 1);
            $this->salvarDados();
        }
    }

    // Retorna a lista de cursos
    public function getCursos() {
        return $this->cursos;
    }
   
    // Salva os dados no arquivo JSON
    private function salvarDados() {
        file_put_contents($this->arquivo, json_encode($this->cursos, JSON_PRETTY_PRINT));
    }
}
?>
