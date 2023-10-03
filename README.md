# API de Produtos

Aqui você encontrará os detalhes sobre o projeto: como instalar, executar, funcionalidades, recursos e tecnologias utilizadas.

## Status do projeto

<p align="center">
<img src="https://img.shields.io/badge/STATUS-EM DESENVOLVIMENTO-blue"/>
</p>

## Introdução

A **API de Produtos** é uma aplicação desenvolvida utilizando Laravel, um framework PHP. 

## Instalação e execução

0. Pré-requisitos: ter o *PHP* e *Composer* instalados.
1. Inicialmente, clone o repositório com o comando `git clone git@github.com:stonefullstm/laravel-products-api.git`
2. Na raiz do repositório clonado, execute `composer install` a fim de instalar as dependências
3. Execute `php artisan serve` para iniciar a aplicação
4. A aplicação deve executar no navegador em `http://localhost:8000/`

## Funcionalidades

A API oferece um CRUD básico, com as seguintes rotas:

- GET /api/produtos - retorna todos os produtos cadastrados
- GET /api/produtos/id - retorna um produto com o id informado
- POST /api/produtos - cadastra um produto usando form encoded. Devem ser informados os campos `nome` e `preco`.
- PUT /api/produtos/id - atualiza o cadastro do produto cujo id é informado, usando os campos form encoded `nome` e `preco`.
- DELETE //api/produtos/id - remove o produto cujo id é informado.

## Tecnologias utilizadas

Linguagem de programação [PHP](https://www.php.net/) e framework [Laravel](https://laravel.com/). Como banco de dados, optou-se pelo [SQLite](https://www.sqlite.org/index.html).