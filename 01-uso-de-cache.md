# Utilização de banco de dados em memória para Cache

## Contexto

Há um endpoint com uma query SQL custosa. O resultado dessa query pode ser armazenado em cache

## Status

Decidido

## Descrição

Foi escolhido o banco Redis para armazenar o cache.

Opções consideradas:
- Redis
- Memcached
- Elatic Cache
- DynamoDB

## Resultados

Com esse cache, nosso endpoint de busca de especialistas mais bem avaliados teve uma melhoria de 300%.
