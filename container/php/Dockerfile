FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git

RUN docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY ./container/php/php.ini /usr/local/etc/php/php.ini
# timezone
ARG TZ=Asia/Tokyo

RUN chown -R www-data:www-data /var/www/html

USER www-data
