# Projeto do curso de _Arquitetura e Escalabilidade em PHP_

## Setup inicial

1. Após realizar o clone do projeto, instale as dependências do mesmo com:
```shell
composer install
```

2. Caso você não possua o `composer` instalado localmente:
```shell

docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) composer:2.5.8 install
```

3. Com as dependências instaladas, crie o arquivo de configuração `.env`:
```shell
cp .env.example .env
```

4. Inicie o ambiente _Docker_ executando:
```shell
docker compose up -d
```

5. Dê permissões ao usuário correto para escrever logs na aplicação
```shell
docker compose exec app chown -R www-data:www-data /app/storage
```

6. Garanta que o contêiner de banco de dados está de pé. Os logs devem exibir a mensagem _ready for connections_ nas últimas linhas
```shell
docker compose logs database
``` 
Aguarde até que o comando acima tenha como uma das últimas linhas a mensagem _ready for connections_.

7. Para criar o banco de dados, execute:
```shell
docker compose exec app php artisan migrate --seed
```

Muitos dados serão criados (1000 especialistas com 1000 avaliações cada), então essa última etapa será demorada. Enquanto ela executa, a API já estará acessível através do endereço http://localhost:8123/api. Além disso, o endereço http://localhost:8025 provê acesso ao serviço de e-mail _Mailpit_.
