FROM php:7.0.30-fpm
RUN pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && docker-php-ext-install mysqli && docker-php-ext-enable mysqli