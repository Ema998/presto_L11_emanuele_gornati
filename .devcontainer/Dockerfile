# Usa immagine base PHP 8.1 con OpenSSL 1.1 installata
FROM mcr.microsoft.com/vscode/devcontainers/php:8.1

# Aggiorna e installa dipendenze per Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    libonig-dev \
    libssl1.1 \
    && docker-php-ext-install zip pdo_mysql mbstring

# Assicura che composer sia installato
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cartella di lavoro
WORKDIR /workspace

# Permetti l'uso della porta 8000 (Laravel serve)
EXPOSE 8000
