FROM php:5.6-fpm-alpine

# 更新安装源
RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories

RUN apk update

RUN apk add --no-cache --virtual .build-deps \
    g++ make autoconf

RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
docker-php-ext-configure gd \
--with-gd \
--with-freetype-dir=/usr/include/ \
--with-png-dir=/usr/include/ \
--with-jpeg-dir=/usr/include/ && \
docker-php-ext-install gd && \
apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

RUN docker-php-ext-install mysql && docker-php-ext-enable mysql


ENV PHPREDIS_VERSION 3.1.3

RUN curl -L -o /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/$PHPREDIS_VERSION.tar.gz \
    && tar xfz /tmp/redis.tar.gz \
    && rm -r /tmp/redis.tar.gz \
    && mkdir -p /usr/src/php/ext \
    && mv phpredis-$PHPREDIS_VERSION /usr/src/php/ext/redis \
    && docker-php-ext-install redis \
    && rm -rf /usr/src/php \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && docker-php-ext-install pdo pdo_mysql