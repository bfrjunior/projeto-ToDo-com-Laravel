# Projeto Todo - Agendador de Tarefas em Laravel

Bem-vindo ao Projeto Todo, um agendador de tarefas desenvolvido em Laravel que permite aos usuários gerenciar suas tarefas de forma eficiente.

![Todo App Screenshot](![image](https://github.com/bfrjunior/projeto-ToDo-com-Laravel/assets/66083278/cffc3fd7-9ee1-42f3-9de6-ef042008b0e1))

## Funcionalidades

- Cadastro, login e autenticação de usuários usando proteção CSRF.
- Gerenciamento de tarefas, incluindo criação, atualização e exclusão.
- Categorização de tarefas para uma melhor organização.
- Banco de dados MySQL para armazenamento persistente.
- Seeders pré-configurados para geração de tarefas, categorias e usuários para testes.

## Requisitos de Instalação

Certifique-se de ter as seguintes ferramentas instaladas antes de prosseguir:

- PHP (versão 8.0.12)
- Composer
- Laravel (versão 9)
- MySQL

## Instalação

1. Clone este repositório para sua máquina local.
2. Execute `composer install` para instalar as dependências do projeto.
3. Crie um banco de dados MySQL para o projeto.
4. Renomeie o arquivo `.env.example` para `.env` e configure as informações do banco de dados.
5. Execute `php artisan key:generate` para gerar a chave de aplicação.
6. Execute `php artisan migrate` para executar as migrações do banco de dados.
7. Execute `php artisan db:seed` para preencher o banco de dados com dados de teste.

## Uso

1. Inicie o servidor usando `php artisan serve`.
2. Acesse o aplicativo no seu navegador em `http://localhost:8000`.
3. Registre uma nova conta ou faça login com as credenciais de teste fornecidas.
4. Comece a adicionar e gerenciar suas tarefas.








