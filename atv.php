<?php

class Pessoa {
    private $nota;

    public $nome;
    public $idade;
    public $funcao;

    public function __construct($nome, $idade, $funcao, $nota = null) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->funcao = $funcao;
        $this->nota = $nota;
    }

    public function verNota() {
        return $this->nota;
    }

    public function apresentar() {
        echo "Olá, eu me chamo {$this->nome}, tenho {$this->idade} anos e sou {$this->funcao} desta escola.<br>";
    }
}

class Aluno extends Pessoa {
    public function estudar() {
        echo "Olá professor, eu sou {$this->nome} e gostaria de saber minha nota.<br>";
    }
}

class Professor extends Pessoa {
    public function falar() {
        echo "Oi, só o diretor sabe. Diretor, onde estão as notas?<br>";
    }
}

class Diretor extends Pessoa {
    public function boletim($aluno) {
        echo "Olá, as notas foram lançadas. {$aluno->nome}, sua nota é {$aluno->verNota()}.<br>";
    }
}

// objetos
$Brt = new Aluno("Gustavo Barreto", 17, "aluno", 9);
$Mago = new Professor("Raul Porto", 43, "professor");
$Ma = new Diretor("Marcos Alves", 67, "diretor");
$Aqv = new Pessoa("Andreia", 55, "funcionário");

// execução
$Brt->apresentar();
$Mago->apresentar();
$Ma->apresentar();
$Aqv->apresentar();

$Brt->estudar();
$Mago->falar();
$Ma->boletim($Brt);

echo "Nota do aluno: " . $Brt->verNota();

?>