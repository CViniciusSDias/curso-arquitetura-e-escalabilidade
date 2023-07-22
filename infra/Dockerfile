FROM openswoole/swoole:php8.2-alpine

RUN docker-php-ext-install pdo_mysql
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
  && pecl install redis \
  && docker-php-ext-enable redis \
  && apk del pcre-dev ${PHPIZE_DEPS}

COPY . /app
RUN chown -R www-data:www-data /app/storage

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

WORKDIR /app
RUN composer install

ENTRYPOINT ["php", "artisan", "octane:start", "--host=0.0.0.0"]
