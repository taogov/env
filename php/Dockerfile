FROM php:7.0-fpm-alpine

RUN apk update

RUN apk add --no-cache --virtual .build-deps \
    g++ make autoconf

RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev

RUN pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo pdo_mysql