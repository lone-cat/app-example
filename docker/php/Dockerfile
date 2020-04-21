FROM php:7.4-fpm
MAINTAINER Alex <alex@melentev.net>

RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN apt-get update \
    && apt-get install -y wget git unzip \
    && pecl install xdebug-2.9.4 \
    && docker-php-ext-enable xdebug

COPY ./conf/php.ini /usr/local/etc/php/php.ini
COPY ./conf/php-fpm.conf /usr/local/etc/php-fpm.conf
COPY ./conf/php-fpm.d /usr/local/etc/php-fpm.d

ENV XDEBUG_CONFIG="remote_host=host.docker.internal remote_enable=1 extended_info=1"
ENV PHP_IDE_CONFIG="serverName=Docker"

WORKDIR /app
CMD ["php-fpm"]