FROM mcr.microsoft.com/vscode/devcontainers/php:8.3

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libonig-dev \
    libssl3 \
    && docker-php-ext-install zip pdo_mysql mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /workspace

EXPOSE 8000
