# JSePHP

# 📘 Sistema de Escola — JavaScript & PHP

Este projeto demonstra conceitos fundamentais de **Programação Orientada a Objetos (POO)** utilizando duas linguagens: **JavaScript** e **PHP**.
A proposta é simular a interação entre diferentes papéis dentro de uma escola: **Aluno, Professor e Diretor**.

---

## 🚀 Objetivo

Apresentar, na prática, conceitos como:

* Encapsulamento
* Herança
* Polimorfismo
* Organização de responsabilidades entre classes

---

## 🧠 Conceitos Aplicados

### 🔒 Encapsulamento

A nota do aluno é protegida:

* **JavaScript:** `#nota`
* **PHP:** `private $nota`

Ela só pode ser acessada através do método:

```js
verNota()
```

---

### 🧬 Herança

As classes **Aluno**, **Professor** e **Diretor** herdam da classe base:

```js
Pessoa
```

---

### 🎭 Polimorfismo

Cada classe possui comportamentos próprios:

* `Aluno → estudar()`
* `Professor → falar()`
* `Diretor → boletim()`

---

## 📂 Estrutura do Sistema

### 👤 Pessoa (Classe Base)

Atributos:

* nome
* idade
* função
* nota (privada)

Métodos:

* `apresentar()`
* `verNota()`

---

### 🎓 Aluno

Método:

* `estudar()` → solicita a nota

---

### 👨‍🏫 Professor

Método:

* `falar()` → direciona ao diretor

---

### 🧑‍💼 Diretor

Método:

* `boletim(aluno)` → informa a nota do aluno

---

## 💻 Implementação em JavaScript

Características:

* Uso de `class`
* Encapsulamento com `#`
* Métodos dentro da classe

Execução:

```bash
node index.js
```

---

## 🐘 Implementação em PHP

Características:

* Uso de `class`
* Encapsulamento com `private`
* Saída com `echo`

Execução:

```bash
php index.php
```

Ou rodando em servidor local:

```bash
localhost/projeto/index.php
```

---

## 🔄 Fluxo do Sistema

1. O aluno pergunta sua nota
2. O professor responde que não sabe
3. O diretor informa a nota
4. A nota é exibida no final

---

## 📌 Exemplo de Saída

```
Olá, eu me chamo Gustavo Barreto...
Olá professor, eu sou Gustavo...
Oi, só o diretor sabe...
Olá, as notas foram lançadas. Gustavo, sua nota é 9.
Nota do aluno: 9
```

---

## 🛠 Tecnologias Utilizadas

* JavaScript (Node.js)
* PHP

---

## 📈 Possíveis Melhorias

* Interface gráfica (HTML/CSS)
* Sistema com múltiplos alunos
* Entrada de dados pelo usuário
* Validação de notas
* Banco de dados

---

## 👨‍💻 Autor

Projeto desenvolvido para fins educacionais, com foco em aprendizado de POO.

---

## 📄 Licença

Uso livre para estudos e prática.
