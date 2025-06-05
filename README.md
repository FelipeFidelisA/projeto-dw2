# Logo 
alvora
fonte: poppins
<br>
<img src= "docs/logo.png" width= "250">



# Passo a passo para subir o projeto
Primeiro é necessário ter o `composer` instalado.

```bash
sudo apt install composer
```

Com o composer devidamente instalado, execute os seguintes comandos dentro da pasta do projeto, onde tem o `docker-compose.yaml`:

```bash
composer install
```
Isso vai gerar a pasta /vendor no projeto. A partir daí é só subir o server com:

```bash

./vendor/bin/sail up
```
Isso irá subir todo o ambiente e te dar acesso ao artisan.
Tem como criar um alias pra esse comando ficar mais curto. Depois vejo se coloco um script aqui.

------------------
## Artisan
Artisan é a CLI do Laravel. Serve pra facilitar algumas tarefas, como criar diferentes tipos de arquivo nos locais certos.
Normalmente usa-se `php artisan <comando>`, mas como estamos num ambiente com o `sail`, vamos usar `./vendor/bin/sail artisan <comando>`

### Principais comandos

```bash
./vendor/bin/sail up    # Sobe o servidor local

./vendor/bin/sail artisan make:model <nome>   # Cria um model
./vendor/bin/sail artisan make:controller <nome>    # Cria um controller
./vendor/bin/sail artisan make:migration create_tabela  # Cria uma migration
./vendor/bin/sail artisan make:model <nome> -mc  #Isso vai criar tanto o model quanto os arquivos de migration e controller deste model

./vendor/bin/sail artisan migrate   # Executa as migrations

./vendor/bin/sail artisan route:list    # Lista as rotas
```

## Estrutura básica do Laravel

`app/`: Lógica da aplicação (Models, Controllers, etc.).

`routes/`: Define as rotas (web.php, api.php).

`resources/views/`: Blade templates (views).

`database/`: Migrations, seeders e factories.

`public/`: Entrada da app (index.php, assets públicos).

`config/`: Arquivos de configuração.

`.env`: Variáveis de ambiente (DB, chave da app, etc.).

## Links Úteis
Aqui tem 2 materiais brabos. Só pular a parte de configuração de ambiente, que é outra e o resto já vai ajudar.

[Link 1](https://youtube.com/playlist?list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&si=oZ1CaBhEj_hckk_B)


[Link 2](https://youtube.com/playlist?list=PL5X822QTM1JZCIQyvhqVfUA0SCOvtByrd&si=MgporS_9u8IxX4v8)

-------------------------------------

Alias para reduzir o comando

```bash
echo "alias sail='./vendor/bin/sail'" >> ~/.bashrc && source ~/.bashrc
```



