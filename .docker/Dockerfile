FROM php:8.3-fpm as dev

RUN apt-get update && apt-get install -y  \
    git \
    unzip \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libpq-dev \
    libwebp-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    pkg-config \
    libbson-1.0 \
    --no-install-recommends \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql \
    && pecl install mongodb && docker-php-ext-enable mongodb

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
