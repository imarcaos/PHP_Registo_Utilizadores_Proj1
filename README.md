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
- DBeaver vou utilizar este para experimentar, outros que já utilizei: PHPMyADmin, HeidiSQL e WorkBench

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

