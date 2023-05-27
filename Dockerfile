FROM php:8.2-alpine

RUN docker-php-ext-install pdo_mysql
