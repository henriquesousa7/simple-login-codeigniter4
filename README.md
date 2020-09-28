# CodeIgniter 4 - Simple Login

## O que é CodeIgniter?

O CodeIgniter é um Frameword PHP completo, leve, rápida, flexível e seguro. 
Mais informações podem ser encontradas no [site oficial](http://codeigniter.com).

## Testando a Aplicação

Baixe o projeto ou clone em um diretório de sua preferência.

Após terminar de baixar, execute o comando `composer update` no diretorio criado para atualizar os repositorios do projeto.

Você pode utilizar o servidor de testes do próprio CodeIgniter utilizando o comando `php spark serve`, mas se preferir, pode ser usado algum servidor Web, como o Apache, IIS etc. 


**Lembrando que o host deve ser apostado para o diretório '/public' da aplicação**

## Setup

Copie o arquivo `env` para `.env` e personalizar seu aplicativo, especificamente a baseURL
e quaisquer configurações do banco de dados.

## Base de Dados

Use o script para criar a base de dados que é utilizada no projeto.

```sql
CREATE DATABASE users;
USE users;

CREATE TABLE accounts(
	id INT NOT NULL AUTO_INCREMENT,
	usuario VARCHAR( 25 ) NOT NULL UNIQUE,
	senha VARCHAR( 40 ) NOT NULL ,
	email VARCHAR( 100 ) NOT NULL UNIQUE,
	PRIMARY KEY (id)
);
```