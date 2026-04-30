class Pessoa {
    #nota;

    constructor(nome, idade, funcao, nota) {
        this.nome = nome;
        this.idade = idade;
        this.funcao = funcao;
        this.#nota = nota;
    }

    verNota() {
        return this.#nota;
    }

    apresentar() {
        console.log(`Olá, eu me chamo ${this.nome}, tenho ${this.idade} anos e sou ${this.funcao} desta escola.`);
    }
}

class Aluno extends Pessoa {
    estudar() {
        console.log(`Olá professor, eu sou ${this.nome} e gostaria de saber minha nota.`);
    }
}

class Professor extends Pessoa {
    falar() {
        console.log(`Oi, só o diretor sabe. Diretor, onde estão as notas?`);
    }
}

class Diretor extends Pessoa {
    boletim(aluno) {
        console.log(`Olá, as notas foram lançadas. ${aluno.nome}, sua nota é ${aluno.verNota()}.`);
    }
}

// objetos
const Brt = new Aluno("Gustavo Barreto", 17, "aluno", 9);
const Mago = new Professor("Raul Porto", 43, "professor");
const Ma = new Diretor("Marcos Alves", 67, "diretor");
const Aqv = new pessoa ("Andreia", 55, "funcionario")

// execução
Brt.apresentar();
Mago.apresentar();
Ma.apresentar();
Aqv.apresentar();

Brt.estudar();
Mago.falar();
Ma.boletim(Brt);

console.log("Nota do aluno:", Brt.verNota());