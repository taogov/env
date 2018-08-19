FROM php:5.6-fpm-alpine

RUN apk update

RUN apk add --no-cache --virtual .build-deps \
    g++ make autoconf

RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
docker-php-ext-configure gd \
--with-gd \
--with-freetype-dir=/usr/include/ \
--with-png-dir=/usr/include/ \
--with-jpeg-dir=/usr/include/ && \
NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
docker-php-ext-install -j${NPROC} gd && \
apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

RUN docker-php-ext-install mysql && docker-php-ext-enable mysql

RUN pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo pdo_mysql