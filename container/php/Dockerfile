# ベースイメージの指定
FROM php:7.4-fpm

# 作成した設定ファイルをコンテナ内にコピー
COPY ./container/php/php.ini /usr/local/etc/php/php.ini

# timezone
ARG TZ=Asia/Tokyo

RUN apt-get update -y && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath

# Install Composer
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt install -y npm \
    && npm install n -g \
    && n stable

# コンテナ内で作業する際のカレンとディレクトリの指定
WORKDIR /var/www/html