FROM php:8.0.3-cli

RUN docker-php-ext-install pdo_mysql

RUN apk update && apk add php8-dev g++ make

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo 'xdebug.remote_enable = 1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini