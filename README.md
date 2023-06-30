# Projeto do curso de _Arquitetura e Escalabilidade em PHP_

## Setup inicial

Após realizar o clone do projeto, instale as dependências do mesmo com:

```shell
composer install
```

Com as dependências instaladas, crie o arquivo de configuração `.env`:
```shell
cp .env.example .env
```

Inicie o ambiente _Docker_ executando:
```shell
docker compose up -d
```

Para criar o banco de dados, execute:
```shell
docker compose exec app php artisan migrate --seed
```

Para adicionar o usuário, especialistas e suas avaliações no banco, execute:
```shell
docker compose exec app php artisan db:seed
```

Muitos dados serão criados (1000 especialistas com 1000 avaliações cada), então essa última etapa será demorada. Enquanto ela executa, a API já estará acessível através do endereço http://localhost:8123/api. Além disso, o endereço http://localhost:8025 provê acesso ao serviço de e-mail _Mailpit_.
