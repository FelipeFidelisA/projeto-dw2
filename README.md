# Alvora Finanças

Sistema de gerenciamento financeiro pessoal que permite controlar receitas e despesas de forma simples e eficiente.

## Sobre o Projeto

Alvora Finanças é uma aplicação web desenvolvida para ajudar usuários a gerenciar suas finanças pessoais. O sistema oferece:

- Registro e categorização de receitas
- Registro e categorização de despesas
- Dashboard com visão geral da situação financeira
- Análise de gastos por categoria
- Controle de transações recorrentes
- Interface intuitiva e responsiva

A proposta do Alvora Finanças é simplificar o controle financeiro pessoal, permitindo que qualquer pessoa possa acompanhar seu fluxo de caixa, identificar padrões de gastos e tomar decisões financeiras mais conscientes.

## Requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e NPM
- PostgreSQL (ou SQLite para desenvolvimento)
- Docker e Docker Compose (opcional)

## Instalação

### Usando Docker

1. Clone o repositório:
   ```
   git clone https://github.com/seu-usuario/alvora-financas.git
   cd alvora-financas
   ```

2. Configure o arquivo .env:
   ```
   cp .env.example .env
   ```

3. Inicie os containers Docker:
   ```
   docker-compose up -d
   ```

4. Instale as dependências e configure a aplicação:
   ```
   docker exec -it app composer install
   docker exec -it app php artisan key:generate
   docker exec -it app php artisan migrate
   docker exec -it app npm install
   docker exec -it app npm run build
   ```

### Instalação Local

1. Clone o repositório:
   ```
   git clone https://github.com/seu-usuario/alvora-financas.git
   cd alvora-financas
   ```

2. Configure o arquivo .env:
   ```
   cp .env.example .env
   ```

3. Instale as dependências PHP:
   ```
   composer install
   ```

4. Gere a chave da aplicação:
   ```
   php artisan key:generate
   ```

5. Configure o banco de dados no arquivo .env e execute as migrações:
   ```
   php artisan migrate
   ```

6. Instale as dependências JavaScript:
   ```
   npm install
   ```

7. Compile os assets:
   ```
   npm run build
   ```

## Executando o Projeto

### Com Docker

A aplicação já estará rodando após a instalação com Docker na porta 80.
Acesse: http://localhost

### Localmente

1. Inicie o servidor de desenvolvimento:
   ```
   php artisan serve
   ```

2. Em outro terminal, inicie o Vite para compilação de assets em tempo real:
   ```
   npm run dev
   ```

3. Acesse a aplicação em: http://localhost:8000

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo LICENSE para mais detalhes.