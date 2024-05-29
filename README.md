# Projeto 1 - PHP Registo de Utilizadores
Início: 2024/05/29

Projeto criado com o intuíto de estudo para inteface CRUD com PHP e MYSQL.
- Será uma interface simple para registo de utilizadores com:
CRUD - Inserção, Leitura, Atualização e Excluzão de utilizadores 


#### Pré-requisitos para este projeto
- Visual Studio Code (codar)
- Apache com PHP (ou outro servidor web)
- BootStrap
- MySQL
- DBeaver vou utilizar este SGBD para experimentar, outros que já utilizei: PHPMyADmin, HeidiSQL e WorkBench

Criar a Base de Dados de forma manual ou visual

#### Base de Dados:

~~~sql
CREATE TABLE php_user.usuarios (
	id INT auto_increment NOT NULL,
	nome varchar(45) NOT NULL,
	email varchar(255) NOT NULL,
	senha varchar(100) NOT NULL,
	data_nasc DATE NOT NULL,
	CONSTRAINT usuarios_pk PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
~~~

### Pontos Principais de Trabalho:

- Adicição dos ficheiros css e js do bootstrap a raíz do projeto
- Criação da página index.php
- Adição do código base do bootstrap para a estrutura inicial
- Adição do código nav do bootstrap
- Modificação do código inicial conforme o que necessito
- Criando um Switch para as rotas
- Adicionando o Rota em nosso menu de navegação
- Criado o ficheiro config com os dados de conexão com a BD
- Formulário para inserir os dados novo-utilizador.php
- Criando a página salvar-utilizador.php onde terá um switch com o SQL
- Adicionado ao formulário o método de inserir
